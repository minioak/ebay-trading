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
 * A seller can make a Transaction Confirmation Request (TCR) for an item. This code
 * list contains values to specify the current relationship between the seller and
 * the potential buyer. For a seller to make a Transaction Confirmation Request (TCR)
 * for an item, the potential buyer must meet one of the criteria in this code list.
 **/
class RecipientRelationCodeType extends EbatNs_EnumType
{
    const TAG = 'RecipientRelationCodeType';
    const NAME = 'RecipientRelationCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Indicates that the recipient has one or more bids on the item; the relationship is "bidder."
     **/
    const CodeType_1 = '1';

    /**
     * Indicates that the recipient has one or more Best Offers on the item; the
     * relationship is "Best Offer buyer."
     **/
    const CodeType_2 = '2';

    /**
     * Indicates that the recipient has asked the seller a question about the item;
     * the relationship is "a member with an ASQ question."
     **/
    const CodeType_3 = '3';

    /**
     * Indicates that the recipient has a postal code; the relationship is "a member
     * with a postal code."
     **/
    const CodeType_4 = '4';

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
     * @return RecipientRelationCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param RecipientRelationCodeType|null $value
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
    public function is1()
    {
        return $this->_value === self::CodeType_1;
    }

    /**
     * @return bool
     */
    public function is2()
    {
        return $this->_value === self::CodeType_2;
    }

    /**
     * @return bool
     */
    public function is3()
    {
        return $this->_value === self::CodeType_3;
    }

    /**
     * @return bool
     */
    public function is4()
    {
        return $this->_value === self::CodeType_4;
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

RecipientRelationCodeType::_register();
