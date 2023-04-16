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
 * This enumerated type contains a partial list of ISO 3166 standard two-letter codes that represent countries
 * around the world.
 * 
 * It is recommended that users use the
 * GeteBayDetails
 * call to see the full list of currently supported country codes,
 * and the English names associated with each code (e.g., KY="Cayman Islands"). Call
 * 
 * GeteBayDetails
 * with
 * DetailName
 * set to
 * Country
 * , and then look for
 * CountryDetails.Country
 * fields in the response.
 **/
class CountryCodeType extends EbatNs_EnumType
{
    const TAG = 'CountryCodeType';
    const NAME = 'CountryCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * Afghanistan.
     **/
    const CodeType_AF = 'AF';

    /**
     * Albania.
     **/
    const CodeType_AL = 'AL';

    /**
     * Algeria.
     **/
    const CodeType_DZ = 'DZ';

    /**
     * American Samoa.
     **/
    const CodeType_AS = 'AS';

    /**
     * Andorra.
     **/
    const CodeType_AD = 'AD';

    /**
     * Angola.
     **/
    const CodeType_AO = 'AO';

    /**
     * Anguilla.
     **/
    const CodeType_AI = 'AI';

    /**
     * Antarctica.
     **/
    const CodeType_AQ = 'AQ';

    /**
     * Antigua and Barbuda.
     **/
    const CodeType_AG = 'AG';

    /**
     * Argentina.
     **/
    const CodeType_AR = 'AR';

    /**
     * Armenia.
     **/
    const CodeType_AM = 'AM';

    /**
     * Aruba.
     **/
    const CodeType_AW = 'AW';

    /**
     * Australia.
     **/
    const CodeType_AU = 'AU';

    /**
     * Austria.
     **/
    const CodeType_AT = 'AT';

    /**
     * Azerbaijan.
     **/
    const CodeType_AZ = 'AZ';

    /**
     * Bahamas.
     **/
    const CodeType_BS = 'BS';

    /**
     * Bahrain.
     **/
    const CodeType_BH = 'BH';

    /**
     * Bangladesh.
     **/
    const CodeType_BD = 'BD';

    /**
     * Barbados.
     **/
    const CodeType_BB = 'BB';

    /**
     * Belarus.
     **/
    const CodeType_BY = 'BY';

    /**
     * Belgium.
     **/
    const CodeType_BE = 'BE';

    /**
     * Belize.
     **/
    const CodeType_BZ = 'BZ';

    /**
     * Benin.
     **/
    const CodeType_BJ = 'BJ';

    /**
     * Bermuda.
     **/
    const CodeType_BM = 'BM';

    /**
     * Bhutan.
     **/
    const CodeType_BT = 'BT';

    /**
     * Bolivia.
     **/
    const CodeType_BO = 'BO';

    /**
     * Bosnia and Herzegovina.
     **/
    const CodeType_BA = 'BA';

    /**
     * Botswana.
     **/
    const CodeType_BW = 'BW';

    /**
     * Bouvet Island.
     **/
    const CodeType_BV = 'BV';

    /**
     * Brazil.
     **/
    const CodeType_BR = 'BR';

    /**
     * British Indian Ocean Territory.
     **/
    const CodeType_IO = 'IO';

    /**
     * Brunei Darussalam.
     **/
    const CodeType_BN = 'BN';

    /**
     * Bulgaria.
     **/
    const CodeType_BG = 'BG';

    /**
     * Burkina Faso.
     **/
    const CodeType_BF = 'BF';

    /**
     * Burundi.
     **/
    const CodeType_BI = 'BI';

    /**
     * Cambodia.
     **/
    const CodeType_KH = 'KH';

    /**
     * Cameroon.
     **/
    const CodeType_CM = 'CM';

    /**
     * Canada.
     **/
    const CodeType_CA = 'CA';

    /**
     * Cape Verde.
     **/
    const CodeType_CV = 'CV';

    /**
     * Cayman Islands.
     **/
    const CodeType_KY = 'KY';

    /**
     * Central African Republic.
     **/
    const CodeType_CF = 'CF';

    /**
     * Chad.
     **/
    const CodeType_TD = 'TD';

    /**
     * Chile.
     **/
    const CodeType_CL = 'CL';

    /**
     * China.
     **/
    const CodeType_CN = 'CN';

    /**
     * Christmas Island.
     **/
    const CodeType_CX = 'CX';

    /**
     * Cocos (Keeling) Islands.
     **/
    const CodeType_CC = 'CC';

    /**
     * Colombia.
     **/
    const CodeType_CO = 'CO';

    /**
     * Comoros.
     **/
    const CodeType_KM = 'KM';

    /**
     * Congo.
     **/
    const CodeType_CG = 'CG';

    /**
     * Congo, The Democratic Republic of the.
     **/
    const CodeType_CD = 'CD';

    /**
     * Cook Islands.
     **/
    const CodeType_CK = 'CK';

    /**
     * Costa Rica.
     **/
    const CodeType_CR = 'CR';

    /**
     * Cote d'Ivoire.
     **/
    const CodeType_CI = 'CI';

    /**
     * Croatia.
     **/
    const CodeType_HR = 'HR';

    /**
     * Cuba.
     **/
    const CodeType_CU = 'CU';

    /**
     * Cyprus.
     **/
    const CodeType_CY = 'CY';

    /**
     * Czech Republic.
     **/
    const CodeType_CZ = 'CZ';

    /**
     * Denmark.
     **/
    const CodeType_DK = 'DK';

    /**
     * Djibouti.
     **/
    const CodeType_DJ = 'DJ';

    /**
     * Dominica.
     **/
    const CodeType_DM = 'DM';

    /**
     * Dominican Republic.
     **/
    const CodeType_DO = 'DO';

    /**
     * No longer in use.
     **/
    const CodeType_TP = 'TP';

    /**
     * Ecuador.
     **/
    const CodeType_EC = 'EC';

    /**
     * Egypt.
     **/
    const CodeType_EG = 'EG';

    /**
     * El Salvador.
     **/
    const CodeType_SV = 'SV';

    /**
     * Equatorial Guinea.
     **/
    const CodeType_GQ = 'GQ';

    /**
     * Eritrea.
     **/
    const CodeType_ER = 'ER';

    /**
     * Estonia.
     **/
    const CodeType_EE = 'EE';

    /**
     * Ethiopia.
     **/
    const CodeType_ET = 'ET';

