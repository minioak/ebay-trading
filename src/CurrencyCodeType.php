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
 * This enumeration type contains a list of standard 3-digit ISO 4217 currency codes for
 * currency used in countries around the world.
 * 
 * When adding an item through
 * AddItem
 * (or related API call), the
 * 
 * Item.Currency
 * value will default to the currency used on the listing
 * site. Otherwise, only the following currency types may be specified through an
 * Add/Revise/Relist call, since these are the currencies of all the countries where
 * the Trading API is supported:
 * <ul>
 * <li>USD - US Dollar</li>
 * <li>CAD - Canadian Dollar</li>
 * <li>GBP - British Pound</li>
 * <li>AUD - Australian Dollar</li>
 * <li>EUR - Euro</li>
 * <li>CHF - Swiss Franc</li>
 * <li>CNY - Chinese Renminbi</li>
 * <li>HKD - Hong Kong Dollar</li>
 * <li>PHP - Philippines Peso</li>
 * <li>PLN - Polish Zloty</li>
 * <li>SEK - Sweden Krona</li>
 * <li>SGD - Singapore Dollar</li>
 * <li>TWD - Taiwanese Dollar</li>
 * <li>MYR - Malaysian Ringgit</li>
 * </ul>
 * 
 * Other currency codes in this enumerated type may be returned in
 * 
 * GetItem
 * (and other calls) based on the buyer's and/or seller's
 * registration country. However, only the values listed above will be returned if you
 * call
 * GeteBayDetails
 * with
 * DetailName
 * set to
 * 
 * CurrencyDetails
 * .
 * http://www.xe.com/iso4217.htm
 **/
class CurrencyCodeType extends EbatNs_EnumType
{
    const TAG = 'CurrencyCodeType';
    const NAME = 'CurrencyCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * This value is a 3-digit code for an Afghan afghani, a currency used in Afghanistan.
     **/
    const CodeType_AFA = 'AFA';

    /**
     * This value is a 3-digit code for an Albanian lek, a currency used in Albania.
     **/
    const CodeType_ALL = 'ALL';

    /**
     * This value is a 3-digit code for an Algerian dinar, a currency used in Algeria.
     **/
    const CodeType_DZD = 'DZD';

    /**
     * This value is a 3-digit code for an Andorran peseta, a currency used in Andorra.
     **/
    const CodeType_ADP = 'ADP';

    /**
     * This value is a 3-digit code for an Angolan kwanza, a currency used in Angola.
     **/
    const CodeType_AOA = 'AOA';

    /**
     * This value is a 3-digit code for an Argentine peso, a currency used in Argentina.
     **/
    const CodeType_ARS = 'ARS';

    /**
     * This value is a 3-digit code for an Armenian dram, a currency used in Armenia.
     **/
    const CodeType_AMD = 'AMD';

    /**
     * This value is a 3-digit code for an Aruban florin, a currency used in Aruba.
     **/
    const CodeType_AWG = 'AWG';

    /**
     * This value is a 3-digit code for an Azerbaijani manat, a currency used in Azerbaijan.
     **/
    const CodeType_AZM = 'AZM';

    /**
     * This value is a 3-digit code for a Bahamian dollar, a currency used in the Bahamas.
     **/
    const CodeType_BSD = 'BSD';

    /**
     * This value is a 3-digit code for a Bahraini dinar, a currency used in the Bahrain.
     **/
    const CodeType_BHD = 'BHD';

    /**
     * This value is a 3-digit code for a Bangladeshi taka, a currency used in Bangladesh.
     **/
    const CodeType_BDT = 'BDT';

    /**
     * This value is a 3-digit code for a Barbados dollar, a currency used in Barbados.
     **/
    const CodeType_BBD = 'BBD';

    /**
     * This value is a 3-digit code for a Belarusian ruble, a currency used in Belarus.
     **/
    const CodeType_BYR = 'BYR';

    /**
     * This value is a 3-digit code for a Belize dollar, a currency used in Belize.
     **/
    const CodeType_BZD = 'BZD';

    /**
     * This value is a 3-digit code for a Bermudian dollar, a currency used in Bermuda.
     **/
    const CodeType_BMD = 'BMD';

    /**
     * This value is a 3-digit code for a Bhutanese ngultrum, a currency used in Bhutan.
     **/
    const CodeType_BTN = 'BTN';

    /**
     * This value is a 3-digit code for an Indian rupee, a currency used in India.
     **/
    const CodeType_INR = 'INR';

    /**
     * This value is a 3-digit code for a Bolivian Mvdol, a currency used in Bolivia.
     **/
    const CodeType_BOV = 'BOV';

    /**
     * This value is a 3-digit code for a Boliviano, a currency used in Bolivia.
     **/
    const CodeType_BOB = 'BOB';

    /**
     * This value is a 3-digit code for a Bosnia and Herzegovina convertible mark, a
     * currency used in Bosnia and Herzegovina.
     **/
    const CodeType_BAM = 'BAM';

    /**
     * This value is a 3-digit code for a Botswana pula, a currency used in Botswana.
     **/
    const CodeType_BWP = 'BWP';

    /**
     * This value is a 3-digit code for a Brazilian real, a currency used in Brazil.
     **/
    const CodeType_BRL = 'BRL';

    /**
     * This value is a 3-digit code for a Brunei dollar, a currency used in Brunei and
     * Singapore.
     **/
    const CodeType_BND = 'BND';

    /**
     * This value is a 3-digit code for the old Bulgarian lev, a currency previously used
     * in Bulgaria. This currency has been replaced by the new Bulgarian lev (3-digit
     * code: BGN).
     **/
    const CodeType_BGL = 'BGL';

    /**
     * This value is a 3-digit code for a Bulgarian lev, a currency used in Bulgaria. This
     * currency replaced the old Bulgarian lev (3-digit code: BGL).
     **/
    const CodeType_BGN = 'BGN';

    /**
     * This value is a 3-digit code for a Burundian franc, a currency used in Burundi.
     **/
    const CodeType_BIF = 'BIF';

    /**
     * This value is a 3-digit code for a Cambodian riel, a currency used in Cambodia.
     **/
    const CodeType_KHR = 'KHR';

    /**
     * This value is a 3-digit code for a Canadian dollar, a currency used in Canada. This is
     * the value that should be passed in the
     * Item.Currency
     * field by the
     * seller when listing an item on the eBay Canada site (Site ID 2).
     **/
    const CodeType_CAD = 'CAD';

    /**
     * This value is a 3-digit code for a Cape Verde escudo, a currency used in Cape
     * Verde.
     **/
    const CodeType_CVE = 'CVE';

    /**
     * This value is a 3-digit code for a Cayman Islands dollar, a currency used in
     * the Cayman Islands.
     **/
    const CodeType_KYD = 'KYD';

    /**
     * This value is a 3-digit code for a Central African CFA franc, a currency used in
     * Cameroon, Central African Republic, Republic of the Congo, Chad, Equatorial
     * Guinea, and Gabon.
     **/
    const CodeType_XAF = 'XAF';

