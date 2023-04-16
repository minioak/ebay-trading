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
 * Identifies a shipping carrier used to ship an order, and the countries served by that carrier.
 * 
 * <span class="tablenote">
 * <strong>Note:</strong> Commonly used shipping carriers can also be found by calling
 * GeteBayDetails
 * with
 * DetailName
 * set to
 * ShippingCarrierDetails
 * and examining the returned <strong>ShippingCarrierDetails.ShippingCarrier</strong> field.
 * </span>
 **/
class ShippingCarrierCodeType extends EbatNs_EnumType
{
    const TAG = 'ShippingCarrierCodeType';
    const NAME = 'ShippingCarrierCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * United Parcel Service
     * 
     * In CompleteSale call requests, the value <code>UPS</code> also represents UPS Mail Innovations.
     * Available in US, IE, UK, FR, IT, DE, CH, ES, AT, CN, BE, PL, NL.
     **/
    const CodeType_UPS = 'UPS';

    /**
     * U.S. Postal Service
     * 
     * &nbsp;&nbsp;Available in US, CN, UK, DE.
     **/
    const CodeType_USPS = 'USPS';

    /**
     * FedEx
     * 
     * &nbsp;&nbsp;In CompleteSale call requests, the value <code>FedEx</code> also represents FedEx
     * SmartPost. Available in US, IE, UK, FR, IT, DE, CH, AU, ES, AT, CN, BE, PL, NL.
     **/
    const CodeType_FedEx = 'FedEx';

    /**
     * Deutsche Post
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_DeutschePost = 'DeutschePost';

    /**
     * DHL Express
     * 
     * &nbsp;&nbsp;Available in IE, US, ID, MX, MY, CA, UK, FR, IT, HK, TW, DE, CH, KR, AU, ES, AT, CN, SG,
     * BE, TH, NL.
     **/
    const CodeType_DHL = 'DHL';

    /**
     * Hermes Group
     * 
     * &nbsp;&nbsp;Available in US, AT, UK, DE.
     **/
    const CodeType_Hermes = 'Hermes';

    /**
     * iloxx eService
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_iLoxx = 'iLoxx';

    /**
     * Use this code for any carrier not listed here.
     **/
    const CodeType_Other = 'Other';

    /**
     * Coliposte Domestic
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_ColiposteDomestic = 'ColiposteDomestic';

    /**
     * Coliposte International
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_ColiposteInternational = 'ColiposteInternational';

    /**
     * Chronopost
     * 
     * &nbsp;&nbsp;Available in US, FR, UK, DE.
     **/
    const CodeType_Chronopost = 'Chronopost';

    /**
     * Correos
     * 
     * &nbsp;&nbsp;Available in ES, US, UK, DE.
     **/
    const CodeType_Correos = 'Correos';

    /**
     * Seur (reserved for future use).
     **/
    const CodeType_Seur = 'Seur';

    /**
     * Nacex
     * 
     * &nbsp;&nbsp;Available in ES, US, UK, DE.
     **/
    const CodeType_Nacex = 'Nacex';

    /**
     * 4PX
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_FourPX = 'FourPX';

    /**
     * 4PX China
     * 
     * &nbsp;&nbsp;Available in US, CN, UK.
     **/
    const CodeType_FourPXCHINA = 'FourPXCHINA';

    /**
     * 4PX Express
     * 
     * &nbsp;&nbsp;Available in UK, DE.
     **/
    const CodeType_FourPXExpress = 'FourPXExpress';

    /**
     * 4PX Express Co. Ltd
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_FourPXLTD = 'FourPXLTD';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_SevenLSP = 'SevenLSP';

    /**
     * A-1 Courier
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_A1CourierServices = 'A1CourierServices';

    /**
     * ABF Freight
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_ABF = 'ABF';

    /**
     * AeroPost
     * 
     * &nbsp;&nbsp;Available in JM, GT, CR, PA, TT, SV, CO, HN, CL, DO.
     **/
    const CodeType_AeroPost = 'AeroPost';

    /**
     * Allied Express
     * 
     * &nbsp;&nbsp;Available in AU.
     **/
    const CodeType_ALLIEDEXPRESS = 'ALLIEDEXPRESS';

    /**
     * AMWST
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_AMWST = 'AMWST';

    /**
     * An Post
     * 
     * &nbsp;&nbsp;Available in IE.
     **/
    const CodeType_AnPost = 'AnPost';

    /**
     * APC Postal Logistics
     * 
     * &nbsp;&nbsp;Available in UK.
     **/
    const CodeType_APC = 'APC';

    /**
     * Aramex
     * 
     * &nbsp;&nbsp;Available in US, BH, IL, AE, IN, UA, KW, SA, QA.
     **/
    const CodeType_ARAMEX = 'ARAMEX';

    /**
     * Arvato
     * 
     * &nbsp;&nbsp;Available in US, CA, UK, FR, IT, GR, DE, CH, AT, BE, NL, SI, LT, SK.
     **/
    const CodeType_ARVATO = 'ARVATO';

    /**
     * ASM
     * 
     * &nbsp;&nbsp;Available in ES.
     **/
    const CodeType_ASM = 'ASM';

    /**
     * Australia Post
     * 
     * &nbsp;&nbsp;Available in US, UK, DE, AU.
     **/
    const CodeType_AustraliaPost = 'AustraliaPost';

    /**
     * Australian Air Express
     * 
     * &nbsp;&nbsp;Available in AU.
     **/
    const CodeType_AustralianAirExpress = 'AustralianAirExpress';

    /**
     * Averitt Express
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_AVRT = 'AVRT';

    /**
     * bpost
     * 
     * &nbsp;&nbsp;Also coded as <code>BELGIANPOST</code>. Available in US, UK, DE, MO, BE.
     **/
    const CodeType_BPost = 'BPost';