    /**
     * Falkland Islands (Malvinas).
     **/
    const CodeType_FK = 'FK';

    /**
     * Faroe Islands.
     **/
    const CodeType_FO = 'FO';

    /**
     * Fiji.
     **/
    const CodeType_FJ = 'FJ';

    /**
     * Finland.
     **/
    const CodeType_FI = 'FI';

    /**
     * France.
     **/
    const CodeType_FR = 'FR';

    /**
     * French Guiana.
     **/
    const CodeType_GF = 'GF';

    /**
     * French Polynesia. Includes Tahiti.
     **/
    const CodeType_PF = 'PF';

    /**
     * French Southern Territories.
     **/
    const CodeType_TF = 'TF';

    /**
     * Gabon.
     **/
    const CodeType_GA = 'GA';

    /**
     * Gambia.
     **/
    const CodeType_GM = 'GM';

    /**
     * Georgia.
     **/
    const CodeType_GE = 'GE';

    /**
     * Germany.
     **/
    const CodeType_DE = 'DE';

    /**
     * Ghana.
     **/
    const CodeType_GH = 'GH';

    /**
     * Gibraltar.
     **/
    const CodeType_GI = 'GI';

    /**
     * Greece.
     **/
    const CodeType_GR = 'GR';

    /**
     * Greenland.
     **/
    const CodeType_GL = 'GL';

    /**
     * Grenada.
     **/
    const CodeType_GD = 'GD';

    /**
     * Guadeloupe.
     **/
    const CodeType_GP = 'GP';

    /**
     * Guam.
     **/
    const CodeType_GU = 'GU';

    /**
     * Guatemala.
     **/
    const CodeType_GT = 'GT';

    /**
     * Guinea.
     **/
    const CodeType_GN = 'GN';

    /**
     * Guinea-Bissau.
     **/
    const CodeType_GW = 'GW';

    /**
     * Guyana.
     **/
    const CodeType_GY = 'GY';

    /**
     * Haiti.
     **/
    const CodeType_HT = 'HT';

    /**
     * Heard Island and McDonald Islands.
     **/
    const CodeType_HM = 'HM';

    /**
     * Holy See (Vatican City state).
     **/
    const CodeType_VA = 'VA';

    /**
     * Honduras.
     **/
    const CodeType_HN = 'HN';

    /**
     * Hong Kong.
     **/
    const CodeType_HK = 'HK';

    /**
     * Hungary.
     **/
    const CodeType_HU = 'HU';

    /**
     * Iceland.
     **/
    const CodeType_IS = 'IS';

    /**
     * India.
     **/
    const CodeType_IN = 'IN';

    /**
     * Indonesia.
     **/
    const CodeType_ID = 'ID';

    /**
     * Islamic Republic of Iran.
     **/
    const CodeType_IR = 'IR';

    /**
     * Iraq.
     **/
    const CodeType_IQ = 'IQ';

    /**
     * Ireland.
     **/
    const CodeType_IE = 'IE';

    /**
     * Israel.
     **/
    const CodeType_IL = 'IL';

    /**
     * Italy.
     **/
    const CodeType_IT = 'IT';

    /**
     * Jamaica.
     **/
    const CodeType_JM = 'JM';

    /**
     * Japan.
     **/
    const CodeType_JP = 'JP';

    /**
     * Jordan.
     **/
    const CodeType_JO = 'JO';

    /**
     * Kazakhstan.
     **/
    const CodeType_KZ = 'KZ';

    /**
     * Kenya.
     **/
    const CodeType_KE = 'KE';

    /**
     * Kiribati.
     **/
    const CodeType_KI = 'KI';

    /**
     * Democratic People's Republic of Korea.
     **/
    const CodeType_KP = 'KP';

    /**
     * Republic of Korea.
     **/
    const CodeType_KR = 'KR';

    /**
     * Kuwait.
     **/
    const CodeType_KW = 'KW';

    /**
     * Kyrgyzstan.
     **/
    const CodeType_KG = 'KG';

    /**
     * Lao People's Democratic Republic.
     **/
    const CodeType_LA = 'LA';

    /**
     * Latvia.
     **/
    const CodeType_LV = 'LV';

    /**
     * Lebanon.
     **/
    const CodeType_LB = 'LB';

    /**
     * Lesotho.
     **/
    const CodeType_LS = 'LS';

    /**
     * Liberia.
     **/
    const CodeType_LR = 'LR';

    /**
     * Libyan Arab Jamahiriya.
     **/
    const CodeType_LY = 'LY';

    /**
     * Liechtenstein.
     **/
    const CodeType_LI = 'LI';

    /**
     * Lithuania.
     **/
    const CodeType_LT = 'LT';

    /**
     * Luxembourg.
     **/
    const CodeType_LU = 'LU';

    /**
     * Macao.
     **/
    const CodeType_MO = 'MO';

    /**
     * The Former Yugoslav Republic of Macedonia.
     **/
    const CodeType_MK = 'MK';

    /**
     * Madagascar.
     **/
    const CodeType_MG = 'MG';

    /**
     * Malawi.
     **/
    const CodeType_MW = 'MW';

    /**
     * Malaysia.
     **/
    const CodeType_MY = 'MY';

    /**
     * Maldives.
     **/
    const CodeType_MV = 'MV';

    /**
     * Mali.
     **/
    const CodeType_ML = 'ML';

    /**
     * Malta.
     **/
    const CodeType_MT = 'MT';

    /**
     * Marshall Islands.
     **/
    const CodeType_MH = 'MH';

    /**
     * Martinique.
     **/
    const CodeType_MQ = 'MQ';

    /**
     * Mauritania.
     **/
    const CodeType_MR = 'MR';

    /**
     * Mauritius.
     **/
    const CodeType_MU = 'MU';

    /**
     * Mayotte.
     **/
    const CodeType_YT = 'YT';

    /**
     * Mexico.
     **/
    const CodeType_MX = 'MX';

    /**
     * Federated States of Micronesia.
     **/
    const CodeType_FM = 'FM';

    /**
     * Republic of Moldova.
     **/
    const CodeType_MD = 'MD';

    /**
     * Monaco.
     **/
    const CodeType_MC = 'MC';

    /**
     * Mongolia.
     **/
    const CodeType_MN = 'MN';

    /**
     * Montserrat.
     **/
    const CodeType_MS = 'MS';

    /**
     * Morocco.
     **/
    const CodeType_MA = 'MA';

    /**
     * Mozambique.
     **/
    const CodeType_MZ = 'MZ';

