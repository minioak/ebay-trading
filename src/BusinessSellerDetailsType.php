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
 * Type used by the
 * BusinessSellerDetails
 * container, which is returned in an
 * Item
 * node if the item's seller is registered on eBay as a Business Seller.
 **/
class BusinessSellerDetailsType extends EbatNs_ComplexType
{
    const TAG = 'BusinessSellerDetailsType';
    const NAME = 'BusinessSellerDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AddressType|null
     */
    protected $Address = null;

    /**
     * @var string|null
     */
    protected $Fax = null;

    /**
     * @var string|null
     */
    protected $Email = null;

    /**
     * @var string|null
     */
    protected $AdditionalContactInformation = null;

    /**
     * @var string|null
     */
    protected $TradeRegistrationNumber = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LegalInvoice = null;

    /**
     * @var string|null
     */
    protected $TermsAndConditions = null;

    /**
     * @var VATDetailsType|null
     */
    protected $VATDetails = null;


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
    public function getFax()
    {
        return $this->_dc($this->Fax, 'Fax');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFax($value)
    {
        $this->Fax = self::_string($value);
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
    public function getAdditionalContactInformation()
    {
        return $this->_dc($this->AdditionalContactInformation, 'AdditionalContactInformation');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setAdditionalContactInformation($value)
    {
        $this->AdditionalContactInformation = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTradeRegistrationNumber()
    {
        return $this->_dc($this->TradeRegistrationNumber, 'TradeRegistrationNumber');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTradeRegistrationNumber($value)
    {
        $this->TradeRegistrationNumber = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLegalInvoice()
    {
        return $this->_dc($this->LegalInvoice === 'true', 'LegalInvoice');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLegalInvoice($value)
    {
        $this->LegalInvoice = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTermsAndConditions()
    {
        return $this->_dc($this->TermsAndConditions, 'TermsAndConditions');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTermsAndConditions($value)
    {
        $this->TermsAndConditions = self::_string($value);
    }

    /**
     * @return VATDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVATDetails()
    {
        return $this->_dc($this->VATDetails, 'VATDetails');
    }

    /**
     * @param VATDetailsType|null $value
     * @return void
     */
    public function setVATDetails($value)
    {
        $this->VATDetails = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Address' => ['type' => 'AddressType', 'xmlns' => self::XMLNS],
            'Fax' => [],
            'Email' => [],
            'AdditionalContactInformation' => [],
            'TradeRegistrationNumber' => [],
            'LegalInvoice' => ['type' => 'bool'],
            'TermsAndConditions' => [],
            'VATDetails' => ['type' => 'VATDetailsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BusinessSellerDetailsType::_register();