    /**
     * BRT Bartolini
     * 
     * &nbsp;&nbsp;Available in IT.
     **/
    const CodeType_Bartolini = 'Bartolini';

    /**
     * Belgian Post Group
     * 
     * &nbsp;&nbsp;Also coded as <code>BPost</code>. Available in US, UK, DE MO, BE.
     **/
    const CodeType_BELGIANPOST = 'BELGIANPOST';

    /**
     * BKNS
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_BKNS = 'BKNS';

    /**
     * Blue Package Delivery
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_BluePackage = 'BluePackage';

    /**
     * BusinessPost
     * 
     * &nbsp;&nbsp;Available in UK.
     **/
    const CodeType_BusinessPost = 'BusinessPost';

    /**
     * Canpar Courier
     * 
     * &nbsp;&nbsp;Available in US, CA, IT, UK, DE, AU
     **/
    const CodeType_CanPar = 'CanPar';

    /**
     * Central Freight Lines
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_CENF = 'CENF';

    /**
     * CEVA Logistics
     * 
     * &nbsp;&nbsp;Available in US, IT.
     **/
    const CodeType_CEVA = 'CEVA';

    /**
     * China Post
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_ChinaPost = 'ChinaPost';

    /**
     * Chronoexpres
     * 
     * &nbsp;&nbsp;Available in ES.
     **/
    const CodeType_Chronoexpres = 'Chronoexpres';

    /**
     * Chukou1
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_CHUKOU1 = 'CHUKOU1';

    /**
     * Chunghwa Post
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_ChunghwaPost = 'ChunghwaPost';

    /**
     * CitiPost
     * 
     * &nbsp;&nbsp;Available in US, IE, CA, UK, FR, IT, HK, DE, AU, ES, CN, BE, UZ, PL, NL.
     **/
    const CodeType_CitiPost = 'CitiPost';

    /**
     * Citylink
     * 
     * &nbsp;&nbsp;Available in IE.
     **/
    const CodeType_CityLink = 'CityLink';

    /**
     * Click & Quick
     * 
     * &nbsp;&nbsp;Available in IT.
     **/
    const CodeType_ClickandQuick = 'ClickandQuick';

    /**
     * XPO Logistics (formerly Con-way Freight)
     * 
     * &nbsp;&nbsp;Con-way Freight is now part of XPO Logistics. Available in US.
     **/
    const CodeType_CNWY = 'CNWY';

    /**
     * Colissimo
     * 
     * &nbsp;&nbsp;Available in FR.
     **/
    const CodeType_Colissimo = 'Colissimo';

    /**
     * CollectPlus
     * 
     * &nbsp;&nbsp;Available in UK.
     **/
    const CodeType_CollectPlus = 'CollectPlus';

    /**
     * CPC Logistics
     * 
     * &nbsp;&nbsp;Available in US, CA, UK, DE.
     **/
    const CodeType_CPC = 'CPC';

    /**
     * DAI Post
     * 
     * &nbsp;&nbsp;Available in UK, AU.
     **/
    const CodeType_DAIPost = 'DAIPost';

    /**
     * Day & Ross
     * 
     * &nbsp;&nbsp;Available in US, CA, UK, AU.
     **/
    const CodeType_DayandRoss = 'DayandRoss';

    /**
     * DB Schenker
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_DBSchenker = 'DBSchenker';

    /**
     * DHL Express
     * 
     * &nbsp;&nbsp;Available in IT, DE.
     **/
    const CodeType_DHLEXPRESS = 'DHLEXPRESS';

    /**
     * DHL Global Mail
     * 
     * &nbsp;&nbsp;Formerly coded as <code>DHLG</code>. Available in US, UK, DE.
     **/
    const CodeType_DHLGlobalMail = 'DHLGlobalMail';

    /**
     * DHL EKB
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_DHLEKB = 'DHLEKB';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Use <code>DHLGlobalMail</code> instead.
     **/
    const CodeType_DHLG = 'DHLG';

    /**
     * Die Schweizerische Post
     * 
     * &nbsp;&nbsp;Available in CH.
     **/
    const CodeType_DieSchweizerischePost = 'DieSchweizerischePost';

    /**
     * DPD (Dynamic Parcel Distribution)
     * 
     * &nbsp;&nbsp;Available in IE, BG, AT, UK, HR, BE, HU, PL, CZ, DE, NL, CH.
     **/
    const CodeType_DPD = 'DPD';

    /**
     * DPX Thailand
     * 
     * &nbsp;&nbsp;Available in US, TH.
     **/
    const CodeType_DPXThailand = 'DPXThailand';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_Ducros = 'Ducros';

    /**
     * E-go
     * 
     * &nbsp;&nbsp;Available in AU.
     **/
    const CodeType_EGO = 'EGO';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_EMF = 'EMF';

    /**
     * DPD France (formerly Exapaq)
     * 
     * &nbsp;&nbsp;Exapaq is now part of DPD France. Available in FR.
     **/
    const CodeType_Exapaq = 'Exapaq';

    /**
     * Fastway
     * 
     * &nbsp;&nbsp;Available in IE.
     **/
    const CodeType_Fastway = 'Fastway';

    /**
     * Fastway Couriers
     * 
     * &nbsp;&nbsp;Available in AU.
     **/
    const CodeType_FASTWAYCOURIERS = 'FASTWAYCOURIERS';

    /**
     * FedEx SmartPost
     * 
     * &nbsp;&nbsp;In CompleteSale call requests only, specify FedEx SmartPost with the value
     * <code>FedEx</code>. Available in US, UK, DE.
     **/
    const CodeType_FedExSmartPost = 'FedExSmartPost';

