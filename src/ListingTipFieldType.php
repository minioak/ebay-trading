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
 * This type is deprecated.
 **/
class ListingTipFieldType extends EbatNs_ComplexType
{
    const TAG = 'ListingTipFieldType';
    const NAME = 'ListingTipFieldType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ListingTipFieldID = null;

    /**
     * @var string|null
     */
    protected $FieldTip = null;

    /**
     * @var string|null
     */
    protected $CurrentFieldText = null;

    /**
     * @var string|null
     */
    protected $CurrentFieldValue = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingTipFieldID()
    {
        return $this->_dc($this->ListingTipFieldID, 'ListingTipFieldID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setListingTipFieldID($value)
    {
        $this->ListingTipFieldID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFieldTip()
    {
        return $this->_dc($this->FieldTip, 'FieldTip');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFieldTip($value)
    {
        $this->FieldTip = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCurrentFieldText()
    {
        return $this->_dc($this->CurrentFieldText, 'CurrentFieldText');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCurrentFieldText($value)
    {
        $this->CurrentFieldText = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCurrentFieldValue()
    {
        return $this->_dc($this->CurrentFieldValue, 'CurrentFieldValue');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCurrentFieldValue($value)
    {
        $this->CurrentFieldValue = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ListingTipFieldID' => [],
            'FieldTip' => [],
            'CurrentFieldText' => [],
            'CurrentFieldValue' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ListingTipFieldType::_register();
