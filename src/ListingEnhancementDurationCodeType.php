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
 * <span class="tablenote">
 * Note:
 * This enumerated type is no longer applicable, as the Featured First listing feature is deprecated for all
 * sites. If a seller attempts to add Featured First as a listing enhancement (including
 * ListingEnhancement
 * field in an
 * AddItem
 * call and setting its value to <code>Featured</code>), it is allowed, but a warning will be returned announcing
 * the deprecation of the feature. This feature was officially wired off in September 2019.
 * </span>
 * 
 * This enumerated type contains the list of values that can be used by the seller to set the duration of a
 * Featured Gallery in a fixed-price listing. Once set for a listing, the Featured Gallery duration can be increased
 * from 'Days_7' to 'Lifetime' (throughout life of listing), but the duration cannot be decreased from 'Lifetime' to
 * 'Days_7'.
 **/
class ListingEnhancementDurationCodeType extends EbatNs_EnumType
{
    const TAG = 'ListingEnhancementDurationCodeType';
    const NAME = 'ListingEnhancementDurationCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value sets the Featured Gallery duration to one day. This
     * value is deprecated.
     **/
    const CodeType_Days_1 = 'Days_1';

    /**
     * This value sets the Featured Gallery duration to two days. This
     * value is deprecated.
     **/
    const CodeType_Days_2 = 'Days_2';

    /**
     * This value sets the Featured Gallery duration to three days. This
     * value is deprecated.
     **/
    const CodeType_Days_3 = 'Days_3';

    /**
     * This value sets the Featured Gallery duration to four days. This
     * value is deprecated.
     **/
    const CodeType_Days_4 = 'Days_4';

    /**
     * This value sets the Featured Gallery duration to five days. This
     * value is deprecated.
     **/
    const CodeType_Days_5 = 'Days_5';

    /**
     * This value sets the Featured Gallery duration to six days. This
     * value is deprecated.
     **/
    const CodeType_Days_6 = 'Days_6';

    /**
     * This value sets the Featured Gallery duration to seven days. If a
     * listing has a Featured Gallery duration of seven days, it is possible to revise that
     * item and set the Featured Gallery duration to 'Lifetime' (throughout
     * life of listing) (
     **/
    const CodeType_Days_7 = 'Days_7';

    /**
     * This value sets the Featured Gallery duration to eight days. This
     * value is deprecated.
     **/
    const CodeType_Days_8 = 'Days_8';

    /**
     * This value sets the Featured Gallery duration to nine days. This
     * value is deprecated.
     **/
    const CodeType_Days_9 = 'Days_9';

    /**
     * This value sets the Featured Gallery duration to 10 days. This
     * value is deprecated.
     **/
    const CodeType_Days_10 = 'Days_10';

    /**
     * This value sets the Featured Gallery duration to 11 days. This
     * value is deprecated.
     **/
    const CodeType_Days_11 = 'Days_11';

    /**
     * This value sets the Featured Gallery duration to 12 days. This
     * value is deprecated.
     **/
    const CodeType_Days_12 = 'Days_12';

    /**
     * This value sets the Featured Gallery duration to 13 days. This
     * value is deprecated.
     **/
    const CodeType_Days_13 = 'Days_13';

    /**
     * This value sets the Featured Gallery duration to 14 days. This
     * value is deprecated.
     **/
    const CodeType_Days_14 = 'Days_14';

    /**
     * This value sets the Featured Gallery duration to 15 days. This
     * value is deprecated.
     **/
    const CodeType_Days_15 = 'Days_15';

    /**
     * This value sets the Featured Gallery duration to 16 days. This
     * value is deprecated.
     **/
    const CodeType_Days_16 = 'Days_16';

    /**
     * This value sets the Featured Gallery duration to 17 days. This
     * value is deprecated.
     **/
    const CodeType_Days_17 = 'Days_17';

    /**
     * This value sets the Featured Gallery duration to 18 days. This
     * value is deprecated.
     **/
    const CodeType_Days_18 = 'Days_18';

