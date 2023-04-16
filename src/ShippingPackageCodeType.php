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
 * The nature of the package used to ship the item(s).
 * Required for calculated shipping only. Not all package types
 * are supported by a specific shipping service (ShippingServiceCodeType).
 **/
class ShippingPackageCodeType extends EbatNs_EnumType
{
    const TAG = 'ShippingPackageCodeType';
    const NAME = 'ShippingPackageCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * None
     **/
    const CodeType_None = 'None';

    /**
     * Letter
     **/
    const CodeType_Letter = 'Letter';

    /**
     * LargeEnvelope
     **/
    const CodeType_LargeEnvelope = 'LargeEnvelope';

    /**
     * USPS Large Package/Oversize 1
     **/
    const CodeType_USPSLargePack = 'USPSLargePack';

    /**
     * Very Large Package/Oversize 2
     **/
    const CodeType_VeryLargePack = 'VeryLargePack';

    /**
     * Extra Large Package/Oversize 3
     **/
    const CodeType_ExtraLargePack = 'ExtraLargePack';

    /**
     * UPS Letter
     **/
    const CodeType_UPSLetter = 'UPSLetter';

    /**
     * USPS Flat Rate Envelope
     **/
    const CodeType_USPSFlatRateEnvelope = 'USPSFlatRateEnvelope';

    /**
     * Package/thick envelope
     **/
    const CodeType_PackageThickEnvelope = 'PackageThickEnvelope';

    /**
     * Roll
     **/
    const CodeType_Roll = 'Roll';

    /**
     * Europallet
     **/
    const CodeType_Europallet = 'Europallet';

    /**
     * Onewaypallet
     **/
    const CodeType_OneWayPallet = 'OneWayPallet';

    /**
     * Bulky goods
     **/
    const CodeType_BulkyGoods = 'BulkyGoods';

    /**
     * Furniture
     **/
    const CodeType_Furniture = 'Furniture';

    /**
     * Cars
     **/
    const CodeType_Cars = 'Cars';

    /**
     * Motorbikes
     **/
    const CodeType_Motorbikes = 'Motorbikes';

    /**
     * Caravan
     **/
    const CodeType_Caravan = 'Caravan';

    /**
     * Industry vehicles
     **/
    const CodeType_IndustryVehicles = 'IndustryVehicles';

    /**
     * Parcel or padded Envelope
     **/
    const CodeType_ParcelOrPaddedEnvelope = 'ParcelOrPaddedEnvelope';

    /**
     * Small Canada Post Box
     **/
    const CodeType_SmallCanadaPostBox = 'SmallCanadaPostBox';

    /**
     * Medium Canada Post Box
     **/
    const CodeType_MediumCanadaPostBox = 'MediumCanadaPostBox';

    /**
     * Large Canada Post Box
     **/
    const CodeType_LargeCanadaPostBox = 'LargeCanadaPostBox';

    /**
     * Small Canada Post Bubble Mailer
     **/
    const CodeType_SmallCanadaPostBubbleMailer = 'SmallCanadaPostBubbleMailer';

    /**
     * Medium Canada Post Bubble Mailer
     **/
    const CodeType_MediumCanadaPostBubbleMailer = 'MediumCanadaPostBubbleMailer';

    /**
     * Large Canada Post Bubble Mailer
     **/
    const CodeType_LargeCanadaPostBubbleMailer = 'LargeCanadaPostBubbleMailer';

    /**
     * Padded Bags
     **/
    const CodeType_PaddedBags = 'PaddedBags';

    /**
     * Tough Bags
     **/
    const CodeType_ToughBags = 'ToughBags';

    /**
     * Expandable Tough Bags
     **/
    const CodeType_ExpandableToughBags = 'ExpandableToughBags';

    /**
     * Mailing Boxes
     **/
    const CodeType_MailingBoxes = 'MailingBoxes';

    /**
     * Winepak
     **/
    const CodeType_Winepak = 'Winepak';

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
     * @return ShippingPackageCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ShippingPackageCodeType|null $value
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
    public function isNone()
    {
        return $this->_value === self::CodeType_None;
    }

    /**
     * @return bool
     */
    public function isLetter()
    {
        return $this->_value === self::CodeType_Letter;
    }

