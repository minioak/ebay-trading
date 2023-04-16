<?php

namespace InTradeSys\eBay\trading;


class EbatNs_Response extends AbstractResponseType
{
    /**
     * @param bool $onlyErrors
     * @return bool
     */
    public function isGood($onlyErrors = true)
    {
        $ack = $this->getAck();
        $success = AckCodeType::CodeType_Success;
        $warning = AckCodeType::CodeType_Warning;
        $goodCodes = $onlyErrors
            ? [$success, $warning]
            : [$success];

        return $ack && in_array($ack->getTypeValue(), $goodCodes);
    }

    /**
     * @return ErrorType[]
     */
    public function listErrors()
    {
        return $this->getErrors();
    }

    /**
     * @param string $msg
     * @param string $code
     * @param string $severity
     * @param string $classification
     */
    public function raiseError(
        $msg,
        $code = '0',
        $severity = SeverityCodeType::CodeType_Error,
        $classification = ErrorClassificationCodeType::CodeType_SystemError
    ) {
        $error = new ErrorType();
        $error->setErrorCode(strval($code));
        $error->setSeverityCode($severity);
        $error->setLongMessage(htmlentities($msg));
        $error->setErrorClassification($classification);
        $this->_addError($error);
    }

    /**
     * @param string $messageText
     * @param null $parser
     */
    public static function parseError($messageText, $parser = null)
    {
        $responseError = new EbatNs_ResponseError();
        $responseError->raiseError($messageText);

        return $responseError;
    }

    /**
     * @param ErrorType $error
     */
    private function _addError($error)
    {
        $this->setAck(AckCodeType::CodeType_Failure);
        $this->Errors = array_merge($this->Errors ? $this->Errors : [], [$error]);
    }

    /**
     * @param bool $asHtml
     * @return string
     */
    public function stringifyErrors($asHtml = false)
    {
        $message = '';
        foreach ($this->listErrors() as $error) {
            $msg = $error->getLongMessage();
            $message .= '#' . $error->getErrorCode() . ' : ' .
                ($asHtml ? htmlentities($msg) . '<br>' : $msg . "\n");
        }

        return $message;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $errors = $this->stringifyErrors();

        return "Ack: " . $this->getAck() .
            ($errors ? "\nErrors:\n$errors" : '') .
            "\nResponse:\n" . $this->toXml();
    }

    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }
}

EbatNs_Response::_register();