    /**
     * This value is a 3-digit code for a Unidad de Fomento, a currency used in Chile.
     **/
    const CodeType_CLF = 'CLF';

    /**
     * This value is a 3-digit code for a Chilean peso, a currency used in Chile.
     **/
    const CodeType_CLP = 'CLP';

    /**
     * This value is a 3-digit code for a Chinese yuan (also known as the renminbi), a
     * currency used in China.
     **/
    const CodeType_CNY = 'CNY';

    /**
     * This value is a 3-digit code for a Columbian peso, a currency used in Columbia.
     **/
    const CodeType_COP = 'COP';

    /**
     * This value is a 3-digit code for a Comoro franc, a currency used in Comoros.
     **/
    const CodeType_KMF = 'KMF';

    /**
     * This value is a 3-digit code for a Congolese franc, a currency used in Democratic
     * Republic of Congo.
     **/
    const CodeType_CDF = 'CDF';

    /**
     * This value is a 3-digit code for a Costa Rican colon, a currency used in Costa
     * Rica.
     **/
    const CodeType_CRC = 'CRC';

    /**
     * This value is a 3-digit code for a Croatian kuna, a currency used in Croatia.
     **/
    const CodeType_HRK = 'HRK';

    /**
     * This value is a 3-digit code for a Cuban peso, a currency used in Cuba.
     **/
    const CodeType_CUP = 'CUP';

    /**
     * This value is a 3-digit code for a Cypriot pound, a currency previously used in
     * Cyprus. This currency has been replaced by the Euro (3-digit code: EUR).
     **/
    const CodeType_CYP = 'CYP';

    /**
     * This value is a 3-digit code for a Czech koruna, a currency used in the Czech
     * Republic.
     **/
    const CodeType_CZK = 'CZK';

    /**
     * This value is a 3-digit code for a Danish krone, a currency used in Denmark,
     * the Faroe Islands, and Greenland.
     **/
    const CodeType_DKK = 'DKK';

    /**
     * This value is a 3-digit code for a Djiboutian franc, a currency used in Djibouti.
     **/
    const CodeType_DJF = 'DJF';

    /**
     * This value is a 3-digit code for a Dominican peso, a currency used in the Dominican
     * Republic.
     **/
    const CodeType_DOP = 'DOP';

    /**
     * This value is a 3-digit code for a Portuguese Timorese escudo, a currency
     * previously used in Portuguese Timor.
     **/
    const CodeType_TPE = 'TPE';

    /**
     * This value is an old 3-digit code for a Cape Verde escudo, a currency used in
     * Cape Verde. The 'ECV' code has been replaced by 'CVE'.
     **/
    const CodeType_ECV = 'ECV';

    /**
     * This value is a 3-digit code for an Ecuadorian sucre, a currency previously used in
     * Ecuador. This currency has been replaced by the US Dollar (3-digit code: USD).
     **/
    const CodeType_ECS = 'ECS';

    /**
     * This value is a 3-digit code for an Egyptian pound, a currency used in Egypt.
     **/
    const CodeType_EGP = 'EGP';

    /**
     * This value is a 3-digit code for a Salvadoran colon, a currency previously used in
     * El Salvador. This currency has been replaced by the US Dollar (3-digit code: USD).
     **/
    const CodeType_SVC = 'SVC';

    /**
     * This value is a 3-digit code for an Eritrean nakfa, a currency used in Eritrea.
     **/
    const CodeType_ERN = 'ERN';

    /**
     * This value is a 3-digit code for an Estonian kroon, a currency previously used in
     * Estonia. This currency has been replaced by the Euro (3-digit code: EUR).
     **/
    const CodeType_EEK = 'EEK';

    /**
     * This value is a 3-digit code for an Ethiopian birr, a currency used in Ethiopia.
     **/
    const CodeType_ETB = 'ETB';

    /**
     * This value is a 3-digit code for a Falkland Islands pound, a currency used in
     * the Falkland Islands.
     **/
    const CodeType_FKP = 'FKP';

    /**
     * This value is a 3-digit code for a Fiji dollar, a currency used in Fiji.
     **/
    const CodeType_FJD = 'FJD';

    /**
     * This value is a 3-digit code for a Gambian dalasi, a currency used in Gambia.
     **/
    const CodeType_GMD = 'GMD';

    /**
     * This value is a 3-digit code for a Georgian Iari, a currency used in the country of
     * Georgia.
     **/
    const CodeType_GEL = 'GEL';

    /**
     * This value is an old 3-digit code for a Ghanaian cedi, a currency used in Ghana.
     * The 'GHC' code has been replaced by 'GHS'.
     **/
    const CodeType_GHC = 'GHC';

    /**
     * This value is a 3-digit code for a Gibraltar pound, a currency used in Gibraltar.
     **/
    const CodeType_GIP = 'GIP';

    /**
     * This value is a 3-digit code for a Guatemalan quetzal, a currency used in
     * Guatemala.
     **/
    const CodeType_GTQ = 'GTQ';

    /**
     * This value is a 3-digit code for a Guinean franc, a currency used in Guinea.
     **/
    const CodeType_GNF = 'GNF';

    /**
     * This value is a 3-digit code for a Guinea-Bissau peso, a currency previously used
     * in Guinea-Bissau. This currency has been replaced by the West African CFA franc
     * (3-digit code: XOF).
     **/
    const CodeType_GWP = 'GWP';

    /**
     * This value is a 3-digit code for a Guyanese dollar, a currency used in Guyana.
     **/
    const CodeType_GYD = 'GYD';

    /**
     * This value is a 3-digit code for a Haitian gourde, a currency used in Haiti.
     **/
    const CodeType_HTG = 'HTG';

    /**
     * This value is a 3-digit code for a Honduran lempira, a currency used in Honduras.
     **/
    const CodeType_HNL = 'HNL';

    /**
     * This value is a 3-digit code for a Hong Kong dollar, a currency used in Hong Kong
     * and Macau. This is the value that should be passed in the
     * 
     * Item.Currency
     * field by the seller when listing an item on the
     * eBay Hong Kong site (Site ID 201).
     **/
    const CodeType_HKD = 'HKD';

    /**
     * This value is a 3-digit code for a Hungarian forint, a currency used in Hungary.
     **/
    const CodeType_HUF = 'HUF';

    /**
     * This value is a 3-digit code for an Icelandic krona, a currency used in Iceland.
     **/
    const CodeType_ISK = 'ISK';

    /**
     * This value is a 3-digit code for an Indonesian rupiah, a currency used in
     * Indonesia.
     **/
    const CodeType_IDR = 'IDR';

    /**
     * This value is a 3-digit code for an Iranian rial, a currency used in Iran.
     **/
    const CodeType_IRR = 'IRR';

    /**
     * This value is a 3-digit code for an Iraqi dinar, a currency used in Iraq.
     **/
    const CodeType_IQD = 'IQD';