    /**
     * Flyt
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_FLYT = 'FLYT';

    /**
     * Flyt Express
     * 
     * &nbsp;&nbsp;Available in UK, DE.
     **/
    const CodeType_FLYTExpress = 'FLYTExpress';

    /**
     * Flyt Express US Direct line
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_FlytExpressUSDirectline = 'FlytExpressUSDirectline';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_FTFT = 'FTFT';

    /**
     * FulfilExpress-AccStation
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_FulfilExpressAccStation = 'FulfilExpressAccStation';

    /**
     * FulfilExpress-eForCity
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_FulfilExpresseForCity = 'FulfilExpresseForCity';

    /**
     * FulfilExpress-EverydaySource
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_FulfilExpressEverydaySource = 'FulfilExpressEverydaySource';

    /**
     * FulfilExpress-iTrimming
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_FulfilExpressiTrimming = 'FulfilExpressiTrimming';

    /**
     * GLS (General Logistics Systems)
     * 
     * &nbsp;&nbsp;Available in IE, ES, AT, IT, FR, BE, DE, NL.
     **/
    const CodeType_GLS = 'GLS';

    /**
     * MXD Group (formerly Home Direct USA)
     * 
     * &nbsp;&nbsp;Home Direct USA is now part of MXD Group. Available in US.
     **/
    const CodeType_HDUSA = 'HDUSA';

    /**
     * n/a
     * 
     * Use <code>Yodel</code> instead.
     **/
    const CodeType_HomeDeliveryNetwork = 'HomeDeliveryNetwork';

    /**
     * Hong Kong Post
     * 
     * &nbsp;&nbsp;Available in US, UK, DE, AU.
     **/
    const CodeType_HongKongPost = 'HongKongPost';

    /**
     * Hunter Express
     * 
     * &nbsp;&nbsp;Available in AU.
     **/
    const CodeType_HUNTEREXPRESS = 'HUNTEREXPRESS';

    /**
     * India Post
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_IndiaPost = 'IndiaPost';

    /**
     * Indonesia Post
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_IndonesiaPost = 'IndonesiaPost';

    /**
     * Interlink Express
     * 
     * &nbsp;&nbsp;Available in UK.
     **/
    const CodeType_Interlink = 'Interlink';

    /**
     * InterPost
     * 
     * &nbsp;&nbsp;Available in IE, US, CA, UK, FR, IT, HK, DE, RO, AU, ES, AT, CN, CY, BE, PL, NL.
     **/
    const CodeType_InterPost = 'InterPost';

    /**
     * IoInvio
     * 
     * &nbsp;&nbsp;Available in IT.
     **/
    const CodeType_IoInvio = 'IoInvio';

    /**
     * UPS i-parcel
     * 
     * &nbsp;&nbsp;Available in US, MX, MY, SG, HK, ZA, TR, CH, JP, BR.
     **/
    const CodeType_Iparcel = 'Iparcel';

    /**
     * Israel Post
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_IsraelPost = 'IsraelPost';

    /**
     * Japan Post
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_JapanPost = 'JapanPost';

    /**
     * Kiala (UPS Access Point)
     * 
     * &nbsp;&nbsp;Available in ES, US, FR, UK, BE, DE, NL.
     **/
    const CodeType_KIALA = 'KIALA';

    /**
     * Korea Post
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_KoreaPost = 'KoreaPost';

    /**
     * La Poste
     * 
     * &nbsp;&nbsp;Available in US, FR, UK, DE.
     **/
    const CodeType_LAPOSTE = 'LAPOSTE';

    /**
     * Landmark Global
     * 
     * &nbsp;&nbsp;Available in US, NZ, NO.
     **/
    const CodeType_Landmark = 'Landmark';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_LDSO = 'LDSO';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_LTL = 'LTL';

    /**
     * Malaysia Post
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_MALAYSIAPOST = 'MALAYSIAPOST';

    /**
     * Manna Distribution Services
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_MannaFreight = 'MannaFreight';

    /**
     * Metapack
     * 
     * &nbsp;&nbsp;Available in UK.
     **/
    const CodeType_Metapack = 'Metapack';

    /**
     * MNG Kargo
     * 
     * &nbsp;&nbsp;Available in US, UK, TR.
     **/
    const CodeType_MNGTurkey = 'MNGTurkey';

    /**
     * Mondial Relay
     * 
     * &nbsp;&nbsp;Available in FR.
     **/
    const CodeType_MondialRelay = 'MondialRelay';

    /**
     * MRW
     * 
     * &nbsp;&nbsp;Available in ES.
     **/
    const CodeType_MRW = 'MRW';

    /**
     * MSI Transportation
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_MSI = 'MSI';

    /**
     * New England Motor Freight
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_NEMF = 'NEMF';

    /**
     * Old Dominion Freight Line
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_ODFL = 'ODFL';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_OFFD = 'OFFD';

    /**
     * OnTrac Shipping
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_ONTRACK = 'ONTRACK';

    /**
     * Osterreichische Post
     * 
     * &nbsp;&nbsp;Available in AT.
     **/
    const CodeType_OsterreichischePostAG = 'OsterreichischePostAG';

    /**
     * UPS Freight (formerly Overnite)
     * 
     * &nbsp;&nbsp;Overnite is now part of UPS Freight. Available in US.
     **/
    const CodeType_OVNT = 'OVNT';

    /**
     * International Bridge Domestic delivery
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_ParcelPool = 'ParcelPool';

    /**
     * Parcelforce
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_Parcelforce = 'Parcelforce';

    /**
     * PHLPost (Philippine Postal Corporation)
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_Philpost = 'Philpost';

    /**
     * Pilot Freight Services
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_Pilot = 'Pilot';

    /**
     * PITT OHIO
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_PITD = 'PITD';

    /**
     * Poczta Polska
     * 
     * &nbsp;&nbsp;Available in PL.
     **/
    const CodeType_PocztaPolska = 'PocztaPolska';