    /**
     * Myanmar.
     **/
    const CodeType_MM = 'MM';

    /**
     * Namibia.
     **/
    const CodeType_NA = 'NA';

    /**
     * Nauru.
     **/
    const CodeType_NR = 'NR';

    /**
     * Nepal.
     **/
    const CodeType_NP = 'NP';

    /**
     * Netherlands.
     **/
    const CodeType_NL = 'NL';

    /**
     * Netherlands Antilles.
     **/
    const CodeType_AN = 'AN';

    /**
     * New Caledonia.
     **/
    const CodeType_NC = 'NC';

    /**
     * New Zealand.
     **/
    const CodeType_NZ = 'NZ';

    /**
     * Nicaragua.
     **/
    const CodeType_NI = 'NI';

    /**
     * Niger.
     **/
    const CodeType_NE = 'NE';

    /**
     * Nigeria.
     **/
    const CodeType_NG = 'NG';

    /**
     * Niue.
     **/
    const CodeType_NU = 'NU';

    /**
     * Norfolk Island.
     **/
    const CodeType_NF = 'NF';

    /**
     * Northern Mariana Islands.
     **/
    const CodeType_MP = 'MP';

    /**
     * Norway.
     **/
    const CodeType_NO = 'NO';

    /**
     * Oman.
     **/
    const CodeType_OM = 'OM';

    /**
     * Pakistan.
     **/
    const CodeType_PK = 'PK';

    /**
     * Palau.
     **/
    const CodeType_PW = 'PW';

    /**
     * Palestinian territory, Occupied.
     **/
    const CodeType_PS = 'PS';

    /**
     * Panama.
     **/
    const CodeType_PA = 'PA';

    /**
     * Papua New Guinea.
     **/
    const CodeType_PG = 'PG';

    /**
     * Paraguay.
     **/
    const CodeType_PY = 'PY';

    /**
     * Peru.
     **/
    const CodeType_PE = 'PE';

    /**
     * Philippines.
     **/
    const CodeType_PH = 'PH';

    /**
     * Pitcairn.
     **/
    const CodeType_PN = 'PN';

    /**
     * Poland.
     **/
    const CodeType_PL = 'PL';

    /**
     * Portugal.
     **/
    const CodeType_PT = 'PT';

    /**
     * Puerto Rico.
     **/
    const CodeType_PR = 'PR';

    /**
     * Qatar.
     **/
    const CodeType_QA = 'QA';

    /**
     * Reunion.
     **/
    const CodeType_RE = 'RE';

    /**
     * Romania.
     **/
    const CodeType_RO = 'RO';

    /**
     * Russian Federation.
     **/
    const CodeType_RU = 'RU';

    /**
     * Rwanda.
     **/
    const CodeType_RW = 'RW';

    /**
     * Saint Helena.
     **/
    const CodeType_SH = 'SH';

    /**
     * Saint Kitts and Nevis.
     **/
    const CodeType_KN = 'KN';

    /**
     * Saint Lucia.
     **/
    const CodeType_LC = 'LC';

    /**
     * Saint Pierre and Miquelon.
     **/
    const CodeType_PM = 'PM';

    /**
     * Saint Vincent and the Grenadines.
     **/
    const CodeType_VC = 'VC';

    /**
     * Samoa.
     **/
    const CodeType_WS = 'WS';

    /**
     * San Marino.
     **/
    const CodeType_SM = 'SM';

    /**
     * Sao Tome and Principe.
     **/
    const CodeType_ST = 'ST';

    /**
     * Saudi Arabia.
     **/
    const CodeType_SA = 'SA';

    /**
     * Senegal.
     **/
    const CodeType_SN = 'SN';

    /**
     * Seychelles.
     **/
    const CodeType_SC = 'SC';

    /**
     * Sierra Leone.
     **/
    const CodeType_SL = 'SL';

    /**
     * Singapore.
     **/
    const CodeType_SG = 'SG';

    /**
     * Slovakia.
     **/
    const CodeType_SK = 'SK';

    /**
     * Slovenia.
     **/
    const CodeType_SI = 'SI';

    /**
     * Solomon Islands.
     **/
    const CodeType_SB = 'SB';

    /**
     * Somalia.
     **/
    const CodeType_SO = 'SO';

    /**
     * South Africa.
     **/
    const CodeType_ZA = 'ZA';

    /**
     * South Georgia and the South Sandwich Islands.
     **/
    const CodeType_GS = 'GS';

    /**
     * Spain.
     **/
    const CodeType_ES = 'ES';

    /**
     * Sri Lanka.
     **/
    const CodeType_LK = 'LK';

    /**
     * Sudan.
     **/
    const CodeType_SD = 'SD';

    /**
     * Suriname.
     **/
    const CodeType_SR = 'SR';

    /**
     * Svalbard and Jan Mayen.
     **/
    const CodeType_SJ = 'SJ';

    /**
     * Swaziland.
     **/
    const CodeType_SZ = 'SZ';

    /**
     * Sweden.
     **/
    const CodeType_SE = 'SE';

    /**
     * Switzerland.
     **/
    const CodeType_CH = 'CH';

    /**
     * Syrian Arab Republic.
     **/
    const CodeType_SY = 'SY';

    /**
     * Taiwan, Province of China.
     **/
    const CodeType_TW = 'TW';

    /**
     * Tajikistan.
     **/
    const CodeType_TJ = 'TJ';

    /**
     * Tanzania, United Republic of.
     **/
    const CodeType_TZ = 'TZ';

    /**
     * Thailand.
     **/
    const CodeType_TH = 'TH';

    /**
     * Togo.
     **/
    const CodeType_TG = 'TG';

    /**
     * Tokelau.
     **/
    const CodeType_TK = 'TK';

    /**
     * Tonga.
     **/
    const CodeType_TO = 'TO';

    /**
     * Trinidad and Tobago.
     **/
    const CodeType_TT = 'TT';

    /**
     * Tunisia.
     **/
    const CodeType_TN = 'TN';

    /**
     * Turkey.
     **/
    const CodeType_TR = 'TR';

    /**
     * Turkmenistan.
     **/
    const CodeType_TM = 'TM';

    /**
     * Turks and Caicos Islands.
     **/
    const CodeType_TC = 'TC';

    /**
     * Tuvalu.
     **/
    const CodeType_TV = 'TV';

    /**
     * Uganda.
     **/
    const CodeType_UG = 'UG';

