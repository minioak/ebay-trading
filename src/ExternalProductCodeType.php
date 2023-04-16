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
 * This enumerated type is deprecated.
 **/
class ExternalProductCodeType extends EbatNs_EnumType
{
    const TAG = 'ExternalProductCodeType';
    const NAME = 'ExternalProductCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_ISBN = 'ISBN';

    /**
     * This value is not used.
     **/
    const CodeType_UPC = 'UPC';

    /**
     * This value is not used.
     **/
    const CodeType_ProductID = 'ProductID';

    /**
     * This value is not used.
     **/
    const CodeType_EAN = 'EAN';

    /**
     * This value is not used.
     **/
    const CodeType_Keywords = 'Keywords';

    /**
     * This value is not used.
     **/
    const CodeType_MPN = 'MPN';

    /**
     * This value is not used.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return ExternalProductCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ExternalProductCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $const = 'self::CodeType_' . $value;
        $this->_value = $value !== null && defined($const) ? constant($const) : null;
    }

    /**
     * @return bool
     */
    public function isISBN()
    {
        return $this->_value === self::CodeType_ISBN;
    }

    /**
     * @return bool
     */
    public function isUPC()
    {
        return $this->_value === self::CodeType_UPC;
    }

    /**
     * @return bool
     */
    public function isProductID()
    {
        return $this->_value === self::CodeType_ProductID;
    }

    /**
     * @return bool
     */
    public function isEAN()
    {
        return $this->_value === self::CodeType_EAN;
    }

    /**
     * @return bool
     */
    public function isKeywords()
    {
        return $this->_value === self::CodeType_Keywords;
    }

    /**
     * @return bool
     */
    public function isMPN()
    {
        return $this->_value === self::CodeType_MPN;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
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

ExternalProductCodeType::_register();