    /**
     * Pocztex
     * 
     * &nbsp;&nbsp;Available in PL.
     **/
    const CodeType_Pocztex = 'Pocztex';

    /**
     * Post Italiano
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_POSTITALIANO = 'POSTITALIANO';

    /**
     * PostNL
     * 
     * &nbsp;&nbsp;Available in NL.
     **/
    const CodeType_PostNL = 'PostNL';

    /**
     * PostNord
     * 
     * &nbsp;&nbsp;Available in UK, NO.
     **/
    const CodeType_PostNordNorway = 'PostNordNorway';

    /**
     * Poste Italiane
     * 
     * &nbsp;&nbsp;Available in IT.
     **/
    const CodeType_PosteItaliane = 'PosteItaliane';

    /**
     * LaserShip (formerly Prestige Expedite)
     * 
     * &nbsp;&nbsp;Prestige Expedite is now part of LaserShip. Available in US.
     **/
    const CodeType_Prestige = 'Prestige';

    /**
     * Quantium Solutions
     * 
     * &nbsp;&nbsp;Available in US, UK, DE, AU.
     **/
    const CodeType_Quantium = 'Quantium';

    /**
     * Reddaway
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_RETL = 'RETL';

    /**
     * Royal Mail
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_RoyalMail = 'RoyalMail';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_RRUN = 'RRUN';

    /**
     * Saia LTL Freight
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_SAIA = 'SAIA';

    /**
     * SDA Express Courier
     * 
     * &nbsp;&nbsp;Available in IT.
     **/
    const CodeType_SDA = 'SDA';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_SFC = 'SFC';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_SFCExpress = 'SFCExpress';

    /**
     * Singapore Post
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_SINGAPOREPOST = 'SINGAPOREPOST';

    /**
     * Siodemka (DPD Poland)
     * 
     * &nbsp;&nbsp;Available in PL.
     **/
    const CodeType_Siodemka = 'Siodemka';

    /**
     * Sioli & Fontana
     * 
     * &nbsp;&nbsp;Available in US, CA, IT.
     **/
    const CodeType_SioliandFontana = 'SioliandFontana';

    /**
     * Skynet (Malaysia)
     * 
     * &nbsp;&nbsp;Available in US, MY.
     **/
    const CodeType_SkynetMalaysia = 'SkynetMalaysia';

    /**
     * Smart Send Courier Service
     * 
     * &nbsp;&nbsp;Available in AU.
     **/
    const CodeType_SMARTSEND = 'SMARTSEND';

    /**
     * SGT Corriere Espresso
     * 
     * &nbsp;&nbsp;Available in IT.
     **/
    const CodeType_Sogetras = 'Sogetras';

    /**
     * Spediamo
     * 
     * &nbsp;&nbsp;Available in IT.
     **/
    const CodeType_Spediamo = 'Spediamo';

    /**
     * Spee-Dee Delivery Service
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_SpeeDee = 'SpeeDee';

    /**
     * StarTrack
     * 
     * &nbsp;&nbsp;Available in AU.
     **/
    const CodeType_StarTrack = 'StarTrack';

    /**
     * Suntek Express LTD
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_SuntekExpressLTD = 'SuntekExpressLTD';

    /**
     * Swiss Post
     * 
     * &nbsp;&nbsp;Available in US, UK, CH.
     **/
    const CodeType_SwissPost = 'SwissPost';

    /**
     * TELE
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_TELE = 'TELE';

    /**
     * Temando (shipping broker)
     * 
     * &nbsp;&nbsp;Available in AU.
     **/
    const CodeType_TEMANDO = 'TEMANDO';

    /**
     * Thailand Post
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_THAILANDPOST = 'THAILANDPOST';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_TNT = 'TNT';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_TNTEXPRESS = 'TNTEXPRESS';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_TNTPost = 'TNTPost';

    /**
     * Toll (Japan Post)
     * 
     * &nbsp;&nbsp;Available in AU.
     **/
    const CodeType_Toll = 'Toll';

    /**
     * TPG Logistics
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_TPG = 'TPG';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_TWW = 'TWW';

    /**
     * UBI Smart Parcel
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_UBI = 'UBI';

    /**
     * UK Mail
     * 
     * &nbsp;&nbsp;Available in UK.
     **/
    const CodeType_UKMail = 'UKMail';

    /**
     * UPS Mail Innovations
     * 
     * &nbsp;&nbsp;In CompleteSale call requests only, specify UPS Mail Innovations with the value
     * <code>UPS</code>. Available in US, UK, DE.
     **/
    const CodeType_UPSMailInnovations = 'UPSMailInnovations';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_UPSC = 'UPSC';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_USFG = 'USFG';

    /**
     * USPS Commercial ePacket
     * 
     * &nbsp;&nbsp;Available in US, CA.
     **/
    const CodeType_USPSCeP = 'USPSCeP';

    /**
     * USPS Priority Mail International
     * 
     * &nbsp;&nbsp;Available in US, CA.
     **/
    const CodeType_USPSPMI = 'USPSPMI';

    /**
     * Vietnam Post
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_VietnamPost = 'VietnamPost';

    /**
     * Vitran Express
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_VITR = 'VITR';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_WATKINS = 'WATKINS';

    /**
     * WIN.IT America
     * 
     * &nbsp;&nbsp;Available in US, UK, DE, AU.
     **/
    const CodeType_Winit = 'Winit';

    /**
     * n/a
     * 
     * &nbsp;&nbsp;Not currently supported.
     **/
    const CodeType_Wise = 'Wise';

    /**
     * wnDirect
     * 
     * &nbsp;&nbsp;Available in US, CA, IT, FR, UK, RU, AU.
     **/
    const CodeType_WNdirect = 'WNdirect';