    /**
     * This value is a 3-digit code for an Israeli new shekel, a currency used in
     * Israel and in the Palestinian territories.
     **/
    const CodeType_ILS = 'ILS';

    /**
     * This value is a 3-digit code for a Jamaican dollar, a currency used in Jamaica.
     **/
    const CodeType_JMD = 'JMD';

    /**
     * This value is a 3-digit code for a Japanese yen, a currency used in Japan.
     **/
    const CodeType_JPY = 'JPY';

    /**
     * This value is a 3-digit code for a Jordanian dinar, a currency used in Jordan.
     **/
    const CodeType_JOD = 'JOD';

    /**
     * This value is a 3-digit code for a Kazahhstani tenge, a currency used in
     * Kazakhstan.
     **/
    const CodeType_KZT = 'KZT';

    /**
     * This value is a 3-digit code for a Kenyan shilling, a currency used in Kenya.
     **/
    const CodeType_KES = 'KES';

    /**
     * This value is a 3-digit code for an Australia dollar, a currency used in Australia.
     * This is the value that should be passed in the
     * Item.Currency
     * field by the seller when listing an item on the eBay Australia site
     * (Site ID 15).
     **/
    const CodeType_AUD = 'AUD';

    /**
     * This value is a 3-digit code for a North Korean won, a currency used in North
     * Korea.
     **/
    const CodeType_KPW = 'KPW';

    /**
     * This value is a 3-digit code for a South Korean won, a currency used in South
     * Korea.
     **/
    const CodeType_KRW = 'KRW';

    /**
     * This value is a 3-digit code for a Kuwaiti dollar, a currency used in Kuwait.
     **/
    const CodeType_KWD = 'KWD';

    /**
     * This value is a 3-digit code for a Kyrgzstani som, a currency used in Kyrgystan.
     **/
    const CodeType_KGS = 'KGS';

    /**
     * This value is a 3-digit code for a Lao kip, a currency used in Laos.
     **/
    const CodeType_LAK = 'LAK';

    /**
     * This value is a 3-digit code for a Latvian lats, a currency used in Latvia.
     **/
    const CodeType_LVL = 'LVL';

    /**
     * This value is a 3-digit code for a Lebanese pound, a currency used in Lebanon.
     **/
    const CodeType_LBP = 'LBP';

    /**
     * This value is a 3-digit code for a Lesotho loti, a currency used in Lesotho.
     **/
    const CodeType_LSL = 'LSL';

    /**
     * This value is a 3-digit code for a Liberian dollar, a currency used in Liberia.
     **/
    const CodeType_LRD = 'LRD';

    /**
     * This value is a 3-digit code for a Libyan dinar, a currency used in Libya.
     **/
    const CodeType_LYD = 'LYD';

    /**
     * Swiss Franc.
     * For eBay, you can only specify this currency for listings you submit to the
     * Switzerland site (site ID 193).
     **/
    const CodeType_CHF = 'CHF';

    /**
     * This value is a 3-digit code for a Lithuanian litas, a currency used in Lithuania.
     **/
    const CodeType_LTL = 'LTL';

    /**
     * This value is a 3-digit code for a Macanese pataca, a currency used in Macao.
     **/
    const CodeType_MOP = 'MOP';

    /**
     * This value is a 3-digit code for a Macedonian denar, a currency used in Macedonia.
     **/
    const CodeType_MKD = 'MKD';

    /**
     * This value is a 3-digit code for a Malagay franc, a currency previously used
     * in Madagascar. This currency has been replaced by the Malagasy ariary
     * (3-digit code: MGA).
     **/
    const CodeType_MGF = 'MGF';

    /**
     * This value is a 3-digit code for a Malawian kwacha, a currency used in Malawi.
     **/
    const CodeType_MWK = 'MWK';

    /**
     * This value is a 3-digit code for a Malaysian Ringgit, a currency used in Malaysia.
     * This is the value that should be passed in the
     * Item.Currency
     * field by the seller when listing an item on the eBay Malaysia site
     * (Site ID 207).
     **/
    const CodeType_MYR = 'MYR';

    /**
     * This value is a 3-digit code for a Maldivian rufiyaaa, a currency used in the
     * Maldives.
     **/
    const CodeType_MVR = 'MVR';

    /**
     * This value is a 3-digit code for a Maltese lira, a currency previously used in
     * Malta. This currency has been replaced by the Euro (3-digit code: EUR).
     **/
    const CodeType_MTL = 'MTL';

    /**
     * This value is a 3-digit code for a EURO, a currency used in Andorra, Austria,
     * Belgium, Cyprus, Estonia, Finland, France, Germany, Greece, Ireland, Italy, Kosovo,
     * Luxembourg, Malta, Monaco, Montenegro, Netherlands, Portugal, San Marino, Slovakia,
     * Slovenia, Spain, and Vatican City. This is the value that should be passed in the
     * 
     * Item.Currency
     * field by the seller when listing an item on the
     * following sites: Austria (Site ID 16), Belgium_French (Site ID 23),
     * France (Site ID 71), Germany (Site ID 77), Italy (Site ID 101), Belgium_Dutch (Site
     * ID 123), Netherlands (Site ID 146), Spain (Site ID 186), and Ireland (Site ID 205).
     **/
    const CodeType_EUR = 'EUR';

    /**
     * This value is a 3-digit code for a Mauritanian ouguiya, a currency used in
     * Mauritania.
     **/
    const CodeType_MRO = 'MRO';

    /**
     * This value is a 3-digit code for a Mauritian rupee, a currency used in
     * Mauritius.
     **/
    const CodeType_MUR = 'MUR';

    /**
     * This value is a 3-digit code for a Mexican peso, a currency used in
     * Mexico.
     **/
    const CodeType_MXN = 'MXN';

    /**
     * This value is a 3-digit funds code for a Mexican peso, a currency used in
     * Mexico.
     **/
    const CodeType_MXV = 'MXV';

    /**
     * This value is a 3-digit code for a Moldovan leu, a currency used in
     * Moldova.
     **/
    const CodeType_MDL = 'MDL';

    /**
     * This value is a 3-digit code for a Mongolian tugrik, a currency used in
     * Mongolia.
     **/
    const CodeType_MNT = 'MNT';

    /**
     * This value is a 3-digit code for an Easy Caribbean dollar, a currency used in
     * Anguilla, Antigua and Barbuda, Dominica, Grenada, Montserrat, Saint Kitts and
     * Nevis, Saint Lucia, and Saint Vincent and the Grenadines.
     **/
    const CodeType_XCD = 'XCD';

    /**
     * This value is an old 3-digit code for a Mozambican metical, a currency used in
     * Mozambique. The 'MZM' code has been replaced by 'MZN'.
     **/
    const CodeType_MZM = 'MZM';

    /**
     * This value is a 3-digit code for a Myanma kyat, a currency used in
     * Myanmar.
     **/
    const CodeType_MMK = 'MMK';