    /**
     * Ukraine.
     **/
    const CodeType_UA = 'UA';

    /**
     * United Arab Emirates.
     **/
    const CodeType_AE = 'AE';

    /**
     * United Kingdom.
     **/
    const CodeType_GB = 'GB';

    /**
     * United States.
     **/
    const CodeType_US = 'US';

    /**
     * NOTE: United States Minor Outlying Islands was
     * defined in the eBay list previously
     * but is no longer a viable option. This country
     * will remain on eBay country list for backward
     * compatibility. Use 'US' instead.
     **/
    const CodeType_UM = 'UM';

    /**
     * Uruguay.
     **/
    const CodeType_UY = 'UY';

    /**
     * Uzbekistan.
     **/
    const CodeType_UZ = 'UZ';

    /**
     * Vanuatu.
     **/
    const CodeType_VU = 'VU';

    /**
     * Venezuela.
     **/
    const CodeType_VE = 'VE';

    /**
     * Vietnam.
     **/
    const CodeType_VN = 'VN';

    /**
     * Virgin Islands, British.
     **/
    const CodeType_VG = 'VG';

    /**
     * Virgin Islands, U.S.
     **/
    const CodeType_VI = 'VI';

    /**
     * Wallis and Futuna.
     **/
    const CodeType_WF = 'WF';

    /**
     * Western Sahara.
     **/
    const CodeType_EH = 'EH';

    /**
     * Yemen.
     **/
    const CodeType_YE = 'YE';

    /**
     * No longer in use. See RS for Serbia and ME for Montenegro.
     **/
    const CodeType_YU = 'YU';

    /**
     * Zambia.
     **/
    const CodeType_ZM = 'ZM';

    /**
     * Zimbabwe.
     **/
    const CodeType_ZW = 'ZW';

    /**
     * NOTE: APO/FPO was defined in eBay list previously
     * but they are not defined in ISO 3166. This country
     * will remain on eBay country code list for backward
     * compatibility.
     **/
    const CodeType_AA = 'AA';

    /**
     * NOTE    : Guernsey was defined in eBay list previously
     * but they are not defined in ISO 3166. This country
     * will remain on eBay country list for backward
     * compatibility.
     **/
    const CodeType_QM = 'QM';

    /**
     * NOTE: Jan Mayen was defined in eBay list previously
     * but they are not defined in ISO 3166. This country
     * will remain on eBay country list for backward
     * compatibility.
     **/
    const CodeType_QN = 'QN';

    /**
     * NOTE: Jersey was defined in eBay list previously
     * but they are not defined in ISO 3166. This country
     * will remain on eBay country list for backward
     * compatibility.
     **/
    const CodeType_QO = 'QO';

    
    const CodeType_QP = 'QP';

    /**
     * Jersey
     **/
    const CodeType_JE = 'JE';

    /**
     * Guernsey
     **/
    const CodeType_GG = 'GG';

    /**
     * Unknown country
     **/
    const CodeType_ZZ = 'ZZ';

    /**
     * Serbia
     **/
    const CodeType_RS = 'RS';

    /**
     * Montenegro.
     **/
    const CodeType_ME = 'ME';

    /**
     * (out) Reserved for internal or future use
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
     * @return CountryCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param CountryCodeType|null $value
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
    public function isAF()
    {
        return $this->_value === self::CodeType_AF;
    }

    /**
     * @return bool
     */
    public function isAL()
    {
        return $this->_value === self::CodeType_AL;
    }

    /**
     * @return bool
     */
    public function isDZ()
    {
        return $this->_value === self::CodeType_DZ;
    }

    /**
     * @return bool
     */
    public function isAS()
    {
        return $this->_value === self::CodeType_AS;
    }

    /**
     * @return bool
     */
    public function isAD()
    {
        return $this->_value === self::CodeType_AD;
    }

    /**
     * @return bool
     */
    public function isAO()
    {
        return $this->_value === self::CodeType_AO;
    }

    /**
     * @return bool
     */
    public function isAI()
    {
        return $this->_value === self::CodeType_AI;
    }

    /**
     * @return bool
     */
    public function isAQ()
    {
        return $this->_value === self::CodeType_AQ;
    }

    /**
     * @return bool
     */
    public function isAG()
    {
        return $this->_value === self::CodeType_AG;
    }

    /**
     * @return bool
     */
    public function isAR()
    {
        return $this->_value === self::CodeType_AR;
    }

    /**
     * @return bool
     */
    public function isAM()
    {
        return $this->_value === self::CodeType_AM;
    }

    /**
     * @return bool
     */
    public function isAW()
    {
        return $this->_value === self::CodeType_AW;
    }

    /**
     * @return bool
     */
    public function isAU()
    {
        return $this->_value === self::CodeType_AU;
    }

    /**
     * @return bool
     */
    public function isAT()
    {
        return $this->_value === self::CodeType_AT;
    }

    /**
     * @return bool
     */
    public function isAZ()
    {
        return $this->_value === self::CodeType_AZ;
    }

    /**
     * @return bool
     */
    public function isBS()
    {
        return $this->_value === self::CodeType_BS;
    }

    /**
     * @return bool
     */
    public function isBH()
    {
        return $this->_value === self::CodeType_BH;
    }

    /**
     * @return bool
     */
    public function isBD()
    {
        return $this->_value === self::CodeType_BD;
    }

    /**
     * @return bool
     */
    public function isBB()
    {
        return $this->_value === self::CodeType_BB;
    }

    /**
     * @return bool
     */
    public function isBY()
    {
        return $this->_value === self::CodeType_BY;
    }

    /**
     * @return bool
     */
    public function isBE()
    {
        return $this->_value === self::CodeType_BE;
    }

    /**
     * @return bool
     */
    public function isBZ()
    {
        return $this->_value === self::CodeType_BZ;
    }

    /**
     * @return bool
     */
    public function isBJ()
    {
        return $this->_value === self::CodeType_BJ;
    }

    /**
     * @return bool
     */
    public function isBM()
    {
        return $this->_value === self::CodeType_BM;
    }

    /**
     * @return bool
     */
    public function isBT()
    {
        return $this->_value === self::CodeType_BT;
    }

    /**
     * @return bool
     */
    public function isBO()
    {
        return $this->_value === self::CodeType_BO;
    }

    /**
     * @return bool
     */
    public function isBA()
    {
        return $this->_value === self::CodeType_BA;
    }

    /**
     * @return bool
     */
    public function isBW()
    {
        return $this->_value === self::CodeType_BW;
    }

