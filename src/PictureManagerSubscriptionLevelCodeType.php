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
class PictureManagerSubscriptionLevelCodeType extends EbatNs_EnumType
{
    const TAG = 'PictureManagerSubscriptionLevelCodeType';
    const NAME = 'PictureManagerSubscriptionLevelCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is not used.
     **/
    const CodeType_Free = 'Free';

    /**
     * This value is not used.
     **/
    const CodeType_Level1 = 'Level1';

    /**
     * This value is not used.
     **/
    const CodeType_Level2 = 'Level2';

    /**
     * This value is not used.
     **/
    const CodeType_Level3 = 'Level3';

    /**
     * This value is not used.
     **/
    const CodeType_Level4 = 'Level4';

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
     * @return PictureManagerSubscriptionLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param PictureManagerSubscriptionLevelCodeType|null $value
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
    public function isFree()
    {
        return $this->_value === self::CodeType_Free;
    }

    /**
     * @return bool
     */
    public function isLevel1()
    {
        return $this->_value === self::CodeType_Level1;
    }

    /**
     * @return bool
     */
    public function isLevel2()
    {
        return $this->_value === self::CodeType_Level2;
    }

    /**
     * @return bool
     */
    public function isLevel3()
    {
        return $this->_value === self::CodeType_Level3;
    }

    /**
     * @return bool
     */
    public function isLevel4()
    {
        return $this->_value === self::CodeType_Level4;
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

PictureManagerSubscriptionLevelCodeType::_register();