    /**
     * This value sets the Featured Gallery duration to 19 days. This
     * value is deprecated.
     **/
    const CodeType_Days_19 = 'Days_19';

    /**
     * This value sets the Featured Gallery duration to 20 days. This
     * value is deprecated.
     **/
    const CodeType_Days_20 = 'Days_20';

    /**
     * This value sets the Featured Gallery duration to 21 days. This
     * value is deprecated.
     **/
    const CodeType_Days_21 = 'Days_21';

    /**
     * This value sets the Featured Gallery duration to 22 days. This
     * value is deprecated.
     **/
    const CodeType_Days_22 = 'Days_22';

    /**
     * This value sets the Featured Gallery duration to 23 days. This
     * value is deprecated.
     **/
    const CodeType_Days_23 = 'Days_23';

    /**
     * This value sets the Featured Gallery duration to 24 days. This
     * value is deprecated.
     **/
    const CodeType_Days_24 = 'Days_24';

    /**
     * This value sets the Featured Gallery duration to 25 days. This
     * value is deprecated.
     **/
    const CodeType_Days_25 = 'Days_25';

    /**
     * This value sets the Featured Gallery duration to 26 days. This
     * value is deprecated.
     **/
    const CodeType_Days_26 = 'Days_26';

    /**
     * This value sets the Featured Gallery duration to 27 days. This
     * value is deprecated.
     **/
    const CodeType_Days_27 = 'Days_27';

    /**
     * This value sets the Featured Gallery duration to 28 days. This
     * value is deprecated.
     **/
    const CodeType_Days_28 = 'Days_28';

    /**
     * This value sets the Featured Gallery duration to 29 days. This
     * value is deprecated.
     **/
    const CodeType_Days_29 = 'Days_29';

    /**
     * This value sets the Featured Gallery duration to 30 days. This
     * value is deprecated.
     **/
    const CodeType_Days_30 = 'Days_30';

    /**
     * This value sets the Featured Gallery duration to 31 days. This
     * value is deprecated.
     **/
    const CodeType_Days_31 = 'Days_31';

    /**
     * This value sets the Featured Gallery duration to 32 days. This
     * value is deprecated.
     **/
    const CodeType_Days_32 = 'Days_32';

    /**
     * This value sets the Featured Gallery duration to 33 days. This
     * value is deprecated.
     **/
    const CodeType_Days_33 = 'Days_33';

    /**
     * This value sets the Featured Gallery duration to 34 days. This
     * value is deprecated.
     **/
    const CodeType_Days_34 = 'Days_34';

    /**
     * This value sets the Featured Gallery duration to 35 days. This
     * value is deprecated.
     **/
    const CodeType_Days_35 = 'Days_35';

    /**
     * This value sets the Featured Gallery duration to 36 days. This
     * value is deprecated.
     **/
    const CodeType_Days_36 = 'Days_36';

    /**
     * This value sets the Featured Gallery duration to 37 days. This
     * value is deprecated.
     **/
    const CodeType_Days_37 = 'Days_37';

    /**
     * This value sets the Featured Gallery duration to 38 days. This
     * value is deprecated.
     **/
    const CodeType_Days_38 = 'Days_38';

    /**
     * This value sets the Featured Gallery duration to 39 days. This
     * value is deprecated.
     **/
    const CodeType_Days_39 = 'Days_39';

    /**
     * This value sets the Featured Gallery duration to 40 days. This
     * value is deprecated.
     **/
    const CodeType_Days_40 = 'Days_40';

    /**
     * This value sets the Featured Gallery duration to 41 days. This
     * value is deprecated.
     **/
    const CodeType_Days_41 = 'Days_41';

    /**
     * This value sets the Featured Gallery duration to 42 days. This
     * value is deprecated.
     **/
    const CodeType_Days_42 = 'Days_42';

    /**
     * This value sets the Featured Gallery duration to 43 days. This
     * value is deprecated.
     **/
    const CodeType_Days_43 = 'Days_43';