    /**
     * This value is a 3-digit code for a South African rand, a currency used in
     * South Africa.
     **/
    const CodeType_ZAR = 'ZAR';

    /**
     * This value is a 3-digit code for a Namibian dollar, a currency used in
     * Namibia.
     **/
    const CodeType_NAD = 'NAD';

    /**
     * This value is a 3-digit code for a Nepalese rupee, a currency used in Nepal.
     **/
    const CodeType_NPR = 'NPR';

    /**
     * This value is a 3-digit code for a Netherlands Antillean guilder, a currency used
     * in Curacao and Sint Maarten.
     **/
    const CodeType_ANG = 'ANG';

    /**
     * This value is a 3-digit code for a CFP franc, a currency used in French Polynesia,
     * New Caledonia, and Wallis and Futuna.
     **/
    const CodeType_XPF = 'XPF';

    /**
     * This value is a 3-digit code for a New Zealand dollar, a currency used in the
     * Cook Islands, New Zealand, Niue, Pitcairn, and Tokelau, Ross Dependency.
     **/
    const CodeType_NZD = 'NZD';

    /**
     * This value is a 3-digit code for a Nicaraguan cordoba, a currency used in
     * Nicaragua.
     **/
    const CodeType_NIO = 'NIO';

    /**
     * This value is a 3-digit code for a Nigerian naira, a currency used in Nigeria.
     **/
    const CodeType_NGN = 'NGN';

    /**
     * This value is a 3-digit code for a Norwegian kron, a currency used in Norway,
     * Svalbard, Jan Mayen, Bouvet Island, Queen Maud Land, and Peter I Island.
     **/
    const CodeType_NOK = 'NOK';

    /**
     * This value is a 3-digit code for an Omani rial, a currency used in Oman.
     **/
    const CodeType_OMR = 'OMR';

    /**
     * This value is a 3-digit code for a Pakistani rupee, a currency used in Pakistan.
     **/
    const CodeType_PKR = 'PKR';

    /**
     * This value is a 3-digit code for a Panamanian balboa, a currency used in Panama.
     **/
    const CodeType_PAB = 'PAB';

    /**
     * This value is a 3-digit code for a Papua New Guinea kina, a currency used in
     * Papua New Guinea.
     **/
    const CodeType_PGK = 'PGK';

    /**
     * This value is a 3-digit code for a Paraguayan guarani, a currency used in
     * Paraguay.
     **/
    const CodeType_PYG = 'PYG';

    /**
     * This value is a 3-digit code for a Peruvian nuevo sol, a currency used in Peru.
     **/
    const CodeType_PEN = 'PEN';

    /**
     * This value is a 3-digit code for a Philippine peso, a currency used in the
     * Philippines. This is the value that should be passed in the
     * 
     * Item.Currency
     * field by the seller when listing an item on the
     * eBay Philippines site (Site ID 211).
     **/
    const CodeType_PHP = 'PHP';

    /**
     * This value is a 3-digit code for a Polish zloty, a currency used in Poland. This
     * is the value that should be passed in the
     * Item.Currency
     * field
     * by the seller when listing an item on the eBay Poland site (Site ID 212).
     **/
    const CodeType_PLN = 'PLN';

    /**
     * This value is a 3-digit code for a US dollar, a currency used in the United
     * States, America Samoa, Barbados, Bermuda, British Indian Ocean Territory, British
     * Virgin Islands, Caribbean Netherlands, Ecuador, El Salvador, Guam, Haiti, Marshall
     * Islands, Federated States of Micronesia, Northern Mariana Islands, Palau, Panama,
     * Puerto Rico, Timor-Leste, Turks and Caicos Islands, US Virgin Islands, and
     * Zimbabwe. This is the value that should be passed in the
     * 
     * Item.Currency
     * field by the seller when listing an item on the
     * eBay US or US eBay Motors site (Site ID 0).
     **/
    const CodeType_USD = 'USD';

    /**
     * This value is a 3-digit code for a Qatari riyal, a currency used in Qatar.
     **/
    const CodeType_QAR = 'QAR';

    /**
     * This value is a 3-digit code for the old Romanian leu, a currency previously used
     * in Romania. This currency has been replaced by the Romanian new leu (3-digit code:
     * RON).
     **/
    const CodeType_ROL = 'ROL';

    /**
     * This value is a 3-digit code for a Russian rouble, a currency used in Russia,
     * Abkhazia, and South Ossetia. This value replace the old 3-digit code for the
     * Russian rouble, 'RUR'.
     **/
    const CodeType_RUB = 'RUB';

    /**
     * This value is the old 3-digit code for a Russian rouble, a currency used in
     * Russia. This value was replaced by the new 3-digit code for the Russian rouble,
     * 'RUB'.
     **/
    const CodeType_RUR = 'RUR';

    /**
     * This value is a 3-digit code for a Rwandan franc, a currency used in Rwanda.
     **/
    const CodeType_RWF = 'RWF';

    /**
     * This value is a 3-digit code for a Saint Helena pound, a currency used in Saint
     * Helena.
     **/
    const CodeType_SHP = 'SHP';

    /**
     * This value is a 3-digit code for a Samoan tala, a currency used in Samoa.
     **/
    const CodeType_WST = 'WST';

    /**
     * This value is a 3-digit code for a Sao Tome and Principe dobra, a currency used in
     * Sao Tome and Principe.
     **/
    const CodeType_STD = 'STD';

    /**
     * This value is a 3-digit code for a Saudi riyal, a currency used in Saudi Arabia.
     **/
    const CodeType_SAR = 'SAR';

    /**
     * This value is a 3-digit code for a Seychelles rupee, a currency used in Seychelles.
     **/
    const CodeType_SCR = 'SCR';

    /**
     * This value is a 3-digit code for a Sierra Leonean leone, a currency used in Sierra
     * Leone.
     **/
    const CodeType_SLL = 'SLL';

    /**
     * This value is a 3-digit code for a Singapore dollar, a currency used in Singapore
     * and Brunei. This is the value that should be passed in the
     * 
     * Item.Currency
     * field by the seller when listing an item on the
     * eBay Singapore site (Site ID 216).
     **/
    const CodeType_SGD = 'SGD';

    /**
     * This value is a 3-digit code for a Slovak koruna, a currency previously used in
     * Slovakia. This currency has been replaced by the Euro (3-digit code: EUR).
     **/
    const CodeType_SKK = 'SKK';

    /**
     * This value is a 3-digit code for a Slovenian tolar, a currency previously used in
     * Slovenia. This currency has been replaced by the Euro (3-digit code: EUR).
     **/
    const CodeType_SIT = 'SIT';

    /**
     * This value is a 3-digit code for a Solomon Islands dollar, a currency used in
     * the Solomon Islands.
     **/
    const CodeType_SBD = 'SBD';

    /**
     * This value is a 3-digit code for a Somali shilling, a currency used in Somalia.
     **/
    const CodeType_SOS = 'SOS';