    /**
     * @return bool
     */
    public function isLargeEnvelope()
    {
        return $this->_value === self::CodeType_LargeEnvelope;
    }

    /**
     * @return bool
     */
    public function isUSPSLargePack()
    {
        return $this->_value === self::CodeType_USPSLargePack;
    }

    /**
     * @return bool
     */
    public function isVeryLargePack()
    {
        return $this->_value === self::CodeType_VeryLargePack;
    }

    /**
     * @return bool
     */
    public function isExtraLargePack()
    {
        return $this->_value === self::CodeType_ExtraLargePack;
    }

    /**
     * @return bool
     */
    public function isUPSLetter()
    {
        return $this->_value === self::CodeType_UPSLetter;
    }

    /**
     * @return bool
     */
    public function isUSPSFlatRateEnvelope()
    {
        return $this->_value === self::CodeType_USPSFlatRateEnvelope;
    }

    /**
     * @return bool
     */
    public function isPackageThickEnvelope()
    {
        return $this->_value === self::CodeType_PackageThickEnvelope;
    }

    /**
     * @return bool
     */
    public function isRoll()
    {
        return $this->_value === self::CodeType_Roll;
    }

    /**
     * @return bool
     */
    public function isEuropallet()
    {
        return $this->_value === self::CodeType_Europallet;
    }

    /**
     * @return bool
     */
    public function isOneWayPallet()
    {
        return $this->_value === self::CodeType_OneWayPallet;
    }

    /**
     * @return bool
     */
    public function isBulkyGoods()
    {
        return $this->_value === self::CodeType_BulkyGoods;
    }

    /**
     * @return bool
     */
    public function isFurniture()
    {
        return $this->_value === self::CodeType_Furniture;
    }

    /**
     * @return bool
     */
    public function isCars()
    {
        return $this->_value === self::CodeType_Cars;
    }

    /**
     * @return bool
     */
    public function isMotorbikes()
    {
        return $this->_value === self::CodeType_Motorbikes;
    }

    /**
     * @return bool
     */
    public function isCaravan()
    {
        return $this->_value === self::CodeType_Caravan;
    }

    /**
     * @return bool
     */
    public function isIndustryVehicles()
    {
        return $this->_value === self::CodeType_IndustryVehicles;
    }

    /**
     * @return bool
     */
    public function isParcelOrPaddedEnvelope()
    {
        return $this->_value === self::CodeType_ParcelOrPaddedEnvelope;
    }

    /**
     * @return bool
     */
    public function isSmallCanadaPostBox()
    {
        return $this->_value === self::CodeType_SmallCanadaPostBox;
    }

    /**
     * @return bool
     */
    public function isMediumCanadaPostBox()
    {
        return $this->_value === self::CodeType_MediumCanadaPostBox;
    }

    /**
     * @return bool
     */
    public function isLargeCanadaPostBox()
    {
        return $this->_value === self::CodeType_LargeCanadaPostBox;
    }

    /**
     * @return bool
     */
    public function isSmallCanadaPostBubbleMailer()
    {
        return $this->_value === self::CodeType_SmallCanadaPostBubbleMailer;
    }

    /**
     * @return bool
     */
    public function isMediumCanadaPostBubbleMailer()
    {
        return $this->_value === self::CodeType_MediumCanadaPostBubbleMailer;
    }

    /**
     * @return bool
     */
    public function isLargeCanadaPostBubbleMailer()
    {
        return $this->_value === self::CodeType_LargeCanadaPostBubbleMailer;
    }

    /**
     * @return bool
     */
    public function isPaddedBags()
    {
        return $this->_value === self::CodeType_PaddedBags;
    }

    /**
     * @return bool
     */
    public function isToughBags()
    {
        return $this->_value === self::CodeType_ToughBags;
    }

    /**
     * @return bool
     */
    public function isExpandableToughBags()
    {
        return $this->_value === self::CodeType_ExpandableToughBags;
    }

    /**
     * @return bool
     */
    public function isMailingBoxes()
    {
        return $this->_value === self::CodeType_MailingBoxes;
    }

    /**
     * @return bool
     */
    public function isWinepak()
    {
        return $this->_value === self::CodeType_Winepak;
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

ShippingPackageCodeType::_register();