    /**
     * @return bool
     */
    public function isBV()
    {
        return $this->_value === self::CodeType_BV;
    }

    /**
     * @return bool
     */
    public function isBR()
    {
        return $this->_value === self::CodeType_BR;
    }

    /**
     * @return bool
     */
    public function isIO()
    {
        return $this->_value === self::CodeType_IO;
    }

    /**
     * @return bool
     */
    public function isBN()
    {
        return $this->_value === self::CodeType_BN;
    }

    /**
     * @return bool
     */
    public function isBG()
    {
        return $this->_value === self::CodeType_BG;
    }

    /**
     * @return bool
     */
    public function isBF()
    {
        return $this->_value === self::CodeType_BF;
    }

    /**
     * @return bool
     */
    public function isBI()
    {
        return $this->_value === self::CodeType_BI;
    }

    /**
     * @return bool
     */
    public function isKH()
    {
        return $this->_value === self::CodeType_KH;
    }

    /**
     * @return bool
     */
    public function isCM()
    {
        return $this->_value === self::CodeType_CM;
    }

    /**
     * @return bool
     */
    public function isCA()
    {
        return $this->_value === self::CodeType_CA;
    }

    /**
     * @return bool
     */
    public function isCV()
    {
        return $this->_value === self::CodeType_CV;
    }

    /**
     * @return bool
     */
    public function isKY()
    {
        return $this->_value === self::CodeType_KY;
    }

    /**
     * @return bool
     */
    public function isCF()
    {
        return $this->_value === self::CodeType_CF;
    }

    /**
     * @return bool
     */
    public function isTD()
    {
        return $this->_value === self::CodeType_TD;
    }

    /**
     * @return bool
     */
    public function isCL()
    {
        return $this->_value === self::CodeType_CL;
    }

    /**
     * @return bool
     */
    public function isCN()
    {
        return $this->_value === self::CodeType_CN;
    }

    /**
     * @return bool
     */
    public function isCX()
    {
        return $this->_value === self::CodeType_CX;
    }

    /**
     * @return bool
     */
    public function isCC()
    {
        return $this->_value === self::CodeType_CC;
    }

    /**
     * @return bool
     */
    public function isCO()
    {
        return $this->_value === self::CodeType_CO;
    }

    /**
     * @return bool
     */
    public function isKM()
    {
        return $this->_value === self::CodeType_KM;
    }

    /**
     * @return bool
     */
    public function isCG()
    {
        return $this->_value === self::CodeType_CG;
    }

    /**
     * @return bool
     */
    public function isCD()
    {
        return $this->_value === self::CodeType_CD;
    }

    /**
     * @return bool
     */
    public function isCK()
    {
        return $this->_value === self::CodeType_CK;
    }

    /**
     * @return bool
     */
    public function isCR()
    {
        return $this->_value === self::CodeType_CR;
    }

    /**
     * @return bool
     */
    public function isCI()
    {
        return $this->_value === self::CodeType_CI;
    }

    /**
     * @return bool
     */
    public function isHR()
    {
        return $this->_value === self::CodeType_HR;
    }

    /**
     * @return bool
     */
    public function isCU()
    {
        return $this->_value === self::CodeType_CU;
    }

    /**
     * @return bool
     */
    public function isCY()
    {
        return $this->_value === self::CodeType_CY;
    }

    /**
     * @return bool
     */
    public function isCZ()
    {
        return $this->_value === self::CodeType_CZ;
    }

    /**
     * @return bool
     */
    public function isDK()
    {
        return $this->_value === self::CodeType_DK;
    }

    /**
     * @return bool
     */
    public function isDJ()
    {
        return $this->_value === self::CodeType_DJ;
    }

    /**
     * @return bool
     */
    public function isDM()
    {
        return $this->_value === self::CodeType_DM;
    }

    /**
     * @return bool
     */
    public function isDO()
    {
        return $this->_value === self::CodeType_DO;
    }

    /**
     * @return bool
     */
    public function isTP()
    {
        return $this->_value === self::CodeType_TP;
    }

    /**
     * @return bool
     */
    public function isEC()
    {
        return $this->_value === self::CodeType_EC;
    }

    /**
     * @return bool
     */
    public function isEG()
    {
        return $this->_value === self::CodeType_EG;
    }

    /**
     * @return bool
     */
    public function isSV()
    {
        return $this->_value === self::CodeType_SV;
    }

    /**
     * @return bool
     */
    public function isGQ()
    {
        return $this->_value === self::CodeType_GQ;
    }

    /**
     * @return bool
     */
    public function isER()
    {
        return $this->_value === self::CodeType_ER;
    }

    /**
     * @return bool
     */
    public function isEE()
    {
        return $this->_value === self::CodeType_EE;
    }

    /**
     * @return bool
     */
    public function isET()
    {
        return $this->_value === self::CodeType_ET;
    }

    /**
     * @return bool
     */
    public function isFK()
    {
        return $this->_value === self::CodeType_FK;
    }

    /**
     * @return bool
     */
    public function isFO()
    {
        return $this->_value === self::CodeType_FO;
    }

    /**
     * @return bool
     */
    public function isFJ()
    {
        return $this->_value === self::CodeType_FJ;
    }

    /**
     * @return bool
     */
    public function isFI()
    {
        return $this->_value === self::CodeType_FI;
    }

    /**
     * @return bool
     */
    public function isFR()
    {
        return $this->_value === self::CodeType_FR;
    }

    /**
     * @return bool
     */
    public function isGF()
    {
        return $this->_value === self::CodeType_GF;
    }

    /**
     * @return bool
     */
    public function isPF()
    {
        return $this->_value === self::CodeType_PF;
    }

    /**
     * @return bool
     */
    public function isTF()
    {
        return $this->_value === self::CodeType_TF;
    }

    /**
     * @return bool
     */
    public function isGA()
    {
        return $this->_value === self::CodeType_GA;
    }

    /**
     * @return bool
     */
    public function isGM()
    {
        return $this->_value === self::CodeType_GM;
    }