    /**
     * This value is a 3-digit code for a Sri Lankan rupee, a currency used in Sri Lanka.
     **/
    const CodeType_LKR = 'LKR';

    /**
     * This value is the 3-digit code for a Sudanese dinar, a currency previously used in
     * Sudan. The Sudanese dinar was replaced by the Sudanese pound, which has a 3-digit
     * code of 'SDG'.
     **/
    const CodeType_SDD = 'SDD';

    /**
     * This value is the 3-digit code for a Suriname guilder, a currency previously used
     * in Suriname. The Surinam guilder was replaced by the Surinamese dollar, which has
     * a 3-digit code of 'SRD'.
     **/
    const CodeType_SRG = 'SRG';

    /**
     * This value is a 3-digit code for a Swazi lilangeni, a currency used in Swaziland.
     **/
    const CodeType_SZL = 'SZL';

    /**
     * This value is a 3-digit code for a Swedish krona, a currency used in Swedn. This
     * is the value that should be passed in the
     * Item.Currency
     * field
     * by the seller when listing an item on the eBay Sweden site (Site ID 218).
     **/
    const CodeType_SEK = 'SEK';

    /**
     * This value is a 3-digit code for a Syrian pound, a currency used in Syria.
     **/
    const CodeType_SYP = 'SYP';

    /**
     * This value is a 3-digit code for the New Taiwan dollar, a currency used in Taiwan.
     **/
    const CodeType_TWD = 'TWD';

    /**
     * This value is a 3-digit code for a Tajikistani somoni, a currency used in
     * Tajikistan.
     **/
    const CodeType_TJS = 'TJS';

    /**
     * This value is a 3-digit code for a Tanzanian shilling, a currency used in
     * Tanzania.
     **/
    const CodeType_TZS = 'TZS';

    /**
     * This value is a 3-digit code for a Thai baht, a currency used in Thailand.
     **/
    const CodeType_THB = 'THB';

    /**
     * This value is a 3-digit code for a West African CFA franc, a currency used in
     * Benin, Burkina Faso, Cote d'Ivoire, Guinea-Bissau, Mali, Niger, Senegal, and
     * Togo.
     **/
    const CodeType_XOF = 'XOF';

    /**
     * This value is a 3-digit code for a Tongan pa'anga, a currency used in Tonga.
     **/
    const CodeType_TOP = 'TOP';

    /**
     * This value is a 3-digit code for a Trinidad and Tobago dollar, a currency used in
     * Trinidad and Tobago.
     **/
    const CodeType_TTD = 'TTD';

    /**
     * This value is a 3-digit code for a Tunisian dinar, a currency used in Tunisia.
     **/
    const CodeType_TND = 'TND';

    /**
     * This value is the old 3-digit code for a Turkish lira, a currency used in Turkey
     * and Northern Cyprus. This value was replaced by the new 3-digit code for the
     * Turkish lira, 'TRY'.
     **/
    const CodeType_TRL = 'TRL';

    /**
     * This value is the old 3-digit code for a Turkmenistani manat, a currency used in
     * Turkmenistan. This value was replaced by the new 3-digit code for
     * the Turkmenistani manat, 'TMT'.
     **/
    const CodeType_TMM = 'TMM';

    /**
     * This value is a 3-digit code for a Ugandan shilling, a currency used in Uganda.
     **/
    const CodeType_UGX = 'UGX';

    /**
     * This value is a 3-digit code for a Ukrainian hryvnia, a currency used in the
     * Ukraine.
     **/
    const CodeType_UAH = 'UAH';

    /**
     * This value is a 3-digit code for an United Arab Emirates dirham, a currency used
     * in the United Arab Emirates.
     **/
    const CodeType_AED = 'AED';

    /**
     * This value is a 3-digit code for a Pound sterling, a currency used in the United
     * Kingdom and British Crown dependencies. This is the value that should be passed in
     * the
     * Item.Currency
     * field by the seller when listing an item on
     * the eBay UK site (Site ID 3).
     **/
    const CodeType_GBP = 'GBP';

    /**
     * This value is a 3-digit code for a same-day transaction involving US dollars.
     **/
    const CodeType_USS = 'USS';

    /**
     * This value is a 3-digit code for a next-day transaction involving US dollars.
     **/
    const CodeType_USN = 'USN';

    /**
     * This value is a 3-digit code for a Uruguayan peso, a currency used in Uruguay.
     **/
    const CodeType_UYU = 'UYU';

    /**
     * This value is a 3-digit code for a Uzbekistan som, a currency used in the
     * Uzbekistan.
     **/
    const CodeType_UZS = 'UZS';

    /**
     * This value is a 3-digit code for a Vanuatu vatu, a currency used in Vanuatu.
     **/
    const CodeType_VUV = 'VUV';

    /**
     * This value is a 3-digit code for a Venezuelan bolivar, a currency previously used
     * in Venezuela. The Venezuela bolivar was replaced by the Venezuelan bolivar
     * fuerte, which has a 3-digit code of 'VEF'.
     **/
    const CodeType_VEB = 'VEB';

    /**
     * This value is a 3-digit code for a Vietnamese dong, a currency used in Vietnam.
     **/
    const CodeType_VND = 'VND';

    /**
     * This value is a 3-digit code for a Moroccan dirham, a currency used in Morocco.
     **/
    const CodeType_MAD = 'MAD';

    /**
     * This value is a 3-digit code for a Yemeni rial, a currency used in Yemen.
     **/
    const CodeType_YER = 'YER';

    /**
     * This value is a 3-digit code for a Yugoslav dinar, a currency previously used in
     * Yugoslavia. The Yugoslav dinar was replaced by the Serbian dinar, which has a 3-
     * digit code of 'RSD'.
     **/
    const CodeType_YUM = 'YUM';

    /**
     * This value is the old 3-digit code for a Zambian kwacha, a currency used in
     * Zambia. The 'ZMK' code has been replaced by 'ZMW'.
     **/
    const CodeType_ZMK = 'ZMK';

    /**
     * This value is the old 3-digit code for a Zimbabwean dollar, a currency previously
     * used in Zimbabwe. The US dollar replaced the Zimbabwean dollar as the official
     * currency in Zimbabwe.
     **/
    const CodeType_ZWD = 'ZWD';

    /**
     * This value is a 3-digit code for an Austrian schilling, a currency previously used
     * in Austria. This currency has been replaced by the Euro (3-digit code: EUR).
     **/
    const CodeType_ATS = 'ATS';

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
     * @return CurrencyCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param CurrencyCodeType|null $value
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
    public function isAFA()
    {
        return $this->_value === self::CodeType_AFA;
    }

    /**
     * @return bool
     */
    public function isALL()
    {
        return $this->_value === self::CodeType_ALL;
    }

    /**
     * @return bool
     */
    public function isDZD()
    {
        return $this->_value === self::CodeType_DZD;
    }

    /**
     * @return bool
     */
    public function isADP()
    {
        return $this->_value === self::CodeType_ADP;
    }

