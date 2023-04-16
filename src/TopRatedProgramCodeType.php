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
 * Enumerated type that consists of the Top-Rated Seller programs that exist around the world.
 **/
class TopRatedProgramCodeType extends EbatNs_EnumType
{
    const TAG = 'TopRatedProgramCodeType';
    const NAME = 'TopRatedProgramCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * If this enumeration value is returned, it indicates that the eBay user is in the US Top-Rated Seller program.
     **/
    const CodeType_US = 'US';

    /**
     * If this enumeration value is returned, it indicates that the eBay user is in the UK Top-Rated Seller program.
     **/
    const CodeType_UK = 'UK';

    /**
     * If this enumeration value is returned, it indicates that the eBay user is in the Germany Top-Rated Seller
     * program.
     **/
    const CodeType_DE = 'DE';

    /**
     * If this enumeration value is returned, it indicates that the eBay user is in the Global Top-Rated Seller program.
     **/
    const CodeType_Global = 'Global';

    /**
     * Reserved for internal or future use.
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
     * @return TopRatedProgramCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param TopRatedProgramCodeType|null $value
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
    public function isUS()
    {
        return $this->_value === self::CodeType_US;
    }

    /**
     * @return bool
     */
    public function isUK()
    {
        return $this->_value === self::CodeType_UK;
    }

    /**
     * @return bool
     */
    public function isDE()
    {
        return $this->_value === self::CodeType_DE;
    }

    /**
     * @return bool
     */
    public function isGlobal()
    {
        return $this->_value === self::CodeType_Global;
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

TopRatedProgramCodeType::_register();
