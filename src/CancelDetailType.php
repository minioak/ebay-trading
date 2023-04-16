<?php

namespace InTradeSys\eBay\trading;

/*
 * This class was generated from a WSDL file from March 29, 2023, 11:17 am.
 * Executed by globalsync.
 * Provided and maintained by:
 *
 *  InTradeSys GmbH
 *  Dillenburger Str. 75
 *  D-51105 Cologne
 *  ---
 *  https://www.intradesys.com
 *
 *
 * For paid support options ranging from on-demand,
 * best effort to 24/7 SLAs, please contact us anytime:
 *  ebay.api@InTradeSys.com
 *
 * For more information, visit:
 *  https://sdk.intradesys.com
 */


/**
 * Type used by the
 * CancelDetail
 * container, which consists of details related to an eBay order that has been cancelled or is in the process of
 * possibly being cancelled.
 **/
class CancelDetailType extends EbatNs_ComplexType
{
    const TAG = 'CancelDetailType';
    const NAME = 'CancelDetailType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $CancelReason = null;

    /**
     * @var string|null
     */
    protected $CancelReasonDetails = null;

    /**
     * @var string|null
     */
    protected $CancelIntiator = null;

    /**
     * @var string|null
     */
    protected $CancelIntiationDate = null;

    /**
     * @var string|null
     */
    protected $CancelCompleteDate = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCancelReason()
    {
        return $this->_dc($this->CancelReason, 'CancelReason');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCancelReason($value)
    {
        $this->CancelReason = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCancelReasonDetails()
    {
        return $this->_dc($this->CancelReasonDetails, 'CancelReasonDetails');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCancelReasonDetails($value)
    {
        $this->CancelReasonDetails = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCancelIntiator()
    {
        return $this->_dc($this->CancelIntiator, 'CancelIntiator');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCancelIntiator($value)
    {
        $this->CancelIntiator = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCancelIntiationDate()
    {
        return $this->_dc($this->CancelIntiationDate, 'CancelIntiationDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCancelIntiationDate($value)
    {
        $this->CancelIntiationDate = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCancelCompleteDate()
    {
        return $this->_dc($this->CancelCompleteDate, 'CancelCompleteDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCancelCompleteDate($value)
    {
        $this->CancelCompleteDate = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CancelReason' => [],
            'CancelReasonDetails' => [],
            'CancelIntiator' => [],
            'CancelIntiationDate' => [],
            'CancelCompleteDate' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CancelDetailType::_register();
