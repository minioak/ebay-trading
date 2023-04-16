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


class MessageTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'MessageTypeCodeType';
    const NAME = 'MessageTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Member to Member message initiated by bidder/potential bidder
     * to a seller of a particular item.
     **/
    const CodeType_AskSellerQuestion = 'AskSellerQuestion';

    /**
     * Member to Member message initiated as a response
     * to an Ask A Question message.
     **/
    const CodeType_ResponseToASQQuestion = 'ResponseToASQQuestion';

    /**
     * Member to Member message initiated by any eBay member
     * to another eBay member.
     **/
    const CodeType_ContactEbayMember = 'ContactEbayMember';

    /**
     * Member message between order partners within 90 days
     * after creation of the order.
     **/
    const CodeType_ContactTransactionPartner = 'ContactTransactionPartner';

    /**
     * Member to Member message initiated as a response
     * to a Contact eBay Member message.
     **/
    const CodeType_ResponseToContacteBayMember = 'ResponseToContacteBayMember';

    /**
     * Member to Member message initiated by any eBay member
     * to another eBay member who has posted on a community forum
     * within the past 7 days.
     **/
    const CodeType_ContacteBayMemberViaCommunityLink = 'ContacteBayMemberViaCommunityLink';

    /**
     * Reserved for future or internal use.
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * All message types.
     **/
    const CodeType_All = 'All';

    /**
     * Member to Member message initiated by sellers to their
     * bidders during an active listing.
     **/
    const CodeType_ContactMyBidder = 'ContactMyBidder';

    /**
     * Member message initiated after eBay receives an email sent by an
     * eBay member's email client to another eBay member.
     **/
    const CodeType_ContacteBayMemberViaAnonymousEmail = 'ContacteBayMemberViaAnonymousEmail';

    /**
     * Indicates that an inquiry has been sent to the seller regarding the
     * corresponding classified ad listing.
     **/
    const CodeType_ClassifiedsContactSeller = 'ClassifiedsContactSeller';

    /**
     * Indicates that a Best Offer has been made on the seller's corresponding
     * classified ad listing. This message type is only applicable to Classified
     * categories that allow the Best Offer feature, such as motor vehicles.
     **/
    const CodeType_ClassifiedsBestOffer = 'ClassifiedsBestOffer';
    
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
     * @return MessageTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param MessageTypeCodeType|null $value
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
    public function isAskSellerQuestion()
    {
        return $this->_value === self::CodeType_AskSellerQuestion;
    }

    /**
     * @return bool
     */
    public function isResponseToASQQuestion()
    {
        return $this->_value === self::CodeType_ResponseToASQQuestion;
    }

    /**
     * @return bool
     */
    public function isContactEbayMember()
    {
        return $this->_value === self::CodeType_ContactEbayMember;
    }

    /**
     * @return bool
     */
    public function isContactTransactionPartner()
    {
        return $this->_value === self::CodeType_ContactTransactionPartner;
    }

    /**
     * @return bool
     */
    public function isResponseToContacteBayMember()
    {
        return $this->_value === self::CodeType_ResponseToContacteBayMember;
    }

    /**
     * @return bool
     */
    public function isContacteBayMemberViaCommunityLink()
    {
        return $this->_value === self::CodeType_ContacteBayMemberViaCommunityLink;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }

    /**
     * @return bool
     */
    public function isAll()
    {
        return $this->_value === self::CodeType_All;
    }

    /**
     * @return bool
     */
    public function isContactMyBidder()
    {
        return $this->_value === self::CodeType_ContactMyBidder;
    }

    /**
     * @return bool
     */
    public function isContacteBayMemberViaAnonymousEmail()
    {
        return $this->_value === self::CodeType_ContacteBayMemberViaAnonymousEmail;
    }

    /**
     * @return bool
     */
    public function isClassifiedsContactSeller()
    {
        return $this->_value === self::CodeType_ClassifiedsContactSeller;
    }

    /**
     * @return bool
     */
    public function isClassifiedsBestOffer()
    {
        return $this->_value === self::CodeType_ClassifiedsBestOffer;
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

MessageTypeCodeType::_register();