    /**
     * @return bool
     */
    public function isAOA()
    {
        return $this->_value === self::CodeType_AOA;
    }

    /**
     * @return bool
     */
    public function isARS()
    {
        return $this->_value === self::CodeType_ARS;
    }

    /**
     * @return bool
     */
    public function isAMD()
    {
        return $this->_value === self::CodeType_AMD;
    }

    /**
     * @return bool
     */
    public function isAWG()
    {
        return $this->_value === self::CodeType_AWG;
    }

    /**
     * @return bool
     */
    public function isAZM()
    {
        return $this->_value === self::CodeType_AZM;
    }

    /**
     * @return bool
     */
    public function isBSD()
    {
        return $this->_value === self::CodeType_BSD;
    }

    /**
     * @return bool
     */
    public function isBHD()
    {
        return $this->_value === self::CodeType_BHD;
    }

    /**
     * @return bool
     */
    public function isBDT()
    {
        return $this->_value === self::CodeType_BDT;
    }

    /**
     * @return bool
     */
    public function isBBD()
    {
        return $this->_value === self::CodeType_BBD;
    }

    /**
     * @return bool
     */
    public function isBYR()
    {
        return $this->_value === self::CodeType_BYR;
    }

    /**
     * @return bool
     */
    public function isBZD()
    {
        return $this->_value === self::CodeType_BZD;
    }

    /**
     * @return bool
     */
    public function isBMD()
    {
        return $this->_value === self::CodeType_BMD;
    }

    /**
     * @return bool
     */
    public function isBTN()
    {
        return $this->_value === self::CodeType_BTN;
    }

    /**
     * @return bool
     */
    public function isINR()
    {
        return $this->_value === self::CodeType_INR;
    }

    /**
     * @return bool
     */
    public function isBOV()
    {
        return $this->_value === self::CodeType_BOV;
    }

    /**
     * @return bool
     */
    public function isBOB()
    {
        return $this->_value === self::CodeType_BOB;
    }

    /**
     * @return bool
     */
    public function isBAM()
    {
        return $this->_value === self::CodeType_BAM;
    }

    /**
     * @return bool
     */
    public function isBWP()
    {
        return $this->_value === self::CodeType_BWP;
    }

    /**
     * @return bool
     */
    public function isBRL()
    {
        return $this->_value === self::CodeType_BRL;
    }

    /**
     * @return bool
     */
    public function isBND()
    {
        return $this->_value === self::CodeType_BND;
    }

    /**
     * @return bool
     */
    public function isBGL()
    {
        return $this->_value === self::CodeType_BGL;
    }

    /**
     * @return bool
     */
    public function isBGN()
    {
        return $this->_value === self::CodeType_BGN;
    }

    /**
     * @return bool
     */
    public function isBIF()
    {
        return $this->_value === self::CodeType_BIF;
    }

    /**
     * @return bool
     */
    public function isKHR()
    {
        return $this->_value === self::CodeType_KHR;
    }

    /**
     * @return bool
     */
    public function isCAD()
    {
        return $this->_value === self::CodeType_CAD;
    }

    /**
     * @return bool
     */
    public function isCVE()
    {
        return $this->_value === self::CodeType_CVE;
    }

    /**
     * @return bool
     */
    public function isKYD()
    {
        return $this->_value === self::CodeType_KYD;
    }

    /**
     * @return bool
     */
    public function isXAF()
    {
        return $this->_value === self::CodeType_XAF;
    }

    /**
     * @return bool
     */
    public function isCLF()
    {
        return $this->_value === self::CodeType_CLF;
    }

    /**
     * @return bool
     */
    public function isCLP()
    {
        return $this->_value === self::CodeType_CLP;
    }

    /**
     * @return bool
     */
    public function isCNY()
    {
        return $this->_value === self::CodeType_CNY;
    }

    /**
     * @return bool
     */
    public function isCOP()
    {
        return $this->_value === self::CodeType_COP;
    }

    /**
     * @return bool
     */
    public function isKMF()
    {
        return $this->_value === self::CodeType_KMF;
    }

    /**
     * @return bool
     */
    public function isCDF()
    {
        return $this->_value === self::CodeType_CDF;
    }

    /**
     * @return bool
     */
    public function isCRC()
    {
        return $this->_value === self::CodeType_CRC;
    }

    /**
     * @return bool
     */
    public function isHRK()
    {
        return $this->_value === self::CodeType_HRK;
    }

    /**
     * @return bool
     */
    public function isCUP()
    {
        return $this->_value === self::CodeType_CUP;
    }

    /**
     * @return bool
     */
    public function isCYP()
    {
        return $this->_value === self::CodeType_CYP;
    }

    /**
     * @return bool
     */
    public function isCZK()
    {
        return $this->_value === self::CodeType_CZK;
    }

    /**
     * @return bool
     */
    public function isDKK()
    {
        return $this->_value === self::CodeType_DKK;
    }

    /**
     * @return bool
     */
    public function isDJF()
    {
        return $this->_value === self::CodeType_DJF;
    }

    /**
     * @return bool
     */
    public function isDOP()
    {
        return $this->_value === self::CodeType_DOP;
    }

    /**
     * @return bool
     */
    public function isTPE()
    {
        return $this->_value === self::CodeType_TPE;
    }

    /**
     * @return bool
     */
    public function isECV()
    {
        return $this->_value === self::CodeType_ECV;
    }

    /**
     * @return bool
     */
    public function isECS()
    {
        return $this->_value === self::CodeType_ECS;
    }

    /**
     * @return bool
     */
    public function isEGP()
    {
        return $this->_value === self::CodeType_EGP;
    }

    /**
     * @return bool
     */
    public function isSVC()
    {
        return $this->_value === self::CodeType_SVC;
    }

    /**
     * @return bool
     */
    public function isERN()
    {
        return $this->_value === self::CodeType_ERN;
    }

    /**
     * @return bool
     */
    public function isEEK()
    {
        return $this->_value === self::CodeType_EEK;
    }

    /**
     * @return bool
     */
    public function isETB()
    {
        return $this->_value === self::CodeType_ETB;
    }

    /**
     * @return bool
     */
    public function isFKP()
    {
        return $this->_value === self::CodeType_FKP;
    }

    /**
     * @return bool
     */
    public function isFJD()
    {
        return $this->_value === self::CodeType_FJD;
    }

    /**
     * @return bool
     */
    public function isGMD()
    {
        return $this->_value === self::CodeType_GMD;
    }

    /**
     * @return bool
     */
    public function isGEL()
    {
        return $this->_value === self::CodeType_GEL;
    }

    /**
     * @return bool
     */
    public function isGHC()
    {
        return $this->_value === self::CodeType_GHC;
    }

    /**
     * @return bool
     */
    public function isGIP()
    {
        return $this->_value === self::CodeType_GIP;
    }

    /**
     * @return bool
     */
    public function isGTQ()
    {
        return $this->_value === self::CodeType_GTQ;
    }