    /**
     * @return bool
     */
    public function isGE()
    {
        return $this->_value === self::CodeType_GE;
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
    public function isGH()
    {
        return $this->_value === self::CodeType_GH;
    }

    /**
     * @return bool
     */
    public function isGI()
    {
        return $this->_value === self::CodeType_GI;
    }

    /**
     * @return bool
     */
    public function isGR()
    {
        return $this->_value === self::CodeType_GR;
    }

    /**
     * @return bool
     */
    public function isGL()
    {
        return $this->_value === self::CodeType_GL;
    }

    /**
     * @return bool
     */
    public function isGD()
    {
        return $this->_value === self::CodeType_GD;
    }

    /**
     * @return bool
     */
    public function isGP()
    {
        return $this->_value === self::CodeType_GP;
    }

    /**
     * @return bool
     */
    public function isGU()
    {
        return $this->_value === self::CodeType_GU;
    }

    /**
     * @return bool
     */
    public function isGT()
    {
        return $this->_value === self::CodeType_GT;
    }

    /**
     * @return bool
     */
    public function isGN()
    {
        return $this->_value === self::CodeType_GN;
    }

    /**
     * @return bool
     */
    public function isGW()
    {
        return $this->_value === self::CodeType_GW;
    }

    /**
     * @return bool
     */
    public function isGY()
    {
        return $this->_value === self::CodeType_GY;
    }

    /**
     * @return bool
     */
    public function isHT()
    {
        return $this->_value === self::CodeType_HT;
    }

    /**
     * @return bool
     */
    public function isHM()
    {
        return $this->_value === self::CodeType_HM;
    }

    /**
     * @return bool
     */
    public function isVA()
    {
        return $this->_value === self::CodeType_VA;
    }

    /**
     * @return bool
     */
    public function isHN()
    {
        return $this->_value === self::CodeType_HN;
    }

    /**
     * @return bool
     */
    public function isHK()
    {
        return $this->_value === self::CodeType_HK;
    }

    /**
     * @return bool
     */
    public function isHU()
    {
        return $this->_value === self::CodeType_HU;
    }

    /**
     * @return bool
     */
    public function isIS()
    {
        return $this->_value === self::CodeType_IS;
    }

    /**
     * @return bool
     */
    public function isIN()
    {
        return $this->_value === self::CodeType_IN;
    }

    /**
     * @return bool
     */
    public function isID()
    {
        return $this->_value === self::CodeType_ID;
    }

    /**
     * @return bool
     */
    public function isIR()
    {
        return $this->_value === self::CodeType_IR;
    }

    /**
     * @return bool
     */
    public function isIQ()
    {
        return $this->_value === self::CodeType_IQ;
    }

    /**
     * @return bool
     */
    public function isIE()
    {
        return $this->_value === self::CodeType_IE;
    }

    /**
     * @return bool
     */
    public function isIL()
    {
        return $this->_value === self::CodeType_IL;
    }

    /**
     * @return bool
     */
    public function isIT()
    {
        return $this->_value === self::CodeType_IT;
    }

    /**
     * @return bool
     */
    public function isJM()
    {
        return $this->_value === self::CodeType_JM;
    }

    /**
     * @return bool
     */
    public function isJP()
    {
        return $this->_value === self::CodeType_JP;
    }

    /**
     * @return bool
     */
    public function isJO()
    {
        return $this->_value === self::CodeType_JO;
    }

    /**
     * @return bool
     */
    public function isKZ()
    {
        return $this->_value === self::CodeType_KZ;
    }

    /**
     * @return bool
     */
    public function isKE()
    {
        return $this->_value === self::CodeType_KE;
    }

    /**
     * @return bool
     */
    public function isKI()
    {
        return $this->_value === self::CodeType_KI;
    }

    /**
     * @return bool
     */
    public function isKP()
    {
        return $this->_value === self::CodeType_KP;
    }

    /**
     * @return bool
     */
    public function isKR()
    {
        return $this->_value === self::CodeType_KR;
    }

    /**
     * @return bool
     */
    public function isKW()
    {
        return $this->_value === self::CodeType_KW;
    }

    /**
     * @return bool
     */
    public function isKG()
    {
        return $this->_value === self::CodeType_KG;
    }

    /**
     * @return bool
     */
    public function isLA()
    {
        return $this->_value === self::CodeType_LA;
    }

    /**
     * @return bool
     */
    public function isLV()
    {
        return $this->_value === self::CodeType_LV;
    }

    /**
     * @return bool
     */
    public function isLB()
    {
        return $this->_value === self::CodeType_LB;
    }

    /**
     * @return bool
     */
    public function isLS()
    {
        return $this->_value === self::CodeType_LS;
    }

    /**
     * @return bool
     */
    public function isLR()
    {
        return $this->_value === self::CodeType_LR;
    }

    /**
     * @return bool
     */
    public function isLY()
    {
        return $this->_value === self::CodeType_LY;
    }

    /**
     * @return bool
     */
    public function isLI()
    {
        return $this->_value === self::CodeType_LI;
    }

    /**
     * @return bool
     */
    public function isLT()
    {
        return $this->_value === self::CodeType_LT;
    }

    /**
     * @return bool
     */
    public function isLU()
    {
        return $this->_value === self::CodeType_LU;
    }

    /**
     * @return bool
     */
    public function isMO()
    {
        return $this->_value === self::CodeType_MO;
    }

    /**
     * @return bool
     */
    public function isMK()
    {
        return $this->_value === self::CodeType_MK;
    }

    /**
     * @return bool
     */
    public function isMG()
    {
        return $this->_value === self::CodeType_MG;
    }

    /**
     * @return bool
     */
    public function isMW()
    {
        return $this->_value === self::CodeType_MW;
    }

    /**
     * @return bool
     */
    public function isMY()
    {
        return $this->_value === self::CodeType_MY;
    }

    /**
     * @return bool
     */
    public function isMV()
    {
        return $this->_value === self::CodeType_MV;
    }

    /**
     * @return bool
     */
    public function isML()
    {
        return $this->_value === self::CodeType_ML;
    }

    /**
     * @return bool
     */
    public function isMT()
    {
        return $this->_value === self::CodeType_MT;
    }

    /**
     * @return bool
     */
    public function isMH()
    {
        return $this->_value === self::CodeType_MH;
    }

    /**
     * @return bool
     */
    public function isMQ()
    {
        return $this->_value === self::CodeType_MQ;
    }

    /**
     * @return bool
     */
    public function isMR()
    {
        return $this->_value === self::CodeType_MR;
    }

    /**
     * @return bool
     */
    public function isMU()
    {
        return $this->_value === self::CodeType_MU;
    }

    /**
     * @return bool
     */
    public function isYT()
    {
        return $this->_value === self::CodeType_YT;
    }

    /**
     * @return bool
     */
    public function isMX()
    {
        return $this->_value === self::CodeType_MX;
    }

    /**
     * @return bool
     */
    public function isFM()
    {
        return $this->_value === self::CodeType_FM;
    }

    /**
     * @return bool
     */
    public function isMD()
    {
        return $this->_value === self::CodeType_MD;
    }

    /**
     * @return bool
     */
    public function isMC()
    {
        return $this->_value === self::CodeType_MC;
    }

    /**
     * @return bool
     */
    public function isMN()
    {
        return $this->_value === self::CodeType_MN;
    }

    /**
     * @return bool
     */
    public function isMS()
    {
        return $this->_value === self::CodeType_MS;
    }

    /**
     * @return bool
     */
    public function isMA()
    {
        return $this->_value === self::CodeType_MA;
    }

    /**
     * @return bool
     */
    public function isMZ()
    {
        return $this->_value === self::CodeType_MZ;
    }

    /**
     * @return bool
     */
    public function isMM()
    {
        return $this->_value === self::CodeType_MM;
    }

    /**
     * @return bool
     */
    public function isNA()
    {
        return $this->_value === self::CodeType_NA;
    }

    /**
     * @return bool
     */
    public function isNR()
    {
        return $this->_value === self::CodeType_NR;
    }

    /**
     * @return bool
     */
    public function isNP()
    {
        return $this->_value === self::CodeType_NP;
    }

    /**
     * @return bool
     */
    public function isNL()
    {
        return $this->_value === self::CodeType_NL;
    }

    /**
     * @return bool
     */
    public function isAN()
    {
        return $this->_value === self::CodeType_AN;
    }

    /**
     * @return bool
     */
    public function isNC()
    {
        return $this->_value === self::CodeType_NC;
    }

    /**
     * @return bool
     */
    public function isNZ()
    {
        return $this->_value === self::CodeType_NZ;
    }

    /**
     * @return bool
     */
    public function isNI()
    {
        return $this->_value === self::CodeType_NI;
    }

    /**
     * @return bool
     */
    public function isNE()
    {
        return $this->_value === self::CodeType_NE;
    }

    /**
     * @return bool
     */
    public function isNG()
    {
        return $this->_value === self::CodeType_NG;
    }

    /**
     * @return bool
     */
    public function isNU()
    {
        return $this->_value === self::CodeType_NU;
    }

    /**
     * @return bool
     */
    public function isNF()
    {
        return $this->_value === self::CodeType_NF;
    }

    /**
     * @return bool
     */
    public function isMP()
    {
        return $this->_value === self::CodeType_MP;
    }

    /**
     * @return bool
     */
    public function isNO()
    {
        return $this->_value === self::CodeType_NO;
    }

    /**
     * @return bool
     */
    public function isOM()
    {
        return $this->_value === self::CodeType_OM;
    }

    /**
     * @return bool
     */
    public function isPK()
    {
        return $this->_value === self::CodeType_PK;
    }

    /**
     * @return bool
     */
    public function isPW()
    {
        return $this->_value === self::CodeType_PW;
    }

    /**
     * @return bool
     */
    public function isPS()
    {
        return $this->_value === self::CodeType_PS;
    }

    /**
     * @return bool
     */
    public function isPA()
    {
        return $this->_value === self::CodeType_PA;
    }

    /**
     * @return bool
     */
    public function isPG()
    {
        return $this->_value === self::CodeType_PG;
    }

    /**
     * @return bool
     */
    public function isPY()
    {
        return $this->_value === self::CodeType_PY;
    }

    /**
     * @return bool
     */
    public function isPE()
    {
        return $this->_value === self::CodeType_PE;
    }

    /**
     * @return bool
     */
    public function isPH()
    {
        return $this->_value === self::CodeType_PH;
    }

    /**
     * @return bool
     */
    public function isPN()
    {
        return $this->_value === self::CodeType_PN;
    }

    /**
     * @return bool
     */
    public function isPL()
    {
        return $this->_value === self::CodeType_PL;
    }

    /**
     * @return bool
     */
    public function isPT()
    {
        return $this->_value === self::CodeType_PT;
    }

    /**
     * @return bool
     */
    public function isPR()
    {
        return $this->_value === self::CodeType_PR;
    }

    /**
     * @return bool
     */
    public function isQA()
    {
        return $this->_value === self::CodeType_QA;
    }

    /**
     * @return bool
     */
    public function isRE()
    {
        return $this->_value === self::CodeType_RE;
    }

    /**
     * @return bool
     */
    public function isRO()
    {
        return $this->_value === self::CodeType_RO;
    }

    /**
     * @return bool
     */
    public function isRU()
    {
        return $this->_value === self::CodeType_RU;
    }

    /**
     * @return bool
     */
    public function isRW()
    {
        return $this->_value === self::CodeType_RW;
    }

    /**
     * @return bool
     */
    public function isSH()
    {
        return $this->_value === self::CodeType_SH;
    }

    /**
     * @return bool
     */
    public function isKN()
    {
        return $this->_value === self::CodeType_KN;
    }

    /**
     * @return bool
     */
    public function isLC()
    {
        return $this->_value === self::CodeType_LC;
    }

    /**
     * @return bool
     */
    public function isPM()
    {
        return $this->_value === self::CodeType_PM;
    }

    /**
     * @return bool
     */
    public function isVC()
    {
        return $this->_value === self::CodeType_VC;
    }

    /**
     * @return bool
     */
    public function isWS()
    {
        return $this->_value === self::CodeType_WS;
    }

    /**
     * @return bool
     */
    public function isSM()
    {
        return $this->_value === self::CodeType_SM;
    }

    /**
     * @return bool
     */
    public function isST()
    {
        return $this->_value === self::CodeType_ST;
    }

    /**
     * @return bool
     */
    public function isSA()
    {
        return $this->_value === self::CodeType_SA;
    }

    /**
     * @return bool
     */
    public function isSN()
    {
        return $this->_value === self::CodeType_SN;
    }

    /**
     * @return bool
     */
    public function isSC()
    {
        return $this->_value === self::CodeType_SC;
    }

    /**
     * @return bool
     */
    public function isSL()
    {
        return $this->_value === self::CodeType_SL;
    }

    /**
     * @return bool
     */
    public function isSG()
    {
        return $this->_value === self::CodeType_SG;
    }

    /**
     * @return bool
     */
    public function isSK()
    {
        return $this->_value === self::CodeType_SK;
    }

    /**
     * @return bool
     */
    public function isSI()
    {
        return $this->_value === self::CodeType_SI;
    }

    /**
     * @return bool
     */
    public function isSB()
    {
        return $this->_value === self::CodeType_SB;
    }

    /**
     * @return bool
     */
    public function isSO()
    {
        return $this->_value === self::CodeType_SO;
    }

    /**
     * @return bool
     */
    public function isZA()
    {
        return $this->_value === self::CodeType_ZA;
    }

    /**
     * @return bool
     */
    public function isGS()
    {
        return $this->_value === self::CodeType_GS;
    }

    /**
     * @return bool
     */
    public function isES()
    {
        return $this->_value === self::CodeType_ES;
    }

    /**
     * @return bool
     */
    public function isLK()
    {
        return $this->_value === self::CodeType_LK;
    }

    /**
     * @return bool
     */
    public function isSD()
    {
        return $this->_value === self::CodeType_SD;
    }

    /**
     * @return bool
     */
    public function isSR()
    {
        return $this->_value === self::CodeType_SR;
    }

    /**
     * @return bool
     */
    public function isSJ()
    {
        return $this->_value === self::CodeType_SJ;
    }

    /**
     * @return bool
     */
    public function isSZ()
    {
        return $this->_value === self::CodeType_SZ;
    }

    /**
     * @return bool
     */
    public function isSE()
    {
        return $this->_value === self::CodeType_SE;
    }

    /**
     * @return bool
     */
    public function isCH()
    {
        return $this->_value === self::CodeType_CH;
    }

    /**
     * @return bool
     */
    public function isSY()
    {
        return $this->_value === self::CodeType_SY;
    }

    /**
     * @return bool
     */
    public function isTW()
    {
        return $this->_value === self::CodeType_TW;
    }

    /**
     * @return bool
     */
    public function isTJ()
    {
        return $this->_value === self::CodeType_TJ;
    }

    /**
     * @return bool
     */
    public function isTZ()
    {
        return $this->_value === self::CodeType_TZ;
    }

    /**
     * @return bool
     */
    public function isTH()
    {
        return $this->_value === self::CodeType_TH;
    }

    /**
     * @return bool
     */
    public function isTG()
    {
        return $this->_value === self::CodeType_TG;
    }

    /**
     * @return bool
     */
    public function isTK()
    {
        return $this->_value === self::CodeType_TK;
    }

    /**
     * @return bool
     */
    public function isTO()
    {
        return $this->_value === self::CodeType_TO;
    }

    /**
     * @return bool
     */
    public function isTT()
    {
        return $this->_value === self::CodeType_TT;
    }

    /**
     * @return bool
     */
    public function isTN()
    {
        return $this->_value === self::CodeType_TN;
    }

    /**
     * @return bool
     */
    public function isTR()
    {
        return $this->_value === self::CodeType_TR;
    }

    /**
     * @return bool
     */
    public function isTM()
    {
        return $this->_value === self::CodeType_TM;
    }

    /**
     * @return bool
     */
    public function isTC()
    {
        return $this->_value === self::CodeType_TC;
    }

    /**
     * @return bool
     */
    public function isTV()
    {
        return $this->_value === self::CodeType_TV;
    }

    /**
     * @return bool
     */
    public function isUG()
    {
        return $this->_value === self::CodeType_UG;
    }

    /**
     * @return bool
     */
    public function isUA()
    {
        return $this->_value === self::CodeType_UA;
    }

    /**
     * @return bool
     */
    public function isAE()
    {
        return $this->_value === self::CodeType_AE;
    }

    /**
     * @return bool
     */
    public function isGB()
    {
        return $this->_value === self::CodeType_GB;
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
    public function isUM()
    {
        return $this->_value === self::CodeType_UM;
    }

    /**
     * @return bool
     */
    public function isUY()
    {
        return $this->_value === self::CodeType_UY;
    }

    /**
     * @return bool
     */
    public function isUZ()
    {
        return $this->_value === self::CodeType_UZ;
    }

    /**
     * @return bool
     */
    public function isVU()
    {
        return $this->_value === self::CodeType_VU;
    }

    /**
     * @return bool
     */
    public function isVE()
    {
        return $this->_value === self::CodeType_VE;
    }

    /**
     * @return bool
     */
    public function isVN()
    {
        return $this->_value === self::CodeType_VN;
    }

    /**
     * @return bool
     */
    public function isVG()
    {
        return $this->_value === self::CodeType_VG;
    }

    /**
     * @return bool
     */
    public function isVI()
    {
        return $this->_value === self::CodeType_VI;
    }

    /**
     * @return bool
     */
    public function isWF()
    {
        return $this->_value === self::CodeType_WF;
    }

    /**
     * @return bool
     */
    public function isEH()
    {
        return $this->_value === self::CodeType_EH;
    }

    /**
     * @return bool
     */
    public function isYE()
    {
        return $this->_value === self::CodeType_YE;
    }

    /**
     * @return bool
     */
    public function isYU()
    {
        return $this->_value === self::CodeType_YU;
    }

    /**
     * @return bool
     */
    public function isZM()
    {
        return $this->_value === self::CodeType_ZM;
    }

    /**
     * @return bool
     */
    public function isZW()
    {
        return $this->_value === self::CodeType_ZW;
    }

    /**
     * @return bool
     */
    public function isAA()
    {
        return $this->_value === self::CodeType_AA;
    }

    /**
     * @return bool
     */
    public function isQM()
    {
        return $this->_value === self::CodeType_QM;
    }

    /**
     * @return bool
     */
    public function isQN()
    {
        return $this->_value === self::CodeType_QN;
    }

    /**
     * @return bool
     */
    public function isQO()
    {
        return $this->_value === self::CodeType_QO;
    }

    /**
     * @return bool
     */
    public function isQP()
    {
        return $this->_value === self::CodeType_QP;
    }

    /**
     * @return bool
     */
    public function isJE()
    {
        return $this->_value === self::CodeType_JE;
    }

    /**
     * @return bool
     */
    public function isGG()
    {
        return $this->_value === self::CodeType_GG;
    }

    /**
     * @return bool
     */
    public function isZZ()
    {
        return $this->_value === self::CodeType_ZZ;
    }

    /**
     * @return bool
     */
    public function isRS()
    {
        return $this->_value === self::CodeType_RS;
    }

    /**
     * @return bool
     */
    public function isME()
    {
        return $this->_value === self::CodeType_ME;
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

CountryCodeType::_register();