    /**
     * WPX Delivery Solutions
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_WPX = 'WPX';

    /**
     * YANWEN Express
     * 
     * &nbsp;&nbsp;Available in US, UK, DE.
     **/
    const CodeType_YANWEN = 'YANWEN';

    /**
     * Yodel
     * 
     * &nbsp;&nbsp;Available in UK.
     **/
    const CodeType_Yodel = 'Yodel';

    /**
     * YRC Freight
     * 
     * &nbsp;&nbsp;Available in US.
     **/
    const CodeType_YRC = 'YRC';

    /**
     * Reserved for internal or future use
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
     * @return ShippingCarrierCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ShippingCarrierCodeType|null $value
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
    public function isUPS()
    {
        return $this->_value === self::CodeType_UPS;
    }

    /**
     * @return bool
     */
    public function isUSPS()
    {
        return $this->_value === self::CodeType_USPS;
    }

    /**
     * @return bool
     */
    public function isFedEx()
    {
        return $this->_value === self::CodeType_FedEx;
    }

    /**
     * @return bool
     */
    public function isDeutschePost()
    {
        return $this->_value === self::CodeType_DeutschePost;
    }

    /**
     * @return bool
     */
    public function isDHL()
    {
        return $this->_value === self::CodeType_DHL;
    }

    /**
     * @return bool
     */
    public function isHermes()
    {
        return $this->_value === self::CodeType_Hermes;
    }

    /**
     * @return bool
     */
    public function isILoxx()
    {
        return $this->_value === self::CodeType_iLoxx;
    }

    /**
     * @return bool
     */
    public function isOther()
    {
        return $this->_value === self::CodeType_Other;
    }

    /**
     * @return bool
     */
    public function isColiposteDomestic()
    {
        return $this->_value === self::CodeType_ColiposteDomestic;
    }

    /**
     * @return bool
     */
    public function isColiposteInternational()
    {
        return $this->_value === self::CodeType_ColiposteInternational;
    }

    /**
     * @return bool
     */
    public function isChronopost()
    {
        return $this->_value === self::CodeType_Chronopost;
    }

    /**
     * @return bool
     */
    public function isCorreos()
    {
        return $this->_value === self::CodeType_Correos;
    }

    /**
     * @return bool
     */
    public function isSeur()
    {
        return $this->_value === self::CodeType_Seur;
    }

    /**
     * @return bool
     */
    public function isNacex()
    {
        return $this->_value === self::CodeType_Nacex;
    }

    /**
     * @return bool
     */
    public function isFourPX()
    {
        return $this->_value === self::CodeType_FourPX;
    }

    /**
     * @return bool
     */
    public function isFourPXCHINA()
    {
        return $this->_value === self::CodeType_FourPXCHINA;
    }

    /**
     * @return bool
     */
    public function isFourPXExpress()
    {
        return $this->_value === self::CodeType_FourPXExpress;
    }

    /**
     * @return bool
     */
    public function isFourPXLTD()
    {
        return $this->_value === self::CodeType_FourPXLTD;
    }

    /**
     * @return bool
     */
    public function isSevenLSP()
    {
        return $this->_value === self::CodeType_SevenLSP;
    }

    /**
     * @return bool
     */
    public function isA1CourierServices()
    {
        return $this->_value === self::CodeType_A1CourierServices;
    }

    /**
     * @return bool
     */
    public function isABF()
    {
        return $this->_value === self::CodeType_ABF;
    }

    /**
     * @return bool
     */
    public function isAeroPost()
    {
        return $this->_value === self::CodeType_AeroPost;
    }

    /**
     * @return bool
     */
    public function isALLIEDEXPRESS()
    {
        return $this->_value === self::CodeType_ALLIEDEXPRESS;
    }

    /**
     * @return bool
     */
    public function isAMWST()
    {
        return $this->_value === self::CodeType_AMWST;
    }

    /**
     * @return bool
     */
    public function isAnPost()
    {
        return $this->_value === self::CodeType_AnPost;
    }

    /**
     * @return bool
     */
    public function isAPC()
    {
        return $this->_value === self::CodeType_APC;
    }

    /**
     * @return bool
     */
    public function isARAMEX()
    {
        return $this->_value === self::CodeType_ARAMEX;
    }

    /**
     * @return bool
     */
    public function isARVATO()
    {
        return $this->_value === self::CodeType_ARVATO;
    }

    /**
     * @return bool
     */
    public function isASM()
    {
        return $this->_value === self::CodeType_ASM;
    }

    /**
     * @return bool
     */
    public function isAustraliaPost()
    {
        return $this->_value === self::CodeType_AustraliaPost;
    }

    /**
     * @return bool
     */
    public function isAustralianAirExpress()
    {
        return $this->_value === self::CodeType_AustralianAirExpress;
    }

    /**
     * @return bool
     */
    public function isAVRT()
    {
        return $this->_value === self::CodeType_AVRT;
    }

    /**
     * @return bool
     */
    public function isBPost()
    {
        return $this->_value === self::CodeType_BPost;
    }

    /**
     * @return bool
     */
    public function isBartolini()
    {
        return $this->_value === self::CodeType_Bartolini;
    }

    /**
     * @return bool
     */
    public function isBELGIANPOST()
    {
        return $this->_value === self::CodeType_BELGIANPOST;
    }

    /**
     * @return bool
     */
    public function isBKNS()
    {
        return $this->_value === self::CodeType_BKNS;
    }

    /**
     * @return bool
     */
    public function isBluePackage()
    {
        return $this->_value === self::CodeType_BluePackage;
    }

    /**
     * @return bool
     */
    public function isBusinessPost()
    {
        return $this->_value === self::CodeType_BusinessPost;
    }