    /**
     * @return bool
     */
    public function isGNF()
    {
        return $this->_value === self::CodeType_GNF;
    }

    /**
     * @return bool
     */
    public function isGWP()
    {
        return $this->_value === self::CodeType_GWP;
    }

    /**
     * @return bool
     */
    public function isGYD()
    {
        return $this->_value === self::CodeType_GYD;
    }

    /**
     * @return bool
     */
    public function isHTG()
    {
        return $this->_value === self::CodeType_HTG;
    }

    /**
     * @return bool
     */
    public function isHNL()
    {
        return $this->_value === self::CodeType_HNL;
    }

    /**
     * @return bool
     */
    public function isHKD()
    {
        return $this->_value === self::CodeType_HKD;
    }

    /**
     * @return bool
     */
    public function isHUF()
    {
        return $this->_value === self::CodeType_HUF;
    }

    /**
     * @return bool
     */
    public function isISK()
    {
        return $this->_value === self::CodeType_ISK;
    }

    /**
     * @return bool
     */
    public function isIDR()
    {
        return $this->_value === self::CodeType_IDR;
    }

    /**
     * @return bool
     */
    public function isIRR()
    {
        return $this->_value === self::CodeType_IRR;
    }

    /**
     * @return bool
     */
    public function isIQD()
    {
        return $this->_value === self::CodeType_IQD;
    }

    /**
     * @return bool
     */
    public function isILS()
    {
        return $this->_value === self::CodeType_ILS;
    }

    /**
     * @return bool
     */
    public function isJMD()
    {
        return $this->_value === self::CodeType_JMD;
    }

    /**
     * @return bool
     */
    public function isJPY()
    {
        return $this->_value === self::CodeType_JPY;
    }

    /**
     * @return bool
     */
    public function isJOD()
    {
        return $this->_value === self::CodeType_JOD;
    }

    /**
     * @return bool
     */
    public function isKZT()
    {
        return $this->_value === self::CodeType_KZT;
    }

    /**
     * @return bool
     */
    public function isKES()
    {
        return $this->_value === self::CodeType_KES;
    }

    /**
     * @return bool
     */
    public function isAUD()
    {
        return $this->_value === self::CodeType_AUD;
    }

    /**
     * @return bool
     */
    public function isKPW()
    {
        return $this->_value === self::CodeType_KPW;
    }

    /**
     * @return bool
     */
    public function isKRW()
    {
        return $this->_value === self::CodeType_KRW;
    }

    /**
     * @return bool
     */
    public function isKWD()
    {
        return $this->_value === self::CodeType_KWD;
    }

    /**
     * @return bool
     */
    public function isKGS()
    {
        return $this->_value === self::CodeType_KGS;
    }

    /**
     * @return bool
     */
    public function isLAK()
    {
        return $this->_value === self::CodeType_LAK;
    }

    /**
     * @return bool
     */
    public function isLVL()
    {
        return $this->_value === self::CodeType_LVL;
    }

    /**
     * @return bool
     */
    public function isLBP()
    {
        return $this->_value === self::CodeType_LBP;
    }

    /**
     * @return bool
     */
    public function isLSL()
    {
        return $this->_value === self::CodeType_LSL;
    }

    /**
     * @return bool
     */
    public function isLRD()
    {
        return $this->_value === self::CodeType_LRD;
    }

    /**
     * @return bool
     */
    public function isLYD()
    {
        return $this->_value === self::CodeType_LYD;
    }

    /**
     * @return bool
     */
    public function isCHF()
    {
        return $this->_value === self::CodeType_CHF;
    }

    /**
     * @return bool
     */
    public function isLTL()
    {
        return $this->_value === self::CodeType_LTL;
    }

    /**
     * @return bool
     */
    public function isMOP()
    {
        return $this->_value === self::CodeType_MOP;
    }

    /**
     * @return bool
     */
    public function isMKD()
    {
        return $this->_value === self::CodeType_MKD;
    }

    /**
     * @return bool
     */
    public function isMGF()
    {
        return $this->_value === self::CodeType_MGF;
    }

    /**
     * @return bool
     */
    public function isMWK()
    {
        return $this->_value === self::CodeType_MWK;
    }

    /**
     * @return bool
     */
    public function isMYR()
    {
        return $this->_value === self::CodeType_MYR;
    }

    /**
     * @return bool
     */
    public function isMVR()
    {
        return $this->_value === self::CodeType_MVR;
    }

    /**
     * @return bool
     */
    public function isMTL()
    {
        return $this->_value === self::CodeType_MTL;
    }

    /**
     * @return bool
     */
    public function isEUR()
    {
        return $this->_value === self::CodeType_EUR;
    }

    /**
     * @return bool
     */
    public function isMRO()
    {
        return $this->_value === self::CodeType_MRO;
    }

    /**
     * @return bool
     */
    public function isMUR()
    {
        return $this->_value === self::CodeType_MUR;
    }

    /**
     * @return bool
     */
    public function isMXN()
    {
        return $this->_value === self::CodeType_MXN;
    }

    /**
     * @return bool
     */
    public function isMXV()
    {
        return $this->_value === self::CodeType_MXV;
    }

    /**
     * @return bool
     */
    public function isMDL()
    {
        return $this->_value === self::CodeType_MDL;
    }

    /**
     * @return bool
     */
    public function isMNT()
    {
        return $this->_value === self::CodeType_MNT;
    }

    /**
     * @return bool
     */
    public function isXCD()
    {
        return $this->_value === self::CodeType_XCD;
    }

    /**
     * @return bool
     */
    public function isMZM()
    {
        return $this->_value === self::CodeType_MZM;
    }

    /**
     * @return bool
     */
    public function isMMK()
    {
        return $this->_value === self::CodeType_MMK;
    }

    /**
     * @return bool
     */
    public function isZAR()
    {
        return $this->_value === self::CodeType_ZAR;
    }

    /**
     * @return bool
     */
    public function isNAD()
    {
        return $this->_value === self::CodeType_NAD;
    }

    /**
     * @return bool
     */
    public function isNPR()
    {
        return $this->_value === self::CodeType_NPR;
    }

    /**
     * @return bool
     */
    public function isANG()
    {
        return $this->_value === self::CodeType_ANG;
    }

    /**
     * @return bool
     */
    public function isXPF()
    {
        return $this->_value === self::CodeType_XPF;
    }

    /**
     * @return bool
     */
    public function isNZD()
    {
        return $this->_value === self::CodeType_NZD;
    }

    /**
     * @return bool
     */
    public function isNIO()
    {
        return $this->_value === self::CodeType_NIO;
    }

    /**
     * @return bool
     */
    public function isNGN()
    {
        return $this->_value === self::CodeType_NGN;
    }

    /**
     * @return bool
     */
    public function isNOK()
    {
        return $this->_value === self::CodeType_NOK;
    }

    /**
     * @return bool
     */
    public function isOMR()
    {
        return $this->_value === self::CodeType_OMR;
    }