    /**
     * This value sets the Featured Gallery duration to 44 days. This
     * value is deprecated.
     **/
    const CodeType_Days_44 = 'Days_44';

    /**
     * This value sets the Featured Gallery duration to 45 days. This
     * value is deprecated.
     **/
    const CodeType_Days_45 = 'Days_45';

    /**
     * This value sets the Featured Gallery duration to 46 days. This
     * value is deprecated.
     **/
    const CodeType_Days_46 = 'Days_46';

    /**
     * This value sets the Featured Gallery duration to 47 days. This
     * value is deprecated.
     **/
    const CodeType_Days_47 = 'Days_47';

    /**
     * This value sets the Featured Gallery duration to 48 days. This
     * value is deprecated.
     **/
    const CodeType_Days_48 = 'Days_48';

    /**
     * This value sets the Featured Gallery duration to 49 days. This
     * value is deprecated.
     **/
    const CodeType_Days_49 = 'Days_49';

    /**
     * This value sets the Featured Gallery duration to 50 days. This
     * value is deprecated.
     **/
    const CodeType_Days_50 = 'Days_50';

    /**
     * This duration enables the Featured Gallery feature for the life of the listing. Once the
     * Featured Gallery duration is set to 'Lifetime' for a listing, it cannot be changed.
     **/
    const CodeType_Lifetime = 'Lifetime';

    /**
     * This value is reserved for internal or future use.
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
     * @return ListingEnhancementDurationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ListingEnhancementDurationCodeType|null $value
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
    public function isDays_1()
    {
        return $this->_value === self::CodeType_Days_1;
    }

    /**
     * @return bool
     */
    public function isDays_2()
    {
        return $this->_value === self::CodeType_Days_2;
    }

    /**
     * @return bool
     */
    public function isDays_3()
    {
        return $this->_value === self::CodeType_Days_3;
    }

    /**
     * @return bool
     */
    public function isDays_4()
    {
        return $this->_value === self::CodeType_Days_4;
    }

    /**
     * @return bool
     */
    public function isDays_5()
    {
        return $this->_value === self::CodeType_Days_5;
    }

    /**
     * @return bool
     */
    public function isDays_6()
    {
        return $this->_value === self::CodeType_Days_6;
    }

    /**
     * @return bool
     */
    public function isDays_7()
    {
        return $this->_value === self::CodeType_Days_7;
    }

    /**
     * @return bool
     */
    public function isDays_8()
    {
        return $this->_value === self::CodeType_Days_8;
    }

    /**
     * @return bool
     */
    public function isDays_9()
    {
        return $this->_value === self::CodeType_Days_9;
    }

    /**
     * @return bool
     */
    public function isDays_10()
    {
        return $this->_value === self::CodeType_Days_10;
    }

    /**
     * @return bool
     */
    public function isDays_11()
    {
        return $this->_value === self::CodeType_Days_11;
    }

    /**
     * @return bool
     */
    public function isDays_12()
    {
        return $this->_value === self::CodeType_Days_12;
    }

    /**
     * @return bool
     */
    public function isDays_13()
    {
        return $this->_value === self::CodeType_Days_13;
    }

    /**
     * @return bool
     */
    public function isDays_14()
    {
        return $this->_value === self::CodeType_Days_14;
    }

    /**
     * @return bool
     */
    public function isDays_15()
    {
        return $this->_value === self::CodeType_Days_15;
    }

    /**
     * @return bool
     */
    public function isDays_16()
    {
        return $this->_value === self::CodeType_Days_16;
    }

    /**
     * @return bool
     */
    public function isDays_17()
    {
        return $this->_value === self::CodeType_Days_17;
    }

    /**
     * @return bool
     */
    public function isDays_18()
    {
        return $this->_value === self::CodeType_Days_18;
    }

    /**
     * @return bool
     */
    public function isDays_19()
    {
        return $this->_value === self::CodeType_Days_19;
    }

    /**
     * @return bool
     */
    public function isDays_20()
    {
        return $this->_value === self::CodeType_Days_20;
    }