    /**
     * @return bool
     */
    public function isCanPar()
    {
        return $this->_value === self::CodeType_CanPar;
    }

    /**
     * @return bool
     */
    public function isCENF()
    {
        return $this->_value === self::CodeType_CENF;
    }

    /**
     * @return bool
     */
    public function isCEVA()
    {
        return $this->_value === self::CodeType_CEVA;
    }

    /**
     * @return bool
     */
    public function isChinaPost()
    {
        return $this->_value === self::CodeType_ChinaPost;
    }

    /**
     * @return bool
     */
    public function isChronoexpres()
    {
        return $this->_value === self::CodeType_Chronoexpres;
    }

    /**
     * @return bool
     */
    public function isCHUKOU1()
    {
        return $this->_value === self::CodeType_CHUKOU1;
    }

    /**
     * @return bool
     */
    public function isChunghwaPost()
    {
        return $this->_value === self::CodeType_ChunghwaPost;
    }

    /**
     * @return bool
     */
    public function isCitiPost()
    {
        return $this->_value === self::CodeType_CitiPost;
    }

    /**
     * @return bool
     */
    public function isCityLink()
    {
        return $this->_value === self::CodeType_CityLink;
    }

    /**
     * @return bool
     */
    public function isClickandQuick()
    {
        return $this->_value === self::CodeType_ClickandQuick;
    }

    /**
     * @return bool
     */
    public function isCNWY()
    {
        return $this->_value === self::CodeType_CNWY;
    }

    /**
     * @return bool
     */
    public function isColissimo()
    {
        return $this->_value === self::CodeType_Colissimo;
    }

    /**
     * @return bool
     */
    public function isCollectPlus()
    {
        return $this->_value === self::CodeType_CollectPlus;
    }

    /**
     * @return bool
     */
    public function isCPC()
    {
        return $this->_value === self::CodeType_CPC;
    }

    /**
     * @return bool
     */
    public function isDAIPost()
    {
        return $this->_value === self::CodeType_DAIPost;
    }

    /**
     * @return bool
     */
    public function isDayandRoss()
    {
        return $this->_value === self::CodeType_DayandRoss;
    }

    /**
     * @return bool
     */
    public function isDBSchenker()
    {
        return $this->_value === self::CodeType_DBSchenker;
    }

    /**
     * @return bool
     */
    public function isDHLEXPRESS()
    {
        return $this->_value === self::CodeType_DHLEXPRESS;
    }

    /**
     * @return bool
     */
    public function isDHLGlobalMail()
    {
        return $this->_value === self::CodeType_DHLGlobalMail;
    }

    /**
     * @return bool
     */
    public function isDHLEKB()
    {
        return $this->_value === self::CodeType_DHLEKB;
    }

    /**
     * @return bool
     */
    public function isDHLG()
    {
        return $this->_value === self::CodeType_DHLG;
    }

    /**
     * @return bool
     */
    public function isDieSchweizerischePost()
    {
        return $this->_value === self::CodeType_DieSchweizerischePost;
    }

    /**
     * @return bool
     */
    public function isDPD()
    {
        return $this->_value === self::CodeType_DPD;
    }

    /**
     * @return bool
     */
    public function isDPXThailand()
    {
        return $this->_value === self::CodeType_DPXThailand;
    }

    /**
     * @return bool
     */
    public function isDucros()
    {
        return $this->_value === self::CodeType_Ducros;
    }

    /**
     * @return bool
     */
    public function isEGO()
    {
        return $this->_value === self::CodeType_EGO;
    }

    /**
     * @return bool
     */
    public function isEMF()
    {
        return $this->_value === self::CodeType_EMF;
    }

    /**
     * @return bool
     */
    public function isExapaq()
    {
        return $this->_value === self::CodeType_Exapaq;
    }

    /**
     * @return bool
     */
    public function isFastway()
    {
        return $this->_value === self::CodeType_Fastway;
    }

    /**
     * @return bool
     */
    public function isFASTWAYCOURIERS()
    {
        return $this->_value === self::CodeType_FASTWAYCOURIERS;
    }

    /**
     * @return bool
     */
    public function isFedExSmartPost()
    {
        return $this->_value === self::CodeType_FedExSmartPost;
    }

    /**
     * @return bool
     */
    public function isFLYT()
    {
        return $this->_value === self::CodeType_FLYT;
    }

    /**
     * @return bool
     */
    public function isFLYTExpress()
    {
        return $this->_value === self::CodeType_FLYTExpress;
    }

    /**
     * @return bool
     */
    public function isFlytExpressUSDirectline()
    {
        return $this->_value === self::CodeType_FlytExpressUSDirectline;
    }

    /**
     * @return bool
     */
    public function isFTFT()
    {
        return $this->_value === self::CodeType_FTFT;
    }

    /**
     * @return bool
     */
    public function isFulfilExpressAccStation()
    {
        return $this->_value === self::CodeType_FulfilExpressAccStation;
    }

    /**
     * @return bool
     */
    public function isFulfilExpresseForCity()
    {
        return $this->_value === self::CodeType_FulfilExpresseForCity;
    }

    /**
     * @return bool
     */
    public function isFulfilExpressEverydaySource()
    {
        return $this->_value === self::CodeType_FulfilExpressEverydaySource;
    }

    /**
     * @return bool
     */
    public function isFulfilExpressiTrimming()
    {
        return $this->_value === self::CodeType_FulfilExpressiTrimming;
    }

    /**
     * @return bool
     */
    public function isGLS()
    {
        return $this->_value === self::CodeType_GLS;
    }

    /**
     * @return bool
     */
    public function isHDUSA()
    {
        return $this->_value === self::CodeType_HDUSA;
    }