    /**
     * @return bool
     */
    public function isPKR()
    {
        return $this->_value === self::CodeType_PKR;
    }

    /**
     * @return bool
     */
    public function isPAB()
    {
        return $this->_value === self::CodeType_PAB;
    }

    /**
     * @return bool
     */
    public function isPGK()
    {
        return $this->_value === self::CodeType_PGK;
    }

    /**
     * @return bool
     */
    public function isPYG()
    {
        return $this->_value === self::CodeType_PYG;
    }

    /**
     * @return bool
     */
    public function isPEN()
    {
        return $this->_value === self::CodeType_PEN;
    }

    /**
     * @return bool
     */
    public function isPHP()
    {
        return $this->_value === self::CodeType_PHP;
    }

    /**
     * @return bool
     */
    public function isPLN()
    {
        return $this->_value === self::CodeType_PLN;
    }

    /**
     * @return bool
     */
    public function isUSD()
    {
        return $this->_value === self::CodeType_USD;
    }

    /**
     * @return bool
     */
    public function isQAR()
    {
        return $this->_value === self::CodeType_QAR;
    }

    /**
     * @return bool
     */
    public function isROL()
    {
        return $this->_value === self::CodeType_ROL;
    }

    /**
     * @return bool
     */
    public function isRUB()
    {
        return $this->_value === self::CodeType_RUB;
    }

    /**
     * @return bool
     */
    public function isRUR()
    {
        return $this->_value === self::CodeType_RUR;
    }

    /**
     * @return bool
     */
    public function isRWF()
    {
        return $this->_value === self::CodeType_RWF;
    }

    /**
     * @return bool
     */
    public function isSHP()
    {
        return $this->_value === self::CodeType_SHP;
    }

    /**
     * @return bool
     */
    public function isWST()
    {
        return $this->_value === self::CodeType_WST;
    }

    /**
     * @return bool
     */
    public function isSTD()
    {
        return $this->_value === self::CodeType_STD;
    }

    /**
     * @return bool
     */
    public function isSAR()
    {
        return $this->_value === self::CodeType_SAR;
    }

    /**
     * @return bool
     */
    public function isSCR()
    {
        return $this->_value === self::CodeType_SCR;
    }

    /**
     * @return bool
     */
    public function isSLL()
    {
        return $this->_value === self::CodeType_SLL;
    }

    /**
     * @return bool
     */
    public function isSGD()
    {
        return $this->_value === self::CodeType_SGD;
    }

    /**
     * @return bool
     */
    public function isSKK()
    {
        return $this->_value === self::CodeType_SKK;
    }

    /**
     * @return bool
     */
    public function isSIT()
    {
        return $this->_value === self::CodeType_SIT;
    }

    /**
     * @return bool
     */
    public function isSBD()
    {
        return $this->_value === self::CodeType_SBD;
    }

    /**
     * @return bool
     */
    public function isSOS()
    {
        return $this->_value === self::CodeType_SOS;
    }

    /**
     * @return bool
     */
    public function isLKR()
    {
        return $this->_value === self::CodeType_LKR;
    }

    /**
     * @return bool
     */
    public function isSDD()
    {
        return $this->_value === self::CodeType_SDD;
    }

    /**
     * @return bool
     */
    public function isSRG()
    {
        return $this->_value === self::CodeType_SRG;
    }

    /**
     * @return bool
     */
    public function isSZL()
    {
        return $this->_value === self::CodeType_SZL;
    }

    /**
     * @return bool
     */
    public function isSEK()
    {
        return $this->_value === self::CodeType_SEK;
    }

    /**
     * @return bool
     */
    public function isSYP()
    {
        return $this->_value === self::CodeType_SYP;
    }

    /**
     * @return bool
     */
    public function isTWD()
    {
        return $this->_value === self::CodeType_TWD;
    }

    /**
     * @return bool
     */
    public function isTJS()
    {
        return $this->_value === self::CodeType_TJS;
    }

    /**
     * @return bool
     */
    public function isTZS()
    {
        return $this->_value === self::CodeType_TZS;
    }

    /**
     * @return bool
     */
    public function isTHB()
    {
        return $this->_value === self::CodeType_THB;
    }

    /**
     * @return bool
     */
    public function isXOF()
    {
        return $this->_value === self::CodeType_XOF;
    }

    /**
     * @return bool
     */
    public function isTOP()
    {
        return $this->_value === self::CodeType_TOP;
    }

    /**
     * @return bool
     */
    public function isTTD()
    {
        return $this->_value === self::CodeType_TTD;
    }

    /**
     * @return bool
     */
    public function isTND()
    {
        return $this->_value === self::CodeType_TND;
    }

    /**
     * @return bool
     */
    public function isTRL()
    {
        return $this->_value === self::CodeType_TRL;
    }

    /**
     * @return bool
     */
    public function isTMM()
    {
        return $this->_value === self::CodeType_TMM;
    }

    /**
     * @return bool
     */
    public function isUGX()
    {
        return $this->_value === self::CodeType_UGX;
    }

    /**
     * @return bool
     */
    public function isUAH()
    {
        return $this->_value === self::CodeType_UAH;
    }

    /**
     * @return bool
     */
    public function isAED()
    {
        return $this->_value === self::CodeType_AED;
    }

    /**
     * @return bool
     */
    public function isGBP()
    {
        return $this->_value === self::CodeType_GBP;
    }

    /**
     * @return bool
     */
    public function isUSS()
    {
        return $this->_value === self::CodeType_USS;
    }

    /**
     * @return bool
     */
    public function isUSN()
    {
        return $this->_value === self::CodeType_USN;
    }

    /**
     * @return bool
     */
    public function isUYU()
    {
        return $this->_value === self::CodeType_UYU;
    }

    /**
     * @return bool
     */
    public function isUZS()
    {
        return $this->_value === self::CodeType_UZS;
    }

    /**
     * @return bool
     */
    public function isVUV()
    {
        return $this->_value === self::CodeType_VUV;
    }

    /**
     * @return bool
     */
    public function isVEB()
    {
        return $this->_value === self::CodeType_VEB;
    }

    /**
     * @return bool
     */
    public function isVND()
    {
        return $this->_value === self::CodeType_VND;
    }

    /**
     * @return bool
     */
    public function isMAD()
    {
        return $this->_value === self::CodeType_MAD;
    }

    /**
     * @return bool
     */
    public function isYER()
    {
        return $this->_value === self::CodeType_YER;
    }

    /**
     * @return bool
     */
    public function isYUM()
    {
        return $this->_value === self::CodeType_YUM;
    }

    /**
     * @return bool
     */
    public function isZMK()
    {
        return $this->_value === self::CodeType_ZMK;
    }

    /**
     * @return bool
     */
    public function isZWD()
    {
        return $this->_value === self::CodeType_ZWD;
    }

    /**
     * @return bool
     */
    public function isATS()
    {
        return $this->_value === self::CodeType_ATS;
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

CurrencyCodeType::_register();
