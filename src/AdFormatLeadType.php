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
 * This type is used by the
 * AdFormatLead
 * container that is returned in the
 * GetAdFormatLeads
 * call response. An
 * AdFormatLead
 * container will be returned for each user that has expressed interest in the Classified Ad listing that was
 * specified by the seller in the
 * GetAdFormatLeads
 * call request. Each
 * AdFormatLead
 * container consists of prospective buyer contact information and other details associated with a lead for a
 * Classified Ad listing.
 **/
class AdFormatLeadType extends EbatNs_ComplexType
{
    const TAG = 'AdFormatLeadType';
    const NAME = 'AdFormatLeadType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $AdditionalInformation = null;

    /**
     * @var AddressType|null
     */
    protected $Address = null;

    /**
     * @var string|null
     */
    protected $BestTimeToCall = null;

    /**
     * @var string|null
     */
    protected $Email = null;

    /**
     * @var string|null
     */
    protected $SubmittedTime = null;

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var string|null
     */
    protected $ItemTitle = null;

    /**
     * @var UserIDType|null
     */
    protected $UserID = null;

    /**
     * @var MemberMessageExchangeArrayType|null
     */
    protected $MemberMessage = null;

    /**
     * @var AdFormatLeadStatusCodeType|null
     */
    protected $Status = null;

    /**
     * @var AmountType|null
     */
    protected $LeadFee = null;

    /**
     * @var string|null
     */
    protected $ExternalEmail = null;

    /**
     * @var string|null
     */
    protected $PurchaseTimeFrame = null;

    /**
     * @var string|null
     */
    protected $TradeInYear = null;

    /**
     * @var string|null
     */
    protected $TradeInMake = null;

    /**
     * @var string|null
     */
    protected $TradeInModel = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $FinancingAnswer = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Answer1 = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Answer2 = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAdditionalInformation()
    {
        return $this->_dc($this->AdditionalInformation, 'AdditionalInformation');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAdditionalInformation($value)
    {
        $this->AdditionalInformation = self::_string($value);
    }

    /**
     * @return AddressType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAddress()
    {
        return $this->_dc($this->Address, 'Address');
    }

    /**
     * @param AddressType|null $value
     * @return void
     */
    public function setAddress($value)
    {
        $this->Address = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBestTimeToCall()
    {
        return $this->_dc($this->BestTimeToCall, 'BestTimeToCall');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBestTimeToCall($value)
    {
        $this->BestTimeToCall = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEmail()
    {
        return $this->_dc($this->Email, 'Email');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEmail($value)
    {
        $this->Email = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSubmittedTime()
    {
        return $this->_dc($this->SubmittedTime, 'SubmittedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSubmittedTime($value)
    {
        $this->SubmittedTime = self::_string($value);
    }

    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemTitle()
    {
        return $this->_dc($this->ItemTitle, 'ItemTitle');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setItemTitle($value)
    {
        $this->ItemTitle = self::_string($value);
    }

    /**
     * @return UserIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUserID()
    {
        return $this->_dc($this->UserID, 'UserID');
    }

    /**
     * @param UserIDType|null $value
     * @return void
     */
    public function setUserID($value)
    {
        $this->UserID = $value;
    }

    /**
     * @return MemberMessageExchangeArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMemberMessage()
    {
        return $this->_dc($this->MemberMessage, 'MemberMessage');
    }

    /**
     * @param MemberMessageExchangeArrayType|null $value
     * @return void
     */
    public function setMemberMessage($value)
    {
        $this->MemberMessage = $value;
    }

    /**
     * @return AdFormatLeadStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param AdFormatLeadStatusCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, AdFormatLeadStatusCodeType::class);
    }

    /**
     * @return AmountType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLeadFee()
    {
        return $this->_dc($this->LeadFee, 'LeadFee');
    }

    /**
     * @param AmountType|null $value
     * @return void
     */
    public function setLeadFee($value)
    {
        $this->LeadFee = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExternalEmail()
    {
        return $this->_dc($this->ExternalEmail, 'ExternalEmail');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExternalEmail($value)
    {
        $this->ExternalEmail = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPurchaseTimeFrame()
    {
        return $this->_dc($this->PurchaseTimeFrame, 'PurchaseTimeFrame');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPurchaseTimeFrame($value)
    {
        $this->PurchaseTimeFrame = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTradeInYear()
    {
        return $this->_dc($this->TradeInYear, 'TradeInYear');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTradeInYear($value)
    {
        $this->TradeInYear = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTradeInMake()
    {
        return $this->_dc($this->TradeInMake, 'TradeInMake');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTradeInMake($value)
    {
        $this->TradeInMake = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTradeInModel()
    {
        return $this->_dc($this->TradeInModel, 'TradeInModel');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTradeInModel($value)
    {
        $this->TradeInModel = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFinancingAnswer()
    {
        return $this->_dc($this->FinancingAnswer === 'true', 'FinancingAnswer');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setFinancingAnswer($value)
    {
        $this->FinancingAnswer = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAnswer1()
    {
        return $this->_dc($this->Answer1 === 'true', 'Answer1');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAnswer1($value)
    {
        $this->Answer1 = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAnswer2()
    {
        return $this->_dc($this->Answer2 === 'true', 'Answer2');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setAnswer2($value)
    {
        $this->Answer2 = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AdditionalInformation' => [],
            'Address' => ['type' => 'AddressType', 'xmlns' => self::XMLNS],
            'BestTimeToCall' => [],
            'Email' => [],
            'SubmittedTime' => [],
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'ItemTitle' => [],
            'UserID' => ['type' => 'UserIDType', 'xmlns' => self::XMLNS],
            'MemberMessage' => ['type' => 'MemberMessageExchangeArrayType', 'xmlns' => self::XMLNS],
            'Status' => ['type' => 'AdFormatLeadStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'LeadFee' => ['type' => 'AmountType', 'xmlns' => self::XMLNS],
            'ExternalEmail' => [],
            'PurchaseTimeFrame' => [],
            'TradeInYear' => [],
            'TradeInMake' => [],
            'TradeInModel' => [],
            'FinancingAnswer' => ['type' => 'bool'],
            'Answer1' => ['type' => 'bool'],
            'Answer2' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AdFormatLeadType::_register();