    /**
     * @return bool
     */
    public function isDays_21()
    {
        return $this->_value === self::CodeType_Days_21;
    }

    /**
     * @return bool
     */
    public function isDays_22()
    {
        return $this->_value === self::CodeType_Days_22;
    }

    /**
     * @return bool
     */
    public function isDays_23()
    {
        return $this->_value === self::CodeType_Days_23;
    }

    /**
     * @return bool
     */
    public function isDays_24()
    {
        return $this->_value === self::CodeType_Days_24;
    }

    /**
     * @return bool
     */
    public function isDays_25()
    {
        return $this->_value === self::CodeType_Days_25;
    }

    /**
     * @return bool
     */
    public function isDays_26()
    {
        return $this->_value === self::CodeType_Days_26;
    }

    /**
     * @return bool
     */
    public function isDays_27()
    {
        return $this->_value === self::CodeType_Days_27;
    }

    /**
     * @return bool
     */
    public function isDays_28()
    {
        return $this->_value === self::CodeType_Days_28;
    }

    /**
     * @return bool
     */
    public function isDays_29()
    {
        return $this->_value === self::CodeType_Days_29;
    }

    /**
     * @return bool
     */
    public function isDays_30()
    {
        return $this->_value === self::CodeType_Days_30;
    }

    /**
     * @return bool
     */
    public function isDays_31()
    {
        return $this->_value === self::CodeType_Days_31;
    }

    /**
     * @return bool
     */
    public function isDays_32()
    {
        return $this->_value === self::CodeType_Days_32;
    }

    /**
     * @return bool
     */
    public function isDays_33()
    {
        return $this->_value === self::CodeType_Days_33;
    }

    /**
     * @return bool
     */
    public function isDays_34()
    {
        return $this->_value === self::CodeType_Days_34;
    }

    /**
     * @return bool
     */
    public function isDays_35()
    {
        return $this->_value === self::CodeType_Days_35;
    }

    /**
     * @return bool
     */
    public function isDays_36()
    {
        return $this->_value === self::CodeType_Days_36;
    }

    /**
     * @return bool
     */
    public function isDays_37()
    {
        return $this->_value === self::CodeType_Days_37;
    }

    /**
     * @return bool
     */
    public function isDays_38()
    {
        return $this->_value === self::CodeType_Days_38;
    }

    /**
     * @return bool
     */
    public function isDays_39()
    {
        return $this->_value === self::CodeType_Days_39;
    }

    /**
     * @return bool
     */
    public function isDays_40()
    {
        return $this->_value === self::CodeType_Days_40;
    }

    /**
     * @return bool
     */
    public function isDays_41()
    {
        return $this->_value === self::CodeType_Days_41;
    }

    /**
     * @return bool
     */
    public function isDays_42()
    {
        return $this->_value === self::CodeType_Days_42;
    }

    /**
     * @return bool
     */
    public function isDays_43()
    {
        return $this->_value === self::CodeType_Days_43;
    }

    /**
     * @return bool
     */
    public function isDays_44()
    {
        return $this->_value === self::CodeType_Days_44;
    }

    /**
     * @return bool
     */
    public function isDays_45()
    {
        return $this->_value === self::CodeType_Days_45;
    }

    /**
     * @return bool
     */
    public function isDays_46()
    {
        return $this->_value === self::CodeType_Days_46;
    }

    /**
     * @return bool
     */
    public function isDays_47()
    {
        return $this->_value === self::CodeType_Days_47;
    }

    /**
     * @return bool
     */
    public function isDays_48()
    {
        return $this->_value === self::CodeType_Days_48;
    }

    /**
     * @return bool
     */
    public function isDays_49()
    {
        return $this->_value === self::CodeType_Days_49;
    }

    /**
     * @return bool
     */
    public function isDays_50()
    {
        return $this->_value === self::CodeType_Days_50;
    }

    /**
     * @return bool
     */
    public function isLifetime()
    {
        return $this->_value === self::CodeType_Lifetime;
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

ListingEnhancementDurationCodeType::_register();
