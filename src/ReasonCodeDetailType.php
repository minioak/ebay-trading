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
 * A container for VeRO reason code details.
 **/
class ReasonCodeDetailType extends EbatNs_ComplexType
{
    const TAG = 'ReasonCodeDetailType';
    const NAME = 'ReasonCodeDetailType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $BriefText = null;

    /**
     * @var string|null
     */
    protected $DetailedText = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBriefText()
    {
        return $this->_dc($this->BriefText, 'BriefText');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBriefText($value)
    {
        $this->BriefText = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDetailedText()
    {
        return $this->_dc($this->DetailedText, 'DetailedText');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDetailedText($value)
    {
        $this->DetailedText = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BriefText' => [],
            'DetailedText' => []
        ], parent::NAME);

        self::assignAttributes(['codeID' => ['type' => 'long']]);
    }

}

ReasonCodeDetailType::_register();
