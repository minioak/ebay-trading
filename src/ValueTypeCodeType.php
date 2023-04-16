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
 * This enumeration type is used by the order management calls (like
 * GetOrders
 * ), and indicates the type of tax ID used in the <strong>BuyerTaxIdentifier</strong> container..
 **/
class ValueTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'ValueTypeCodeType';
    const NAME = 'ValueTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is deprecated.
     **/
    const CodeType_Decimal = 'Decimal';

    /**
     * This value is deprecated.
     **/
    const CodeType_Numeric = 'Numeric';

    /**
     * This value is deprecated.
     **/
    const CodeType_Text = 'Text';

    /**
     * This value is deprecated.
     **/
    const CodeType_ISBN = 'ISBN';

    /**
     * This value is deprecated.
     **/
    const CodeType_UPC = 'UPC';

    /**
     * This value is deprecated.
     **/
    const CodeType_EAN = 'EAN';

    /**
     * This value is deprecated.
     **/
    const CodeType_Date = 'Date';

    /**
     * This value indicates that the tax ID in the
     * ID
     * field is a Codice Fiscale ID, which is an identifier used by the Italian government to identify taxpayers in
     * Italy.
     **/
    const CodeType_CodiceFiscale = 'CodiceFiscale';

    /**
     * This value indicates that the tax ID in the
     * ID
     * field is a Spanish National Identity Number, which is one identifier used by the Spanish government to identify
     * taxpayers in Spain. In Spanish, this ID is known as the 'Documento nacional de identidad'. The other tax
     * identifier for Spanish residents is the NIE number, or 'Numero de Identidad de Extranjero'.
     **/
    const CodeType_DNI = 'DNI';

    /**
     * This value indicates that the tax ID in the
     * ID
     * field is a Russian Passport number.
     **/
    const CodeType_RussianPassport = 'RussianPassport';

    /**
     * This value indicates that the tax ID in the
     * ID
     * field is a Tax Registration Number, which is an identifier used by the Brazilian government to identify
     * taxpayers in Brazil. In Portuguese, this ID is known as the 'Cadastro de Pessoas Fisicas', or 'CPF'.
     **/
    const CodeType_CPFTaxID = 'CPFTaxID';

    /**
     * This value indicates that the tax ID in the
     * ID
     * field is a Turkish Identification Number, which is an identifier used by the Turkish government to identify
     * taxpayers in Turkey. In Turkish, this ID is known as the 'Turkiye Cumhuriyeti Kimlik Numarasi', often abbreviated
     * as T.C. Kimlik No.
     **/
    const CodeType_TurkeyID = 'TurkeyID';

    /**
     * This value indicates that the tax ID in the
     * ID
     * field is a NIE Number, which is one identifier used by the Spanish government to identify taxpayers in Spain.
     * 'NIE' stands for 'Numero de Identidad de Extranjero'. The other tax identifier for Spanish residents is the DNI
     * number, or 'Documento nacional de identidad'. Spanish residents can also be identified by their Spanish VAT
     * (Value-Added Tax) number, which is also called the 'Numero de Identificacion Fiscal' or NIF.
     **/
    const CodeType_NIE = 'NIE';

    /**
     * This value indicates that the ID in the
     * ID
     * field is an NIF Number, which is also known as their Spanish VAT (Value-Added Tax) number. 'NIF' stands for
     * 'Numero de Identificacion Fiscal'. Spanish residents can also be identified by their DNI ('Documento nacional de
     * identidad') number or their NIE ('Numero de Identidad de Extranjero') number.
     **/
    const CodeType_NIF = 'NIF';

    /**
     * This value indicates that the tax ID in the
     * ID
     * field is a Cedula number, which is an identifier used by the Chilean, Columbian, and Dominican Republic
     * governments to identify taxpayers in those countries. This ID is sometimes referred to as a 'Cedula de
     * Identidad'.
     **/
    const CodeType_CEDULA = 'CEDULA';

    /**
     * This value indicates that the tax ID in the
     * ID
     * field is a NIT number, which is an identifier used by the Guatemalan government to identify taxpayers in
     * Guatemala. In Spanish, this ID is known as the 'Numero de identificacion tributaria'.
     **/
    const CodeType_NIT = 'NIT';

    /**
     * This value indicates that the identifier in the
     * ID
     * field is a driver's license number.
     **/
    const CodeType_DriverLicense = 'DriverLicense';

    /**
     * This value indicates that the tax ID in the
     * ID
     * field is a CNPJ number, which is an identifier used by the Brazilian government to identify taxpayers in Brazil.
     * In Portuguese, this ID is known as the 'Cadastro Nacional da Pessoa Juridica'.
     **/
    const CodeType_CNPJ = 'CNPJ';

    /**
     * This value indicates that the tax ID in the
     * ID
     * field is a VAT Identification Number for the buyer.
     **/
    const CodeType_VATIN = 'VATIN';

    /**
     * Reserved for future use.
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
     * @return ValueTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ValueTypeCodeType|null $value
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
    public function isDecimal()
    {
        return $this->_value === self::CodeType_Decimal;
    }

    /**
     * @return bool
     */
    public function isNumeric()
    {
        return $this->_value === self::CodeType_Numeric;
    }

    /**
     * @return bool
     */
    public function isText()
    {
        return $this->_value === self::CodeType_Text;
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
    public function isEAN()
    {
        return $this->_value === self::CodeType_EAN;
    }

    /**
     * @return bool
     */
    public function isDate()
    {
        return $this->_value === self::CodeType_Date;
    }

    /**
     * @return bool
     */
    public function isCodiceFiscale()
    {
        return $this->_value === self::CodeType_CodiceFiscale;
    }

    /**
     * @return bool
     */
    public function isDNI()
    {
        return $this->_value === self::CodeType_DNI;
    }

    /**
     * @return bool
     */
    public function isRussianPassport()
    {
        return $this->_value === self::CodeType_RussianPassport;
    }

    /**
     * @return bool
     */
    public function isCPFTaxID()
    {
        return $this->_value === self::CodeType_CPFTaxID;
    }

    /**
     * @return bool
     */
    public function isTurkeyID()
    {
        return $this->_value === self::CodeType_TurkeyID;
    }

    /**
     * @return bool
     */
    public function isNIE()
    {
        return $this->_value === self::CodeType_NIE;
    }

    /**
     * @return bool
     */
    public function isNIF()
    {
        return $this->_value === self::CodeType_NIF;
    }

    /**
     * @return bool
     */
    public function isCEDULA()
    {
        return $this->_value === self::CodeType_CEDULA;
    }

    /**
     * @return bool
     */
    public function isNIT()
    {
        return $this->_value === self::CodeType_NIT;
    }

    /**
     * @return bool
     */
    public function isDriverLicense()
    {
        return $this->_value === self::CodeType_DriverLicense;
    }

    /**
     * @return bool
     */
    public function isCNPJ()
    {
        return $this->_value === self::CodeType_CNPJ;
    }

    /**
     * @return bool
     */
    public function isVATIN()
    {
        return $this->_value === self::CodeType_VATIN;
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

ValueTypeCodeType::_register();
