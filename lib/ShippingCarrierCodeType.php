<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ShippingCarrierCodeType extends EbatNs_FacetType
{
	const CodeType_UPS = 'UPS';
	const CodeType_USPS = 'USPS';
	const CodeType_FedEx = 'FedEx';
	const CodeType_DeutschePost = 'DeutschePost';
	const CodeType_DHL = 'DHL';
	const CodeType_Hermes = 'Hermes';
	const CodeType_iLoxx = 'iLoxx';
	const CodeType_Other = 'Other';
	const CodeType_ColiposteDomestic = 'ColiposteDomestic';
	const CodeType_ColiposteInternational = 'ColiposteInternational';
	const CodeType_Chronopost = 'Chronopost';
	const CodeType_Correos = 'Correos';
	const CodeType_Seur = 'Seur';
	const CodeType_Nacex = 'Nacex';
	const CodeType_FourPX = 'FourPX';
	const CodeType_FourPXCHINA = 'FourPXCHINA';
	const CodeType_FourPXExpress = 'FourPXExpress';
	const CodeType_FourPXLTD = 'FourPXLTD';
	const CodeType_SevenLSP = 'SevenLSP';
	const CodeType_A1CourierServices = 'A1CourierServices';
	const CodeType_ABF = 'ABF';
	const CodeType_AeroPost = 'AeroPost';
	const CodeType_ALLIEDEXPRESS = 'ALLIEDEXPRESS';
	const CodeType_AMWST = 'AMWST';
	const CodeType_AnPost = 'AnPost';
	const CodeType_APC = 'APC';
	const CodeType_ARAMEX = 'ARAMEX';
	const CodeType_ARVATO = 'ARVATO';
	const CodeType_ASM = 'ASM';
	const CodeType_AustraliaPost = 'AustraliaPost';
	const CodeType_AustralianAirExpress = 'AustralianAirExpress';
	const CodeType_AVRT = 'AVRT';
	const CodeType_BPost = 'BPost';
	const CodeType_Bartolini = 'Bartolini';
	const CodeType_BELGIANPOST = 'BELGIANPOST';
	const CodeType_BKNS = 'BKNS';
	const CodeType_BluePackage = 'BluePackage';
	const CodeType_BusinessPost = 'BusinessPost';
	const CodeType_CanPar = 'CanPar';
	const CodeType_CENF = 'CENF';
	const CodeType_CEVA = 'CEVA';
	const CodeType_ChinaPost = 'ChinaPost';
	const CodeType_Chronoexpres = 'Chronoexpres';
	const CodeType_CHUKOU1 = 'CHUKOU1';
	const CodeType_ChunghwaPost = 'ChunghwaPost';
	const CodeType_CitiPost = 'CitiPost';
	const CodeType_CityLink = 'CityLink';
	const CodeType_ClickandQuick = 'ClickandQuick';
	const CodeType_CNWY = 'CNWY';
	const CodeType_Colissimo = 'Colissimo';
	const CodeType_CollectPlus = 'CollectPlus';
	const CodeType_CPC = 'CPC';
	const CodeType_DAIPost = 'DAIPost';
	const CodeType_DayandRoss = 'DayandRoss';
	const CodeType_DBSchenker = 'DBSchenker';
	const CodeType_DHLEXPRESS = 'DHLEXPRESS';
	const CodeType_DHLGlobalMail = 'DHLGlobalMail';
	const CodeType_DHLEKB = 'DHLEKB';
	const CodeType_DHLG = 'DHLG';
	const CodeType_DieSchweizerischePost = 'DieSchweizerischePost';
	const CodeType_DPD = 'DPD';
	const CodeType_DPXThailand = 'DPXThailand';
	const CodeType_Ducros = 'Ducros';
	const CodeType_EGO = 'EGO';
	const CodeType_EMF = 'EMF';
	const CodeType_Exapaq = 'Exapaq';
	const CodeType_Fastway = 'Fastway';
	const CodeType_FASTWAYCOURIERS = 'FASTWAYCOURIERS';
	const CodeType_FedExSmartPost = 'FedExSmartPost';
	const CodeType_FLYT = 'FLYT';
	const CodeType_FLYTExpress = 'FLYTExpress';
	const CodeType_FlytExpressUSDirectline = 'FlytExpressUSDirectline';
	const CodeType_FTFT = 'FTFT';
	const CodeType_FulfilExpressAccStation = 'FulfilExpressAccStation';
	const CodeType_FulfilExpresseForCity = 'FulfilExpresseForCity';
	const CodeType_FulfilExpressEverydaySource = 'FulfilExpressEverydaySource';
	const CodeType_FulfilExpressiTrimming = 'FulfilExpressiTrimming';
	const CodeType_GLS = 'GLS';
	const CodeType_HDUSA = 'HDUSA';
	const CodeType_HomeDeliveryNetwork = 'HomeDeliveryNetwork';
	const CodeType_HongKongPost = 'HongKongPost';
	const CodeType_HUNTEREXPRESS = 'HUNTEREXPRESS';
	const CodeType_IndiaPost = 'IndiaPost';
	const CodeType_IndonesiaPost = 'IndonesiaPost';
	const CodeType_Interlink = 'Interlink';
	const CodeType_InterPost = 'InterPost';
	const CodeType_IoInvio = 'IoInvio';
	const CodeType_Iparcel = 'Iparcel';
	const CodeType_IsraelPost = 'IsraelPost';
	const CodeType_JapanPost = 'JapanPost';
	const CodeType_KIALA = 'KIALA';
	const CodeType_KoreaPost = 'KoreaPost';
	const CodeType_LAPOSTE = 'LAPOSTE';
	const CodeType_Landmark = 'Landmark';
	const CodeType_LDSO = 'LDSO';
	const CodeType_LTL = 'LTL';
	const CodeType_MALAYSIAPOST = 'MALAYSIAPOST';
	const CodeType_MannaFreight = 'MannaFreight';
	const CodeType_Metapack = 'Metapack';
	const CodeType_MNGTurkey = 'MNGTurkey';
	const CodeType_MondialRelay = 'MondialRelay';
	const CodeType_MRW = 'MRW';
	const CodeType_MSI = 'MSI';
	const CodeType_NEMF = 'NEMF';
	const CodeType_ODFL = 'ODFL';
	const CodeType_OFFD = 'OFFD';
	const CodeType_ONTRACK = 'ONTRACK';
	const CodeType_OsterreichischePostAG = 'OsterreichischePostAG';
	const CodeType_OVNT = 'OVNT';
	const CodeType_ParcelPool = 'ParcelPool';
	const CodeType_Parcelforce = 'Parcelforce';
	const CodeType_Philpost = 'Philpost';
	const CodeType_Pilot = 'Pilot';
	const CodeType_PITD = 'PITD';
	const CodeType_PocztaPolska = 'PocztaPolska';
	const CodeType_Pocztex = 'Pocztex';
	const CodeType_POSTITALIANO = 'POSTITALIANO';
	const CodeType_PostNL = 'PostNL';
	const CodeType_PostNordNorway = 'PostNordNorway';
	const CodeType_PosteItaliane = 'PosteItaliane';
	const CodeType_Prestige = 'Prestige';
	const CodeType_Quantium = 'Quantium';
	const CodeType_RETL = 'RETL';
	const CodeType_RoyalMail = 'RoyalMail';
	const CodeType_RRUN = 'RRUN';
	const CodeType_SAIA = 'SAIA';
	const CodeType_SDA = 'SDA';
	const CodeType_SFC = 'SFC';
	const CodeType_SFCExpress = 'SFCExpress';
	const CodeType_SINGAPOREPOST = 'SINGAPOREPOST';
	const CodeType_Siodemka = 'Siodemka';
	const CodeType_SioliandFontana = 'SioliandFontana';
	const CodeType_SkynetMalaysia = 'SkynetMalaysia';
	const CodeType_SMARTSEND = 'SMARTSEND';
	const CodeType_Sogetras = 'Sogetras';
	const CodeType_Spediamo = 'Spediamo';
	const CodeType_SpeeDee = 'SpeeDee';
	const CodeType_StarTrack = 'StarTrack';
	const CodeType_SuntekExpressLTD = 'SuntekExpressLTD';
	const CodeType_SwissPost = 'SwissPost';
	const CodeType_TELE = 'TELE';
	const CodeType_TEMANDO = 'TEMANDO';
	const CodeType_THAILANDPOST = 'THAILANDPOST';
	const CodeType_TNT = 'TNT';
	const CodeType_TNTEXPRESS = 'TNTEXPRESS';
	const CodeType_TNTPost = 'TNTPost';
	const CodeType_Toll = 'Toll';
	const CodeType_TPG = 'TPG';
	const CodeType_TWW = 'TWW';
	const CodeType_UBI = 'UBI';
	const CodeType_UKMail = 'UKMail';
	const CodeType_UPSMailInnovations = 'UPSMailInnovations';
	const CodeType_UPSC = 'UPSC';
	const CodeType_USFG = 'USFG';
	const CodeType_USPSCeP = 'USPSCeP';
	const CodeType_USPSPMI = 'USPSPMI';
	const CodeType_VietnamPost = 'VietnamPost';
	const CodeType_VITR = 'VITR';
	const CodeType_WATKINS = 'WATKINS';
	const CodeType_Winit = 'Winit';
	const CodeType_Wise = 'Wise';
	const CodeType_WNdirect = 'WNdirect';
	const CodeType_WPX = 'WPX';
	const CodeType_YANWEN = 'YANWEN';
	const CodeType_Yodel = 'Yodel';
	const CodeType_YRC = 'YRC';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ShippingCarrierCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ShippingCarrierCodeType = new ShippingCarrierCodeType();
?>