    /**
     * @return bool
     */
    public function isHomeDeliveryNetwork()
    {
        return $this->_value === self::CodeType_HomeDeliveryNetwork;
    }

    /**
     * @return bool
     */
    public function isHongKongPost()
    {
        return $this->_value === self::CodeType_HongKongPost;
    }

    /**
     * @return bool
     */
    public function isHUNTEREXPRESS()
    {
        return $this->_value === self::CodeType_HUNTEREXPRESS;
    }

    /**
     * @return bool
     */
    public function isIndiaPost()
    {
        return $this->_value === self::CodeType_IndiaPost;
    }

    /**
     * @return bool
     */
    public function isIndonesiaPost()
    {
        return $this->_value === self::CodeType_IndonesiaPost;
    }

    /**
     * @return bool
     */
    public function isInterlink()
    {
        return $this->_value === self::CodeType_Interlink;
    }

    /**
     * @return bool
     */
    public function isInterPost()
    {
        return $this->_value === self::CodeType_InterPost;
    }

    /**
     * @return bool
     */
    public function isIoInvio()
    {
        return $this->_value === self::CodeType_IoInvio;
    }

    /**
     * @return bool
     */
    public function isIparcel()
    {
        return $this->_value === self::CodeType_Iparcel;
    }

    /**
     * @return bool
     */
    public function isIsraelPost()
    {
        return $this->_value === self::CodeType_IsraelPost;
    }

    /**
     * @return bool
     */
    public function isJapanPost()
    {
        return $this->_value === self::CodeType_JapanPost;
    }

    /**
     * @return bool
     */
    public function isKIALA()
    {
        return $this->_value === self::CodeType_KIALA;
    }

    /**
     * @return bool
     */
    public function isKoreaPost()
    {
        return $this->_value === self::CodeType_KoreaPost;
    }

    /**
     * @return bool
     */
    public function isLAPOSTE()
    {
        return $this->_value === self::CodeType_LAPOSTE;
    }

    /**
     * @return bool
     */
    public function isLandmark()
    {
        return $this->_value === self::CodeType_Landmark;
    }

    /**
     * @return bool
     */
    public function isLDSO()
    {
        return $this->_value === self::CodeType_LDSO;
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
    public function isMALAYSIAPOST()
    {
        return $this->_value === self::CodeType_MALAYSIAPOST;
    }

    /**
     * @return bool
     */
    public function isMannaFreight()
    {
        return $this->_value === self::CodeType_MannaFreight;
    }

    /**
     * @return bool
     */
    public function isMetapack()
    {
        return $this->_value === self::CodeType_Metapack;
    }

    /**
     * @return bool
     */
    public function isMNGTurkey()
    {
        return $this->_value === self::CodeType_MNGTurkey;
    }

    /**
     * @return bool
     */
    public function isMondialRelay()
    {
        return $this->_value === self::CodeType_MondialRelay;
    }

    /**
     * @return bool
     */
    public function isMRW()
    {
        return $this->_value === self::CodeType_MRW;
    }

    /**
     * @return bool
     */
    public function isMSI()
    {
        return $this->_value === self::CodeType_MSI;
    }

    /**
     * @return bool
     */
    public function isNEMF()
    {
        return $this->_value === self::CodeType_NEMF;
    }

    /**
     * @return bool
     */
    public function isODFL()
    {
        return $this->_value === self::CodeType_ODFL;
    }

    /**
     * @return bool
     */
    public function isOFFD()
    {
        return $this->_value === self::CodeType_OFFD;
    }

    /**
     * @return bool
     */
    public function isONTRACK()
    {
        return $this->_value === self::CodeType_ONTRACK;
    }

    /**
     * @return bool
     */
    public function isOsterreichischePostAG()
    {
        return $this->_value === self::CodeType_OsterreichischePostAG;
    }

    /**
     * @return bool
     */
    public function isOVNT()
    {
        return $this->_value === self::CodeType_OVNT;
    }

    /**
     * @return bool
     */
    public function isParcelPool()
    {
        return $this->_value === self::CodeType_ParcelPool;
    }

    /**
     * @return bool
     */
    public function isParcelforce()
    {
        return $this->_value === self::CodeType_Parcelforce;
    }

    /**
     * @return bool
     */
    public function isPhilpost()
    {
        return $this->_value === self::CodeType_Philpost;
    }

    /**
     * @return bool
     */
    public function isPilot()
    {
        return $this->_value === self::CodeType_Pilot;
    }

    /**
     * @return bool
     */
    public function isPITD()
    {
        return $this->_value === self::CodeType_PITD;
    }

    /**
     * @return bool
     */
    public function isPocztaPolska()
    {
        return $this->_value === self::CodeType_PocztaPolska;
    }

    /**
     * @return bool
     */
    public function isPocztex()
    {
        return $this->_value === self::CodeType_Pocztex;
    }

    /**
     * @return bool
     */
    public function isPOSTITALIANO()
    {
        return $this->_value === self::CodeType_POSTITALIANO;
    }

    /**
     * @return bool
     */
    public function isPostNL()
    {
        return $this->_value === self::CodeType_PostNL;
    }

    /**
     * @return bool
     */
    public function isPostNordNorway()
    {
        return $this->_value === self::CodeType_PostNordNorway;
    }

    /**
     * @return bool
     */
    public function isPosteItaliane()
    {
        return $this->_value === self::CodeType_PosteItaliane;
    }

    /**
     * @return bool
     */
    public function isPrestige()
    {
        return $this->_value === self::CodeType_Prestige;
    }

    /**
     * @return bool
     */
    public function isQuantium()
    {
        return $this->_value === self::CodeType_Quantium;
    }

    /**
     * @return bool
     */
    public function isRETL()
    {
        return $this->_value === self::CodeType_RETL;
    }

    /**
     * @return bool
     */
    public function isRoyalMail()
    {
        return $this->_value === self::CodeType_RoyalMail;
    }

    /**
     * @return bool
     */
    public function isRRUN()
    {
        return $this->_value === self::CodeType_RRUN;
    }

    /**
     * @return bool
     */
    public function isSAIA()
    {
        return $this->_value === self::CodeType_SAIA;
    }

    /**
     * @return bool
     */
    public function isSDA()
    {
        return $this->_value === self::CodeType_SDA;
    }

    /**
     * @return bool
     */
    public function isSFC()
    {
        return $this->_value === self::CodeType_SFC;
    }

    /**
     * @return bool
     */
    public function isSFCExpress()
    {
        return $this->_value === self::CodeType_SFCExpress;
    }

    /**
     * @return bool
     */
    public function isSINGAPOREPOST()
    {
        return $this->_value === self::CodeType_SINGAPOREPOST;
    }

    /**
     * @return bool
     */
    public function isSiodemka()
    {
        return $this->_value === self::CodeType_Siodemka;
    }

    /**
     * @return bool
     */
    public function isSioliandFontana()
    {
        return $this->_value === self::CodeType_SioliandFontana;
    }

    /**
     * @return bool
     */
    public function isSkynetMalaysia()
    {
        return $this->_value === self::CodeType_SkynetMalaysia;
    }

    /**
     * @return bool
     */
    public function isSMARTSEND()
    {
        return $this->_value === self::CodeType_SMARTSEND;
    }

    /**
     * @return bool
     */
    public function isSogetras()
    {
        return $this->_value === self::CodeType_Sogetras;
    }

    /**
     * @return bool
     */
    public function isSpediamo()
    {
        return $this->_value === self::CodeType_Spediamo;
    }

    /**
     * @return bool
     */
    public function isSpeeDee()
    {
        return $this->_value === self::CodeType_SpeeDee;
    }

    /**
     * @return bool
     */
    public function isStarTrack()
    {
        return $this->_value === self::CodeType_StarTrack;
    }

    /**
     * @return bool
     */
    public function isSuntekExpressLTD()
    {
        return $this->_value === self::CodeType_SuntekExpressLTD;
    }

    /**
     * @return bool
     */
    public function isSwissPost()
    {
        return $this->_value === self::CodeType_SwissPost;
    }

    /**
     * @return bool
     */
    public function isTELE()
    {
        return $this->_value === self::CodeType_TELE;
    }

    /**
     * @return bool
     */
    public function isTEMANDO()
    {
        return $this->_value === self::CodeType_TEMANDO;
    }

    /**
     * @return bool
     */
    public function isTHAILANDPOST()
    {
        return $this->_value === self::CodeType_THAILANDPOST;
    }

    /**
     * @return bool
     */
    public function isTNT()
    {
        return $this->_value === self::CodeType_TNT;
    }

    /**
     * @return bool
     */
    public function isTNTEXPRESS()
    {
        return $this->_value === self::CodeType_TNTEXPRESS;
    }

    /**
     * @return bool
     */
    public function isTNTPost()
    {
        return $this->_value === self::CodeType_TNTPost;
    }

    /**
     * @return bool
     */
    public function isToll()
    {
        return $this->_value === self::CodeType_Toll;
    }

    /**
     * @return bool
     */
    public function isTPG()
    {
        return $this->_value === self::CodeType_TPG;
    }

    /**
     * @return bool
     */
    public function isTWW()
    {
        return $this->_value === self::CodeType_TWW;
    }

    /**
     * @return bool
     */
    public function isUBI()
    {
        return $this->_value === self::CodeType_UBI;
    }

    /**
     * @return bool
     */
    public function isUKMail()
    {
        return $this->_value === self::CodeType_UKMail;
    }

    /**
     * @return bool
     */
    public function isUPSMailInnovations()
    {
        return $this->_value === self::CodeType_UPSMailInnovations;
    }

    /**
     * @return bool
     */
    public function isUPSC()
    {
        return $this->_value === self::CodeType_UPSC;
    }

    /**
     * @return bool
     */
    public function isUSFG()
    {
        return $this->_value === self::CodeType_USFG;
    }

    /**
     * @return bool
     */
    public function isUSPSCeP()
    {
        return $this->_value === self::CodeType_USPSCeP;
    }

    /**
     * @return bool
     */
    public function isUSPSPMI()
    {
        return $this->_value === self::CodeType_USPSPMI;
    }

    /**
     * @return bool
     */
    public function isVietnamPost()
    {
        return $this->_value === self::CodeType_VietnamPost;
    }

    /**
     * @return bool
     */
    public function isVITR()
    {
        return $this->_value === self::CodeType_VITR;
    }

    /**
     * @return bool
     */
    public function isWATKINS()
    {
        return $this->_value === self::CodeType_WATKINS;
    }

    /**
     * @return bool
     */
    public function isWinit()
    {
        return $this->_value === self::CodeType_Winit;
    }

    /**
     * @return bool
     */
    public function isWise()
    {
        return $this->_value === self::CodeType_Wise;
    }

    /**
     * @return bool
     */
    public function isWNdirect()
    {
        return $this->_value === self::CodeType_WNdirect;
    }

    /**
     * @return bool
     */
    public function isWPX()
    {
        return $this->_value === self::CodeType_WPX;
    }

    /**
     * @return bool
     */
    public function isYANWEN()
    {
        return $this->_value === self::CodeType_YANWEN;
    }

    /**
     * @return bool
     */
    public function isYodel()
    {
        return $this->_value === self::CodeType_Yodel;
    }

    /**
     * @return bool
     */
    public function isYRC()
    {
        return $this->_value === self::CodeType_YRC;
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

ShippingCarrierCodeType::_register();
