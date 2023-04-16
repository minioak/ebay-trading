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
 * A shipping service used to ship an item. Applications should not depend on the completeness of
 * <strong>ShippingServiceCodeType</strong>. Instead, applications should call GeteBayDetails, with a
 * <strong>DetailName</strong> value of <code>ShippingServiceDetails</code>, to return the complete list of shipping
 * services. To check for the shipping services available for a specific site, specify the site ID in the header.
 * 
 * <span class="tablenote">
 * <strong>Note:</strong> It is possible that some of the returned shipping services can no longer be used in
 * the AddItem family of calls. To distinguish between the valid and invalid shipping services, look for the
 * <strong>ValidForSellingFlow</strong> flag in the <strong>ShippingServiceDetails</strong> node. If this flag is
 * not returned for a specific shipping service, that shipping service can no longer be used in the AddItem family
 * of calls.
 * </span>
 **/
class ShippingServiceCodeType extends EbatNs_EnumType
{
    const TAG = 'ShippingServiceCodeType';
    const NAME = 'ShippingServiceCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * UPS Ground
     **/
    const CodeType_UPSGround = 'UPSGround';

    /**
     * UPS 3rd Day
     **/
    const CodeType_UPS3rdDay = 'UPS3rdDay';

    /**
     * UPS 2nd Day
     **/
    const CodeType_UPS2ndDay = 'UPS2ndDay';

    /**
     * UPS Next Day
     **/
    const CodeType_UPSNextDay = 'UPSNextDay';

    /**
     * USPS Priority
     **/
    const CodeType_USPSPriority = 'USPSPriority';

    /**
     * USPS Parcel Select Non-Presort
     **/
    const CodeType_USPSParcel = 'USPSParcel';

    /**
     * USPS Standard Post
     **/
    const CodeType_USPSStandardPost = 'USPSStandardPost';

    /**
     * USPS Media
     **/
    const CodeType_USPSMedia = 'USPSMedia';

    /**
     * USPS First Class
     **/
    const CodeType_USPSFirstClass = 'USPSFirstClass';

    /**
     * Standard shipping method
     **/
    const CodeType_ShippingMethodStandard = 'ShippingMethodStandard';

    /**
     * Reserved for internal or future use
     **/
    const CodeType_ShippingMethodExpress = 'ShippingMethodExpress';

    /**
     * USPS Priority Mail Express
     **/
    const CodeType_USPSExpressMail = 'USPSExpressMail';

    /**
     * UPS Next Day Air
     **/
    const CodeType_UPSNextDayAir = 'UPSNextDayAir';

    /**
     * UPS Next Day Air
     **/
    const CodeType_UPS2DayAirAM = 'UPS2DayAirAM';

    /**
     * USPS Priority Mail Express Flat Rate Envelope
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     * The seller must also specify a package size of Package/Thick Envelope when
     * using a calculated shipping service.
     **/
    const CodeType_USPSExpressMailFlatRateEnvelope = 'USPSExpressMailFlatRateEnvelope';

    /**
     * USPS Priority Mail Express Padded Flat Rate Envelope
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     * The seller must also specify a package size of Package/Thick Envelope when
     * using a calculated shipping service.
     **/
    const CodeType_USPSExpressMailPaddedFlatRateEnvelope = 'USPSExpressMailPaddedFlatRateEnvelope';

    /**
     * USPS Priority Mail Flat Rate Envelope
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     * The seller must also specify a package size of Package/Thick Envelope when
     * using a calculated shipping service.
     **/
    const CodeType_USPSPriorityMailFlatRateEnvelope = 'USPSPriorityMailFlatRateEnvelope';

    /**
     * USPS Priority Mail Small Flat Rate Box
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     * The seller must also specify a package size of Package/Thick Envelope when
     * using a calculated shipping service.
     **/
    const CodeType_USPSPriorityMailSmallFlatRateBox = 'USPSPriorityMailSmallFlatRateBox';

    /**
     * USPS Priority Mail Flat Rate Box
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     * The seller must also specify a package size of Package/Thick Envelope when
     * using a calculated shipping service.
     **/
    const CodeType_USPSPriorityMailFlatRateBox = 'USPSPriorityMailFlatRateBox';

    /**
     * USPS Priority Mail Large Flat Rate Box
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     **/
    const CodeType_USPSPriorityMailLargeFlatRateBox = 'USPSPriorityMailLargeFlatRateBox';

    /**
     * USPS Priority Mail Padded Flat Rate Envelope
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     **/
    const CodeType_USPSPriorityMailPaddedFlatRateEnvelope = 'USPSPriorityMailPaddedFlatRateEnvelope';

    /**
     * USPS Priority Mail Legal Flat Rate Envelope
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     **/
    const CodeType_USPSPriorityMailLegalFlatRateEnvelope = 'USPSPriorityMailLegalFlatRateEnvelope';

    /**
     * USPS Priority Mail Express Legal Flat Rate Envelope
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     **/
    const CodeType_USPSExpressMailLegalFlatRateEnvelope = 'USPSExpressMailLegalFlatRateEnvelope';

    /**
     * USPS Priority Mail Regional Box A
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     **/
    const CodeType_USPSPriorityMailRegionalBoxA = 'USPSPriorityMailRegionalBoxA';

    /**
     * USPS Priority Mail Regional Box B
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     **/
    const CodeType_USPSPriorityMailRegionalBoxB = 'USPSPriorityMailRegionalBoxB';

    /**
     * USPS Priority Mail Regional Box C
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     **/
    const CodeType_USPSPriorityMailRegionalBoxC = 'USPSPriorityMailRegionalBoxC';

    /**
     * USPS Priority Mail Express Flat Rate Box
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     **/
    const CodeType_USPSExpressMailFlatRateBox = 'USPSExpressMailFlatRateBox';

    /**
     * Other (see description)
     **/
    const CodeType_Other = 'Other';

    /**
     * Local Delivery/Pickup
     **/
    const CodeType_LocalDelivery = 'LocalDelivery';

    /**
     * Not Selected
     **/
    const CodeType_NotSelected = 'NotSelected';

    /**
     * International Not Selected
     **/
    const CodeType_InternationalNotSelected = 'InternationalNotSelected';

    /**
     * Standard International Flat Rate Shipping
     **/
    const CodeType_StandardInternational = 'StandardInternational';

    /**
     * Expedited International Flat Rate Shipping
     **/
    const CodeType_ExpeditedInternational = 'ExpeditedInternational';

    /**
     * USPS Global Express Mail
     **/
    const CodeType_USPSGlobalExpress = 'USPSGlobalExpress';

    /**
     * USPS Global Priority Mail
     **/
    const CodeType_USPSGlobalPriority = 'USPSGlobalPriority';

    /**
     * USPS Economy Parcel Post
     **/
    const CodeType_USPSEconomyParcel = 'USPSEconomyParcel';

    /**
     * USPS Economy Letter Post
     **/
    const CodeType_USPSEconomyLetter = 'USPSEconomyLetter';

    /**
     * USPS Airmail Letter Post
     **/
    const CodeType_USPSAirmailLetter = 'USPSAirmailLetter';

    /**
     * USPS Airmail Parcel Post
     **/
    const CodeType_USPSAirmailParcel = 'USPSAirmailParcel';

    /**
     * UPS Worldwide Express Plus
     **/
    const CodeType_UPSWorldWideExpressPlus = 'UPSWorldWideExpressPlus';

    /**
     * UPS Worldwide Express
     **/
    const CodeType_UPSWorldWideExpress = 'UPSWorldWideExpress';

    /**
     * UPS Worldwide Expedited
     **/
    const CodeType_UPSWorldWideExpedited = 'UPSWorldWideExpedited';

    /**
     * UPS Worldwide Saver
     **/
    const CodeType_UPSWorldwideSaver = 'UPSWorldwideSaver';

    /**
     * UPS Standard To Canada
     **/
    const CodeType_UPSStandardToCanada = 'UPSStandardToCanada';

    /**
     * USPS Priority Mail Express International Flat Rate Envelope
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     * The seller must also specify a package size of Package/Thick Envelope when
     * using a calculated shipping service.
     **/
    const CodeType_USPSExpressMailInternationalFlatRateEnvelope = 'USPSExpressMailInternationalFlatRateEnvelope';

    /**
     * USPS Priority Mail Express International Padded Flat Rate Envelope
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     * The seller must also specify a package size of Package/Thick Envelope when
     * using a calculated shipping service.
     **/
    const CodeType_USPSExpressMailInternationalPaddedFlatRateEnvelope = 'USPSExpressMailInternationalPaddedFlatRateEnvelope';

    /**
     * USPS Priority Mail International Flat Rate Envelope
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     * The seller must also specify a package size of Package/Thick Envelope when
     * using a calculated shipping service.
     **/
    const CodeType_USPSPriorityMailInternationalFlatRateEnvelope = 'USPSPriorityMailInternationalFlatRateEnvelope';

    /**
     * USPS Priority Mail International Small Flat Rate Box
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     * The seller must also specify a package size of Package/Thick Envelope when
     * using a calculated shipping service.
     **/
    const CodeType_USPSPriorityMailInternationalSmallFlatRateBox = 'USPSPriorityMailInternationalSmallFlatRateBox';

    /**
     * USPS Priority Mail International Flat Rate Box
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     * The seller must also specify a package size of Package/Thick Envelope when
     * using a calculated shipping service.
     **/
    const CodeType_USPSPriorityMailInternationalFlatRateBox = 'USPSPriorityMailInternationalFlatRateBox';

    /**
     * USPS Priority Mail International Large Flat Rate Box
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     **/
    const CodeType_USPSPriorityMailInternationalLargeFlatRateBox = 'USPSPriorityMailInternationalLargeFlatRateBox';

    /**
     * USPS Priority Mail International Padded Flat Rate Envelope
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     **/
    const CodeType_USPSPriorityMailInternationalPaddedFlatRateEnvelope = 'USPSPriorityMailInternationalPaddedFlatRateEnvelope';

    /**
     * USPS Priority Mail International Legal Flat Rate Envelope
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     **/
    const CodeType_USPSPriorityMailInternationalLegalFlatRateEnvelope = 'USPSPriorityMailInternationalLegalFlatRateEnvelope';

    /**
     * USPS Priority Mail Express International Legal Flat Rate Envelope
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     **/
    const CodeType_USPSExpressMailInternationalLegalFlatRateEnvelope = 'USPSExpressMailInternationalLegalFlatRateEnvelope';

    /**
     * USPS Priority Mail Express International Flat Rate Box
     * To use this service, a seller must specify the package weight so that eBay
     * can validate the weight against the maximum weight limit for the service.
     **/
    const CodeType_USPSExpressMailInternationalFlatRateBox = 'USPSExpressMailInternationalFlatRateBox';

    /**
     * Other International Shipping (see description)
     **/
    const CodeType_OtherInternational = 'OtherInternational';

    /**
     * Standardversand (unversichert)
     **/
    const CodeType_AT_StandardDispatch = 'AT_StandardDispatch';

    /**
     * Versicherter Versand
     **/
    const CodeType_AT_InsuredDispatch = 'AT_InsuredDispatch';

    /**
     * Einschreiben (Versand inkl. Einschreibengebuhr)
     **/
    const CodeType_AT_Writing = 'AT_Writing';

    /**
     * Nachnahme (Versand inkl. Nachnahmegebuhr)
     **/
    const CodeType_AT_COD = 'AT_COD';

    /**
     * Express- oder Kurierversand
     **/
    const CodeType_AT_ExpressOrCourier = 'AT_ExpressOrCourier';

    /**
     * Versicherter Express- oder Kurierversand
     **/
    const CodeType_AT_InsuredExpressOrCourier = 'AT_InsuredExpressOrCourier';

    /**
     * Sonder-/Speditionsversand (z.B. Mobel, KFZ)
     **/
    const CodeType_AT_SpecialDispatch = 'AT_SpecialDispatch';

    /**
     * Versicherter Sonder-/Speditionsversand (z.B. Mobel, KFZ)
     **/
    const CodeType_AT_InsuredSpecialDispatch = 'AT_InsuredSpecialDispatch';

    /**
     * Sonstige (Siehe Artikelbeschreibung)
     **/
    const CodeType_AT_Sonstige = 'AT_Sonstige';

    /**
     * Unversicherter Versand International
     **/
    const CodeType_AT_UnversicherterVersandInternational = 'AT_UnversicherterVersandInternational';

    /**
     * Versicherter Versand International
     **/
    const CodeType_AT_VersicherterVersandInternational = 'AT_VersicherterVersandInternational';

    /**
     * Sonstiger Versand International
     **/
    const CodeType_AT_SonstigerVersandInternational = 'AT_SonstigerVersandInternational';

    /**
     * Unversicherter Express Versand International
     **/
    const CodeType_AT_UnversicherterExpressVersandInternational = 'AT_UnversicherterExpressVersandInternational';

    /**
     * Versicherter Express Versand International
     **/
    const CodeType_AT_VersicherterExpressVersandInternational = 'AT_VersicherterExpressVersandInternational';

    /**
     * Sparversand aus dem Ausland
     **/
    const CodeType_AT_EconomyDeliveryFromAbroad = 'AT_EconomyDeliveryFromAbroad';

    /**
     * Standardversand aus dem Ausland
     **/
    const CodeType_AT_StandardDeliveryFromAbroad = 'AT_StandardDeliveryFromAbroad';

    /**
     * Expressversand aus dem Ausland
     **/
    const CodeType_AT_ExpressDeliveryFromAbroad = 'AT_ExpressDeliveryFromAbroad';

    /**
     * Versand mit Nachverfolgung aus dem Ausland
     **/
    const CodeType_AT_TrackedDeliveryFromAbroad = 'AT_TrackedDeliveryFromAbroad';

    /**
     * Regular
     **/
    const CodeType_AU_Regular = 'AU_Regular';

    /**
     * Express
     **/
    const CodeType_AU_Express = 'AU_Express';

    /**
     * Registered
     **/
    const CodeType_AU_Registered = 'AU_Registered';

    /**
     * Courier
     **/
    const CodeType_AU_Courier = 'AU_Courier';

    /**
     * Other
     **/
    const CodeType_AU_Other = 'AU_Other';

    /**
     * EMS International Courier - Parcels
     **/
    const CodeType_AU_EMSInternationalCourierParcels = 'AU_EMSInternationalCourierParcels';

    /**
     * EMS International Courier - Documents
     **/
    const CodeType_AU_EMSInternationalCourierDocuments = 'AU_EMSInternationalCourierDocuments';

    /**
     * Express Post International - Documents
     **/
    const CodeType_AU_ExpressPostInternationalDocuments = 'AU_ExpressPostInternationalDocuments';

    /**
     * Air Mail
     **/
    const CodeType_AU_AirMailInternational = 'AU_AirMailInternational';

    /**
     * Economy Air
     **/
    const CodeType_AU_EconomyAirInternational = 'AU_EconomyAirInternational';

    /**
     * Sea Mail
     **/
    const CodeType_AU_SeaMailInternational = 'AU_SeaMailInternational';

    /**
     * Standard International Flat Rate Postage
     **/
    const CodeType_AU_StandardInternational = 'AU_StandardInternational';

    /**
     * Expedited international flat rate postage
     **/
    const CodeType_AU_ExpeditedInternational = 'AU_ExpeditedInternational';

    /**
     * Other international postage
     **/
    const CodeType_AU_OtherInternational = 'AU_OtherInternational';

    /**
     * Australia Post Registered Post International Padded Bag 1 kg
     **/
    const CodeType_AU_AusPostRegisteredPostInternationalPaddedBag1kg = 'AU_AusPostRegisteredPostInternationalPaddedBag1kg';

    /**
     * Australia Post Registered Post International Padded Bag 500 g
     **/
    const CodeType_AU_AusPostRegisteredPostInternationalPaddedBag500g = 'AU_AusPostRegisteredPostInternationalPaddedBag500g';

    /**
     * Australia Post Registered Post International Parcel
     **/
    const CodeType_AU_AusPostRegisteredPostInternationalParcel = 'AU_AusPostRegisteredPostInternationalParcel';

    /**
     * Expedited delivery from outside Australia
     **/
    const CodeType_AU_ExpeditedDeliveryFromOutsideAU = 'AU_ExpeditedDeliveryFromOutsideAU';

    /**
     * Economy delivery from outside Australia
     **/
    const CodeType_AU_EconomyDeliveryFromOutsideAU = 'AU_EconomyDeliveryFromOutsideAU';

    /**
     * Standard Delivery From Outside AU
     **/
    const CodeType_AU_StandardDeliveryFromOutsideAU = 'AU_StandardDeliveryFromOutsideAU';

    /**
     * Australian Air Express Metro 15 kg
     **/
    const CodeType_AU_AustralianAirExpressMetro15kg = 'AU_AustralianAirExpressMetro15kg';

    /**
     * Australian Air Express Flat Rate 5 kg
     **/
    const CodeType_AU_AustralianAirExpressFlatRate5kg = 'AU_AustralianAirExpressFlatRate5kg';

    /**
     * Australian Air Express Flat Rate 3 kg
     **/
    const CodeType_AU_AustralianAirExpressFlatRate3kg = 'AU_AustralianAirExpressFlatRate3kg';

    /**
     * Australian Air Express Flat Rate 1 kg
     **/
    const CodeType_AU_AustralianAirExpressFlatRate1kg = 'AU_AustralianAirExpressFlatRate1kg';

    /**
     * Express delivery (1-3 business days) in Australia
     **/
    const CodeType_AU_ExpressDelivery = 'AU_ExpressDelivery';

    /**
     * Standard delivery (1-6 business days) in Australia
     **/
    const CodeType_AU_StandardDelivery = 'AU_StandardDelivery';

    /**
     * eBay/Australian Post 3 kg Flat Rate Satchel
     **/
    const CodeType_AU_eBayAusPost3kgFlatRateSatchel = 'AU_eBayAusPost3kgFlatRateSatchel';

    /**
     * eBay/Australian Post 500 g Flat Rate Satchel
     **/
    const CodeType_AU_eBayAusPost500gFlatRateSatchel = 'AU_eBayAusPost500gFlatRateSatchel';

    /**
     * Freight delivery in Australia. Used for heavy and bulky items.
     **/
    const CodeType_AU_Freight = 'AU_Freight';

    /**
     * Livraison standard a partir de l'etranger
     **/
    const CodeType_BEFR_StandardDelivery = 'BEFR_StandardDelivery';

    /**
     * Livraison express
     **/
    const CodeType_BEFR_PriorityDelivery = 'BEFR_PriorityDelivery';

    /**
     * Colis
     **/
    const CodeType_BEFR_ParcelPost = 'BEFR_ParcelPost';

    /**
     * Courrier en recommande
     **/
    const CodeType_BEFR_RegisteredMail = 'BEFR_RegisteredMail';

    /**
     * Autre service de livraison
     **/
    const CodeType_BEFR_Other = 'BEFR_Other';

    /**
     * De Post
     **/
    const CodeType_BEFR_DePostInternational = 'BEFR_DePostInternational';

    /**
     * UPS
     **/
    const CodeType_BEFR_UPSInternational = 'BEFR_UPSInternational';

    /**
     * FedEx
     **/
    const CodeType_BEFR_FedExInternational = 'BEFR_FedExInternational';

    /**
     * DHL
     **/
    const CodeType_BEFR_DHLInternational = 'BEFR_DHLInternational';

    /**
     * TPG Post/TNT (Netherlands)
     **/
    const CodeType_BEFR_TPGPostTNTInternational = 'BEFR_TPGPostTNTInternational';

    /**
     * Frais de livraison internationale fixes
     **/
    const CodeType_BEFR_StandardInternational = 'BEFR_StandardInternational';

    /**
     * Frais fixes pour livraison internationale express
     **/
    const CodeType_BEFR_ExpeditedInternational = 'BEFR_ExpeditedInternational';

    /**
     * Autres livraisons internationales (voir description)
     **/
    const CodeType_BEFR_OtherInternational = 'BEFR_OtherInternational';

    /**
     * La Poste (France)
     **/
    const CodeType_BEFR_LaPosteInternational = 'BEFR_LaPosteInternational';

    /**
     * La Poste - livraison standard (1 a 2 jours ouvrables)
     **/
    const CodeType_BEFR_LaPosteStandardShipping = 'BEFR_LaPosteStandardShipping';

    /**
     * La Poste - envoi recommande (1 jour ouvrable)
     **/
    const CodeType_BEFR_LaPosteCertifiedShipping = 'BEFR_LaPosteCertifiedShipping';

    /**
     * La Poste - Taxipost LLS (2 jours ouvrables)
     **/
    const CodeType_BEFR_LaPosteTaxipostLLS = 'BEFR_LaPosteTaxipostLLS';

    /**
     * La Poste - Taxipost 24h (1 jour ouvrable)
     **/
    const CodeType_BEFR_LaPosteTaxipost24h = 'BEFR_LaPosteTaxipost24h';

    /**
     * Autres livraisons
     **/
    const CodeType_BEFR_LaPosteTaxipostSecur = 'BEFR_LaPosteTaxipostSecur';

    /**
     * La Poste - livraison standard
     **/
    const CodeType_BEFR_PostInternationalStandard = 'BEFR_PostInternationalStandard';

    /**
     * La Poste - envoi recommande
     **/
    const CodeType_BEFR_PostInternationalRegistered = 'BEFR_PostInternationalRegistered';

    /**
     * TNT
     **/
    const CodeType_BEFR_TNTInternational = 'BEFR_TNTInternational';

    /**
     * Livraison economique a partir de l'etranger
     **/
    const CodeType_BEFR_EconomyDeliveryFromAbroad = 'BEFR_EconomyDeliveryFromAbroad';

    /**
     * Livraison standard a partir de l'etranger
     **/
    const CodeType_BEFR_StandardDeliveryFromAbroad = 'BEFR_StandardDeliveryFromAbroad';

    /**
     * Livraison express a partir de l'etranger
     **/
    const CodeType_BEFR_ExpressDeliveryFromAbroad = 'BEFR_ExpressDeliveryFromAbroad';

    /**
     * Livraison a partir de l'etranger avec suivi de commande
     **/
    const CodeType_BEFR_TrackedDeliveryFromAbroad = 'BEFR_TrackedDeliveryFromAbroad';

    /**
     * Standard Delivery
     **/
    const CodeType_BENL_StandardDelivery = 'BENL_StandardDelivery';

    /**
     * Priority Delivery
     **/
    const CodeType_BENL_PriorityDelivery = 'BENL_PriorityDelivery';

    /**
     * Parcel Post
     **/
    const CodeType_BENL_ParcelPost = 'BENL_ParcelPost';

    /**
     * Registered Mail
     **/
    const CodeType_BENL_RegisteredMail = 'BENL_RegisteredMail';

    /**
     * Other Shipping Service
     **/
    const CodeType_BENL_Other = 'BENL_Other';

    /**
     * De Post
     **/
    const CodeType_BENL_DePostInternational = 'BENL_DePostInternational';

    /**
     * UPS
     **/
    const CodeType_BENL_UPSInternational = 'BENL_UPSInternational';

    /**
     * FedEx
     **/
    const CodeType_BENL_FedExInternational = 'BENL_FedExInternational';

    /**
     * DHL
     **/
    const CodeType_BENL_DHLInternational = 'BENL_DHLInternational';

    /**
     * TPG Post/TNT (Netherlands)
     **/
    const CodeType_BENL_TPGPostTNTInternational = 'BENL_TPGPostTNTInternational';

    /**
     * Standard International
     **/
    const CodeType_BENL_StandardInternational = 'BENL_StandardInternational';

    /**
     * Expedited International
     **/
    const CodeType_BENL_ExpeditedInternational = 'BENL_ExpeditedInternational';

    /**
     * Other International Shipping Services
     **/
    const CodeType_BENL_OtherInternational = 'BENL_OtherInternational';

    /**
     * La Poste (France)
     **/
    const CodeType_BENL_LaPosteInternational = 'BENL_LaPosteInternational';

    /**
     * De Post - standaardverzending (1 tot 2 werkdagen)
     **/
    const CodeType_BENL_DePostStandardShipping = 'BENL_DePostStandardShipping';

    /**
     * De Post - aangetekende zending (1 werkdag)
     **/
    const CodeType_BENL_DePostCertifiedShipping = 'BENL_DePostCertifiedShipping';

    /**
     * De Post - Taxipost LLS (2 werkdagen)
     **/
    const CodeType_BENL_DePostTaxipostLLS = 'BENL_DePostTaxipostLLS';

    /**
     * De Post - Taxipost 24u (1 werkdag)
     **/
    const CodeType_BENL_DePostTaxipost24h = 'BENL_DePostTaxipost24h';

    /**
     * De Post - Taxipost Secur (1 werkdag)
     **/
    const CodeType_BENL_DePostTaxipostSecur = 'BENL_DePostTaxipostSecur';

    /**
     * Andere verzending
     **/
    const CodeType_BENL_OtherShippingMethods = 'BENL_OtherShippingMethods';

    /**
     * De Post - standaardverzending
     **/
    const CodeType_BENL_PostInternationalStandard = 'BENL_PostInternationalStandard';

    /**
     * De Post - aangetekende zending
     **/
    const CodeType_BENL_PostInternationalRegistered = 'BENL_PostInternationalRegistered';

    /**
     * TNT
     **/
    const CodeType_BENL_TNTInternational = 'BENL_TNTInternational';

    /**
     * Voordelige verzending uit het buitenland
     **/
    const CodeType_BENL_EconomyDeliveryFromAbroad = 'BENL_EconomyDeliveryFromAbroad';

    /**
     * Standaardverzending uit het buitenland
     **/
    const CodeType_BENL_StandardDeliveryFromAbroad = 'BENL_StandardDeliveryFromAbroad';

    /**
     * Express verzending uit het buitenland
     **/
    const CodeType_BENL_ExpressDeliveryFromAbroad = 'BENL_ExpressDeliveryFromAbroad';

    /**
     * Verzending uit het buitenland met internationale tracking
     **/
    const CodeType_BENL_TrackedDeliveryFromAbroad = 'BENL_TrackedDeliveryFromAbroad';

    /**
     * Standard Delivery
     **/
    const CodeType_CA_StandardDelivery = 'CA_StandardDelivery';

    /**
     * Expedited delivery
     **/
    const CodeType_CA_ExpeditedDelivery = 'CA_ExpeditedDelivery';

    /**
     * Canada Post Lettermail
     **/
    const CodeType_CA_PostLettermail = 'CA_PostLettermail';

    /**
     * Canada Post Regular Parcel
     **/
    const CodeType_CA_PostRegularParcel = 'CA_PostRegularParcel';

    /**
     * Canada Post Expedited Parcel
     **/
    const CodeType_CA_PostExpeditedParcel = 'CA_PostExpeditedParcel';

    /**
     * Canada Post Xpresspost - International
     **/
    const CodeType_CA_PostXpresspost = 'CA_PostXpresspost';

    /**
     * Canada Post Priority Courier
     **/
    const CodeType_CA_PostPriorityCourier = 'CA_PostPriorityCourier';

    /**
     * Canada Post Expedited Flat Rate Box
     **/
    const CodeType_CanadaPostExpeditedFlatRateBox = 'CanadaPostExpeditedFlatRateBox';

    /**
     * (This value is no longer used.)
     **/
    const CodeType_CA_PostExpeditedFlatRateBox = 'CA_PostExpeditedFlatRateBox';

    /**
     * Standard International Flat Rate Shipping
     **/
    const CodeType_CA_StandardInternational = 'CA_StandardInternational';

    /**
     * Expedited International Flat Rate Shipping
     **/
    const CodeType_CA_ExpeditedInternational = 'CA_ExpeditedInternational';

    /**
     * Other International Shipping (see description)
     **/
    const CodeType_CA_OtherInternational = 'CA_OtherInternational';

    /**
     * Canada Post Expedited Parcel - USA
     **/
    const CodeType_CA_PostExpeditedParcelUSA = 'CA_PostExpeditedParcelUSA';

    /**
     * Canada Post Small Packets - USA
     **/
    const CodeType_CA_PostSmallPacketsUSA = 'CA_PostSmallPacketsUSA';

    /**
     * Canada Post Xpresspost - USA
     **/
    const CodeType_CA_PostXpresspostUSA = 'CA_PostXpresspostUSA';

    /**
     * Canada Post Xpresspost - International
     **/
    const CodeType_CA_PostXpresspostInternational = 'CA_PostXpresspostInternational';

    /**
     * Canada Post International Parcel - Surface
     **/
    const CodeType_CA_PostInternationalParcelSurface = 'CA_PostInternationalParcelSurface';

    /**
     * Canada Post International Parcel - Air
     **/
    const CodeType_CA_PostInternationalParcelAir = 'CA_PostInternationalParcelAir';

    /**
     * Small Packets - International
     **/
    const CodeType_CA_SmallPacketsInternational = 'CA_SmallPacketsInternational';

    /**
     * Purolator International
     **/
    const CodeType_CA_PurolatorInternational = 'CA_PurolatorInternational';

    /**
     * Canada Post Small Packets - USA - Ground
     **/
    const CodeType_CA_PostSmallPacketsUSAGround = 'CA_PostSmallPacketsUSAGround';

    /**
     * Canada Post Small Packets - USA - Air
     **/
    const CodeType_CA_PostSmallPacketsUSAAir = 'CA_PostSmallPacketsUSAAir';

    /**
     * Small Packets - International - Ground
     **/
    const CodeType_CA_SmallPacketsInternationalGround = 'CA_SmallPacketsInternationalGround';

    /**
     * Small Packets - International - Air
     **/
    const CodeType_CA_SmallPacketsInternationalAir = 'CA_SmallPacketsInternationalAir';

    /**
     * Canada Post USA Letter-post
     **/
    const CodeType_CA_PostUSALetterPost = 'CA_PostUSALetterPost';

    /**
     * Canada Post International Letter-post
     **/
    const CodeType_CA_PostInternationalLetterPost = 'CA_PostInternationalLetterPost';

    /**
     * (This value is no longer used.)
     **/
    const CodeType_CA_PostExpeditedFlatRateBoxUSA = 'CA_PostExpeditedFlatRateBoxUSA';

    /**
     * UPS Express Canada
     **/
    const CodeType_CA_UPSExpressCanada = 'CA_UPSExpressCanada';

    /**
     * UPS Express Saver Canada
     **/
    const CodeType_CA_UPSExpressSaverCanada = 'CA_UPSExpressSaverCanada';

    /**
     * UPS Expedited Canada
     **/
    const CodeType_CA_UPSExpeditedCanada = 'CA_UPSExpeditedCanada';

    /**
     * UPS Standard Canada
     **/
    const CodeType_CA_UPSStandardCanada = 'CA_UPSStandardCanada';

    /**
     * UPS Express United States
     **/
    const CodeType_CA_UPSExpressUnitedStates = 'CA_UPSExpressUnitedStates';

    /**
     * UPS Expedited United States
     **/
    const CodeType_CA_UPSExpeditedUnitedStates = 'CA_UPSExpeditedUnitedStates';

    /**
     * UPS 3 Day Select United States
     **/
    const CodeType_CA_UPS3DaySelectUnitedStates = 'CA_UPS3DaySelectUnitedStates';

    /**
     * UPS Standard United States
     **/
    const CodeType_CA_UPSStandardUnitedStates = 'CA_UPSStandardUnitedStates';

    /**
     * UPS Worldwide Express
     **/
    const CodeType_CA_UPSWorldWideExpress = 'CA_UPSWorldWideExpress';

    /**
     * UPS Worldwide Expedited
     **/
    const CodeType_CA_UPSWorldWideExpedited = 'CA_UPSWorldWideExpedited';

    /**
     * Canada Post Priority Worldwide
     **/
    const CodeType_CA_PriorityWorldwide = 'CA_PriorityWorldwide';

    /**
     * Canada Post Expedited Flat Rate Box USA
     **/
    const CodeType_CanadaPostExpeditedFlatRateBoxUSA = 'CanadaPostExpeditedFlatRateBoxUSA';

    /**
     * Canada Post Tracked Packet - USA
     **/
    const CodeType_CA_PostTrackedPacketsUSA = 'CA_PostTrackedPacketsUSA';

    /**
     * Canada Post Tracked Packet - International
     **/
    const CodeType_CA_PostTrackedPacketsInternational = 'CA_PostTrackedPacketsInternational';

    /**
     * Freight
     **/
    const CodeType_CA_Freight = 'CA_Freight';

    /**
     * Standardversand (A-Post/Priority)
     **/
    const CodeType_CH_StandardDispatchAPost = 'CH_StandardDispatchAPost';

    /**
     * Standardversand (B-Post/Economy)
     **/
    const CodeType_CH_StandardDispatchBPost = 'CH_StandardDispatchBPost';

    /**
     * Versicherter Versand (z.B. Assurance/Fragile)
     **/
    const CodeType_CH_InsuredDispatch = 'CH_InsuredDispatch';

    /**
     * Einschreiben (Versand inkl. Einschreibengebuhr)
     **/
    const CodeType_CH_Writing = 'CH_Writing';

    /**
     * Nachnahme (Versand inkl. Nachnahmegebuhr)
     **/
    const CodeType_CH_COD = 'CH_COD';

    /**
     * Express- oder Kurierversand
     **/
    const CodeType_CH_ExpressOrCourier = 'CH_ExpressOrCourier';

    /**
     * Versicherter Express- oder Kurierversand
     **/
    const CodeType_CH_InsuredExpressOrCourier = 'CH_InsuredExpressOrCourier';

    /**
     * Sonder-/Speditionsversand (z.B. Mobel, KFZ)
     **/
    const CodeType_CH_SpecialDispatch = 'CH_SpecialDispatch';

    /**
     * Versicherter Sonder-/Speditionsversand (z.B. Mobel, KFZ)
     **/
    const CodeType_CH_InsuredSpecialDispatch = 'CH_InsuredSpecialDispatch';

    /**
     * Sonstige (Siehe Artikelbeschreibung)
     **/
    const CodeType_CH_Sonstige = 'CH_Sonstige';

    /**
     * Sonstiger Versand (Siehe Artikelbeschreibung)
     **/
    const CodeType_CH_SonstigerVersandInternational = 'CH_SonstigerVersandInternational';

    /**
     * ECONOMY Sendungen
     **/
    const CodeType_CH_EconomySendungenInternational = 'CH_EconomySendungenInternational';

    /**
     * PRIORITY Sendungen
     **/
    const CodeType_CH_PrioritySendungenInternational = 'CH_PrioritySendungenInternational';

    /**
     * URGENT Sendungen
     **/
    const CodeType_CH_UrgentSendungenInternational = 'CH_UrgentSendungenInternational';

    /**
     * Sparversand aus dem Ausland
     **/
    const CodeType_CH_EconomyDeliveryFromAbroad = 'CH_EconomyDeliveryFromAbroad';

    /**
     * Standardversand aus dem Ausland
     **/
    const CodeType_CH_StandardDeliveryFromAbroad = 'CH_StandardDeliveryFromAbroad';

    /**
     * Expressversand aus dem Ausland
     **/
    const CodeType_CH_ExpressDeliveryFromAbroad = 'CH_ExpressDeliveryFromAbroad';

    /**
     * Versand mit Nachverfolgung aus dem Ausland
     **/
    const CodeType_CH_TrackedDeliveryFromAbroad = 'CH_TrackedDeliveryFromAbroad';

    /**
     * Seller door delivery (limited to the city)
     **/
    const CodeType_CN_PersonalDelivery = 'CN_PersonalDelivery';

    /**
     * China Post Post Office
     **/
    const CodeType_CN_RegularPackage = 'CN_RegularPackage';

    /**
     * Logistics company express
     **/
    const CodeType_CN_DeliveryCompanyExpress = 'CN_DeliveryCompanyExpress';

    /**
     * EMS Express
     **/
    const CodeType_CN_PostOfficeExpress = 'CN_PostOfficeExpress';

    /**
     * Other (see item description)
     **/
    const CodeType_CN_Others = 'CN_Others';

    /**
     * China Post Express Mail
     **/
    const CodeType_CN_FastPostOffice = 'CN_FastPostOffice';

    /**
     * City Express
     **/
    const CodeType_CN_ExpressDeliverySameCity = 'CN_ExpressDeliverySameCity';

    /**
     * Off-site delivery
     **/
    const CodeType_CN_ExpressDeliveryOtherCities = 'CN_ExpressDeliveryOtherCities';

    /**
     * International Standard Fixed Freight
     **/
    const CodeType_CN_StandardInternational = 'CN_StandardInternational';

    /**
     * International courier fixed freight
     **/
    const CodeType_CN_ExpeditedInternational = 'CN_ExpeditedInternational';

    /**
     * Other international shipping charges (see note)
     **/
    const CodeType_CN_OtherInternational = 'CN_OtherInternational';

    /**
     * COD (same city only)
     **/
    const CodeType_CN_CODInternational = 'CN_CODInternational';

    /**
     * Standard Mailing
     **/
    const CodeType_CN_StandardMailingInternational = 'CN_StandardMailingInternational';

    /**
     * Regular logistics
     **/
    const CodeType_CN_RegularLogisticsInternational = 'CN_RegularLogisticsInternational';

    /**
     * EMS
     **/
    const CodeType_CN_EMSInternational = 'CN_EMSInternational';

    /**
     * Others (see description)
     **/
    const CodeType_CN_OthersInternational = 'CN_OthersInternational';

    /**
     * Unversicherter Versand
     **/
    const CodeType_DE_StandardDispatch = 'DE_StandardDispatch';

    /**
     * Versicherter Versand
     **/
    const CodeType_DE_InsuredDispatch = 'DE_InsuredDispatch';

    /**
     * Einschreiben (Versand inkl. Einschreibengebuhr)
     **/
    const CodeType_DE_Writing = 'DE_Writing';

    /**
     * Nachnahme (Versand inkl. Nachnahmegebuhr)
     **/
    const CodeType_DE_COD = 'DE_COD';

    /**
     * Express- oder Kurierversand
     **/
    const CodeType_DE_ExpressOrCourier = 'DE_ExpressOrCourier';

    /**
     * Versicherter Express- oder Kurierversand
     **/
    const CodeType_DE_InsuredExpressOrCourier = 'DE_InsuredExpressOrCourier';

    /**
     * Sonderversand (z.B. Mobel, KFZ)DE_DHLPackchen
     **/
    const CodeType_DE_SpecialDispatch = 'DE_SpecialDispatch';

    /**
     * Versicherter Sonderversand (z.B. Mobel, KFZ)
     **/
    const CodeType_DE_InsuredSpecialDispatch = 'DE_InsuredSpecialDispatch';

    /**
     * Unversicherter Versand
     **/
    const CodeType_DE_UnversicherterVersand = 'DE_UnversicherterVersand';

    /**
     * Deutsche Post Brief
     **/
    const CodeType_DE_DeutschePostBrief = 'DE_DeutschePostBrief';

    /**
     * eBay DHL Paket 24/7 (Abgabe und Lieferung an Packstation)
     **/
    const CodeType_DE_eBayDHLPaket24x7 = 'DE_eBayDHLPaket24x7';

    /**
     * DHL Postpaket
     **/
    const CodeType_DE_DHLPostpaket = 'DE_DHLPostpaket';

    /**
     * DHL Packchen International
     **/
    const CodeType_DE_DHLPackchen = 'DE_DHLPackchen';

    /**
     * Deutsche Post Warensendung
     **/
    const CodeType_DE_DeutschePostWarensendung = 'DE_DeutschePostWarensendung';

    /**
     * Deutsche Post Buchersendung
     **/
    const CodeType_DE_DeutschePostBuchersendung = 'DE_DeutschePostBuchersendung';

    /**
     * Hermes Paket (unversichert)
     **/
    const CodeType_DE_HermesPaketUnversichert = 'DE_HermesPaketUnversichert';

    /**
     * Hermes Paket (versichert)
     **/
    const CodeType_DE_HermesPaketVersichert = 'DE_HermesPaketVersichert';

    /**
     * iloxx Transport XXL
     **/
    const CodeType_DE_IloxxTransportXXL = 'DE_IloxxTransportXXL';

    /**
     * iloxx Express
     **/
    const CodeType_DE_IloxxUbernachtExpress = 'DE_IloxxUbernachtExpress';

    /**
     * iloxx Standard
     **/
    const CodeType_DE_IloxxStandard = 'DE_IloxxStandard';

    /**
     * Sonstige (Siehe Artikelbeschreibung)
     **/
    const CodeType_DE_Sonstige = 'DE_Sonstige';

    /**
     * Unversicherter Versand
     **/
    const CodeType_DE_UnversicherterVersandInternational = 'DE_UnversicherterVersandInternational';

    /**
     * Versicherter Versand
     **/
    const CodeType_DE_VersicherterVersandInternational = 'DE_VersicherterVersandInternational';

    /**
     * DHL Postpaket International
     **/
    const CodeType_DE_DHLPostpaketInternational = 'DE_DHLPostpaketInternational';

    /**
     * DHL Packchen International
     **/
    const CodeType_DE_DHLPackchenInternational = 'DE_DHLPackchenInternational';

    /**
     * Sonstiger Versand (Siehe Artikelbeschreibung)
     **/
    const CodeType_DE_SonstigerVersandInternational = 'DE_SonstigerVersandInternational';

    /**
     * Unversicherter Express - Versand
     **/
    const CodeType_DE_UnversicherterExpressVersandInternational = 'DE_UnversicherterExpressVersandInternational';

    /**
     * Versicherter Express - Versand
     **/
    const CodeType_DE_VersicherterExpressVersandInternational = 'DE_VersicherterExpressVersandInternational';

    /**
     * Deutsche Post Brief (Land)
     **/
    const CodeType_DE_DeutschePostBriefLandInternational = 'DE_DeutschePostBriefLandInternational';

    /**
     * Deutsche Post Brief (Luft)
     **/
    const CodeType_DE_DeutschePostBriefLuftInternational = 'DE_DeutschePostBriefLuftInternational';

    /**
     * iloxx Europa
     **/
    const CodeType_DE_IloxxEuropaInternational = 'DE_IloxxEuropaInternational';

    /**
     * iloxx World Wide
     **/
    const CodeType_DE_IloxxWorldWideInternational = 'DE_IloxxWorldWideInternational';

    /**
     * Paketversand
     **/
    const CodeType_DE_Paket = 'DE_Paket';

    /**
     * Expressversand
     **/
    const CodeType_DE_Express = 'DE_Express';

    /**
     * DHL Paket
     **/
    const CodeType_DE_DHLPaket = 'DE_DHLPaket';

    /**
     * Deutsche Post Buecher-/Warensendung
     **/
    const CodeType_DE_DPBuecherWarensendung = 'DE_DPBuecherWarensendung';

    /**
     * Hermes Paket
     **/
    const CodeType_DE_HermesPaket = 'DE_HermesPaket';

    /**
     * iloxx Transport
     **/
    const CodeType_DE_IloxxTransport = 'DE_IloxxTransport';

    /**
     * Sonstige
     **/
    const CodeType_DE_SonstigeDomestic = 'DE_SonstigeDomestic';

    /**
     * Einschreiben (inkl. aller Gebuehren)
     **/
    const CodeType_DE_Einschreiben = 'DE_Einschreiben';

    /**
     * Nachnahme (inkl. aller Gebuehren)
     **/
    const CodeType_DE_Nachname = 'DE_Nachname';

    /**
     * Sonderversand
     **/
    const CodeType_DE_SpecialDelivery = 'DE_SpecialDelivery';

    /**
     * UPS
     **/
    const CodeType_DE_UPS = 'DE_UPS';

    /**
     * DPD
     **/
    const CodeType_DE_DPD = 'DE_DPD';

    /**
     * GLS
     **/
    const CodeType_DE_GLS = 'DE_GLS';

    /**
     * Paketversand
     **/
    const CodeType_DE_PaketInternational = 'DE_PaketInternational';

    /**
     * DHL Paket International
     **/
    const CodeType_DE_DHLPaketInternational = 'DE_DHLPaketInternational';

    /**
     * DHL Paket International Express
     **/
    const CodeType_DE_DHLPaketIntlExpress = 'DE_DHLPaketIntlExpress';

    /**
     * Sonstige
     **/
    const CodeType_DE_SonstigeInternational = 'DE_SonstigeInternational';

    /**
     * Expressversand
     **/
    const CodeType_DE_ExpressInternational = 'DE_ExpressInternational';

    /**
     * Deutsche Post Brief
     **/
    const CodeType_DE_DPBriefInternational = 'DE_DPBriefInternational';

    /**
     * iloxx Transport International
     **/
    const CodeType_DE_IloxxTransportInternational = 'DE_IloxxTransportInternational';

    /**
     * Hermes Paket International
     **/
    const CodeType_DE_HermesPaketInternational = 'DE_HermesPaketInternational';

    /**
     * UPS International
     **/
    const CodeType_DE_UPSInternational = 'DE_UPSInternational';

    /**
     * DPD International
     **/
    const CodeType_DE_DPDInternational = 'DE_DPDInternational';

    /**
     * GLS International
     **/
    const CodeType_DE_GLSInternational = 'DE_GLSInternational';

    /**
     * eBay Hermes Paket Shop2Shop (Kaeufer erhaelt E-Mail von Hermes bei Zustellung)
     **/
    const CodeType_DE_eBayHermesPaketShop2ShopKaeufer = 'DE_eBayHermesPaketShop2ShopKaeufer';

    /**
     * Hermes Paket Shop2Shop (Kaeufer erhaelt E-Mail von Hermes bei Zustellung)
     **/
    const CodeType_DE_HermesPaketShop2ShopKaeufer = 'DE_HermesPaketShop2ShopKaeufer';

    /**
     * eBay Hermes Paket Shop2Shop
     **/
    const CodeType_DE_eBayHermesPaketShop2Shop = 'DE_eBayHermesPaketShop2Shop';

    /**
     * Hermes Paket Shop2Shop
     **/
    const CodeType_DE_HermesPaketShop2Shop = 'DE_HermesPaketShop2Shop';

    /**
     * Hermes Paket Sperrgut
     **/
    const CodeType_DE_HermesPaketSperrgut = 'DE_HermesPaketSperrgut';

    /**
     * eBay Hermes Paket Sperrgut Shop2Shop (Abgabe und Zustellung im Paketshop)
     **/
    const CodeType_DE_eBayHermesPaketSperrgutShop2Shop = 'DE_eBayHermesPaketSperrgutShop2Shop';

    /**
     * DHL Paeckchen Packstation
     **/
    const CodeType_DE_DHLPaeckchenPackstation = 'DE_DHLPaeckchenPackstation';

    /**
     * DHL Paket Packstation
     **/
    const CodeType_DE_DHLPaketPackstation = 'DE_DHLPaketPackstation';

    /**
     * eBay DHL Paeckchen
     **/
    const CodeType_DE_eBayDHLPaeckchen = 'DE_eBayDHLPaeckchen';

    /**
     * DHL Star-Paeckchen
     **/
    const CodeType_DE_DHLStarPaeckchen = 'DE_DHLStarPaeckchen';

    /**
     * Versand mit Nachverfolgung aus dem Ausland
     **/
    const CodeType_DE_TrackedDeliveryFromAbroad = 'DE_TrackedDeliveryFromAbroad';

    /**
     * Cartas nacionales hasta 20 gr
     **/
    const CodeType_ES_CartasNacionalesHasta20 = 'ES_CartasNacionalesHasta20';

    /**
     * Correos: cartas ordinarias
     **/
    const CodeType_ES_CartasNacionalesDeMas20 = 'ES_CartasNacionalesDeMas20';

    /**
     * Cartas internacionales hasta 20 gr
     **/
    const CodeType_ES_CartasInternacionalesHasta20 = 'ES_CartasInternacionalesHasta20';

    /**
     * Cartas internacionales de mas de 20 gr
     **/
    const CodeType_ES_CartasInternacionalesDeMas20 = 'ES_CartasInternacionalesDeMas20';

    /**
     * Paquete Azul (nacional) hasta 2 kg
     **/
    const CodeType_ES_PaqueteAzulHasta2kg = 'ES_PaqueteAzulHasta2kg';

    /**
     * Correos: Postal Expres
     **/
    const CodeType_ES_PaqueteAzulDeMas2kg = 'ES_PaqueteAzulDeMas2kg';

    /**
     * Paquete Internacional Economico
     **/
    const CodeType_ES_PaqueteInternacionalEconomico = 'ES_PaqueteInternacionalEconomico';

    /**
     * Otro courier 24 horas
     **/
    const CodeType_ES_Urgente = 'ES_Urgente';

    /**
     * Otros (ver descripcion)
     **/
    const CodeType_ES_Otros = 'ES_Otros';

    /**
     * Envio internacional estandar
     **/
    const CodeType_ES_StandardInternational = 'ES_StandardInternational';

    /**
     * Envio internacional urgente
     **/
    const CodeType_ES_ExpeditedInternational = 'ES_ExpeditedInternational';

    /**
     * Envio internacional economico
     **/
    const CodeType_ES_OtherInternational = 'ES_OtherInternational';

    /**
     * Cartas y tarjetas postales internacionales
     **/
    const CodeType_ES_CartasPostalInternational = 'ES_CartasPostalInternational';

    /**
     * Ems postal expres internacional
     **/
    const CodeType_ES_EmsPostalExpressInternational = 'ES_EmsPostalExpressInternational';

    /**
     * Paquete internacional economico
     **/
    const CodeType_ES_EconomyPacketInternational = 'ES_EconomyPacketInternational';

    /**
     * Envio economico desde el extranjero
     **/
    const CodeType_ES_EconomyDeliveryFromAbroad = 'ES_EconomyDeliveryFromAbroad';

    /**
     * Envio estandar desde el extranjero
     **/
    const CodeType_ES_StandardDeliveryFromAbroad = 'ES_StandardDeliveryFromAbroad';

    /**
     * Envio urgente desde el extranjero
     **/
    const CodeType_ES_ExpressDeliveryFromAbroad = 'ES_ExpressDeliveryFromAbroad';

    /**
     * Envio desde el extranjero con seguimiento
     **/
    const CodeType_ES_TrackedDeliveryFromAbroad = 'ES_TrackedDeliveryFromAbroad';

    /**
     * Entrega a un Kiala point hasta 8 kg
     **/
    const CodeType_ES_ENTREGA_KIALA_8KG = 'ES_ENTREGA_KIALA_8KG';

    /**
     * Chronoposte International Classic
     **/
    const CodeType_FR_ChronoposteInternationalClassic = 'FR_ChronoposteInternationalClassic';

    /**
     * Coliposte Colissimo Direct
     **/
    const CodeType_FR_ColiposteColissimoDirect = 'FR_ColiposteColissimoDirect';

    /**
     * DHL Express Europack
     **/
    const CodeType_FR_DHLExpressEuropack = 'FR_DHLExpressEuropack';

    /**
     * UPS Standard
     **/
    const CodeType_FR_UPSStandard = 'FR_UPSStandard';

    /**
     * Lettre
     **/
    const CodeType_FR_PostOfficeLetter = 'FR_PostOfficeLetter';

    /**
     * Lettre avec suivi
     **/
    const CodeType_FR_PostOfficeLetterFollowed = 'FR_PostOfficeLetterFollowed';

    /**
     * Lettre recommandee
     **/
    const CodeType_FR_PostOfficeLetterRecommended = 'FR_PostOfficeLetterRecommended';

    /**
     * Colissimo
     **/
    const CodeType_FR_ColiposteColissimo = 'FR_ColiposteColissimo';

    /**
     * Colissimo Recommande
     **/
    const CodeType_FR_ColiposteColissimoRecommended = 'FR_ColiposteColissimoRecommended';

    /**
     * Contre remboursement
     **/
    const CodeType_FR_UPSStandardAgainstRefund = 'FR_UPSStandardAgainstRefund';

    /**
     * Autre mode d'envoi de courrier
     **/
    const CodeType_FR_Autre = 'FR_Autre';

    /**
     * Ecopli
     **/
    const CodeType_FR_Ecopli = 'FR_Ecopli';

    /**
     * Colieco
     **/
    const CodeType_FR_Colieco = 'FR_Colieco';

    /**
     * Autre mode d'envoi de colis
     **/
    const CodeType_FR_AuteModeDenvoiDeColis = 'FR_AuteModeDenvoiDeColis';

    /**
     * Remise en main propre
     **/
    const CodeType_FR_RemiseEnMainPropre = 'FR_RemiseEnMainPropre';

    /**
     * Autre livraison internationale standard
     **/
    const CodeType_FR_StandardInternational = 'FR_StandardInternational';

    /**
     * Autre livraison internationale express
     **/
    const CodeType_FR_ExpeditedInternational = 'FR_ExpeditedInternational';

    /**
     * Autre livraison internationale economique
     **/
    const CodeType_FR_OtherInternational = 'FR_OtherInternational';

    /**
     * La Poste - Courrier International Prioritaire
     **/
    const CodeType_FR_LaPosteInternationalPriorityCourier = 'FR_LaPosteInternationalPriorityCourier';

    /**
     * La Poste - Courrier International Economique
     **/
    const CodeType_FR_LaPosteInternationalEconomyCourier = 'FR_LaPosteInternationalEconomyCourier';

    /**
     * La Poste - Colissimo International
     **/
    const CodeType_FR_LaPosteColissimoInternational = 'FR_LaPosteColissimoInternational';

    /**
     * La Poste - Colis Economique International
     **/
    const CodeType_FR_LaPosteColisEconomiqueInternational = 'FR_LaPosteColisEconomiqueInternational';

    /**
     * La Poste - Colissimo Emballage International
     **/
    const CodeType_FR_LaPosteColissimoEmballageInternational = 'FR_LaPosteColissimoEmballageInternational';

    /**
     * Chronopost Classic International
     **/
    const CodeType_FR_ChronopostClassicInternational = 'FR_ChronopostClassicInternational';

    /**
     * Chronopost Premium International
     **/
    const CodeType_FR_ChronopostPremiumInternational = 'FR_ChronopostPremiumInternational';

    /**
     * UPS Standard
     **/
    const CodeType_FR_UPSStandardInternational = 'FR_UPSStandardInternational';

    /**
     * UPS Express
     **/
    const CodeType_FR_UPSExpressInternational = 'FR_UPSExpressInternational';

    /**
     * DHL
     **/
    const CodeType_FR_DHLInternational = 'FR_DHLInternational';

    /**
     * La Poste Lettre Max
     **/
    const CodeType_FR_LaPosteLetterMax = 'FR_LaPosteLetterMax';

    /**
     * Livraison en Relais Kiala
     **/
    const CodeType_FR_KIALA_DELIVERY = 'FR_KIALA_DELIVERY';

    /**
     * Livraison a partir de l'etranger avec suivi de commande
     **/
    const CodeType_FR_TrackedDeliveryFromAbroad = 'FR_TrackedDeliveryFromAbroad';

    /**
     * National - Regular
     **/
    const CodeType_IN_Regular = 'IN_Regular';

    /**
     * National - Express
     **/
    const CodeType_IN_Express = 'IN_Express';

    /**
     * National - COD
     **/
    const CodeType_IN_NationalCOD = 'IN_NationalCOD';

    /**
     * Local - Courier
     **/
    const CodeType_IN_Courier = 'IN_Courier';

    /**
     * Local - COD
     **/
    const CodeType_IN_LocalCOD = 'IN_LocalCOD';

    /**
     * International - Standard
     **/
    const CodeType_IN_StandardInternational = 'IN_StandardInternational';

    /**
     * International - Expedited
     **/
    const CodeType_IN_ExpeditedInternational = 'IN_ExpeditedInternational';

    /**
     * International - other
     **/
    const CodeType_IN_OtherInternational = 'IN_OtherInternational';

    /**
     * Flat Rate COD
     **/
    const CodeType_IN_FlatRateCOD = 'IN_FlatRateCOD';

    /**
     * Buyer picks up and pays
     **/
    const CodeType_IN_BuyerPicksUpAndPays = 'IN_BuyerPicksUpAndPays';

    /**
     * Posta ordinaria
     **/
    const CodeType_IT_RegularMail = 'IT_RegularMail';

    /**
     * Posta prioritaria
     **/
    const CodeType_IT_PriorityMail = 'IT_PriorityMail';

    /**
     * Posta raccomandata
     **/
    const CodeType_IT_MailRegisteredLetter = 'IT_MailRegisteredLetter';

    /**
     * Posta raccomandata con contrassegno
     **/
    const CodeType_IT_MailRegisteredLetterWithMark = 'IT_MailRegisteredLetterWithMark';

    /**
     * Posta assicurata
     **/
    const CodeType_IT_InsuredMail = 'IT_InsuredMail';

    /**
     * Posta celere
     **/
    const CodeType_IT_QuickMail = 'IT_QuickMail';

    /**
     * Pacco ordinario
     **/
    const CodeType_IT_RegularPackage = 'IT_RegularPackage';

    /**
     * Pacco celere 1
     **/
    const CodeType_IT_QuickPackage1 = 'IT_QuickPackage1';

    /**
     * Pacco celere 3
     **/
    const CodeType_IT_QuickPackage3 = 'IT_QuickPackage3';

    /**
     * Corriere espresso
     **/
    const CodeType_IT_ExpressCourier = 'IT_ExpressCourier';

    /**
     * Paccocelere Maxi
     **/
    const CodeType_IT_ExpressPackageMaxi = 'IT_ExpressPackageMaxi';

    /**
     * Spedizione internazionale standard a prezzo fisso
     **/
    const CodeType_IT_StandardInternational = 'IT_StandardInternational';

    /**
     * Spedizione internazionale celere a prezzo fisso
     **/
    const CodeType_IT_ExpeditedInternational = 'IT_ExpeditedInternational';

    /**
     * Altre spedizioni internazionali (vedi descrizione)
     **/
    const CodeType_IT_OtherInternational = 'IT_OtherInternational';

    /**
     * Spedizione tracciata dall estero
     **/
    const CodeType_IT_TrackedDeliveryFromAbroad = 'IT_TrackedDeliveryFromAbroad';

    /**
     * Standaardverzending
     **/
    const CodeType_NL_StandardDelivery = 'NL_StandardDelivery';

    /**
     * Pakketpost
     **/
    const CodeType_NL_ParcelPost = 'NL_ParcelPost';

    /**
     * Verzending met ontvangstbevestiging
     **/
    const CodeType_NL_RegisteredMail = 'NL_RegisteredMail';

    /**
     * Andere verzendservice
     **/
    const CodeType_NL_Other = 'NL_Other';

    /**
     * TPG Post/TNT
     **/
    const CodeType_NL_TPGPostTNTInternational = 'NL_TPGPostTNTInternational';

    /**
     * UPS
     **/
    const CodeType_NL_UPSInternational = 'NL_UPSInternational';

    /**
     * FedEx
     **/
    const CodeType_NL_FedExInternational = 'NL_FedExInternational';

    /**
     * DHL
     **/
    const CodeType_NL_DHLInternational = 'NL_DHLInternational';

    /**
     * DPD (Germany)
     **/
    const CodeType_NL_DPDGBRInternational = 'NL_DPDGBRInternational';

    /**
     * GLS (Business only)
     **/
    const CodeType_NL_GLSBusinessInternational = 'NL_GLSBusinessInternational';

    /**
     * Vaste kosten standaard internationale verzending
     **/
    const CodeType_NL_StandardInternational = 'NL_StandardInternational';

    /**
     * Vaste kosten versnelde internationale verzending
     **/
    const CodeType_NL_ExpeditedInternational = 'NL_ExpeditedInternational';

    /**
     * Andere internationale verzending (zie beschrijving)
     **/
    const CodeType_NL_OtherInternational = 'NL_OtherInternational';

    /**
     * Voordelige verzending uit het buitenland
     **/
    const CodeType_NL_EconomyDeliveryFromAbroad = 'NL_EconomyDeliveryFromAbroad';

    /**
     * Standaardverzending uit het buitenland
     **/
    const CodeType_NL_StandardDeliveryFromAbroad = 'NL_StandardDeliveryFromAbroad';

    /**
     * Verzending per expresse uit het buitenland
     **/
    const CodeType_NL_ExpressDeliveryFromAbroad = 'NL_ExpressDeliveryFromAbroad';

    /**
     * Verzending met internationale tracering uit het buitenland
     **/
    const CodeType_NL_TrackedDeliveryFromAbroad = 'NL_TrackedDeliveryFromAbroad';

    /**
     * Post office plus registration
     **/
    const CodeType_TW_RegisteredMail = 'TW_RegisteredMail';

    /**
     * Post office without registration
     **/
    const CodeType_TW_UnregisteredMail = 'TW_UnregisteredMail';

    /**
     * Post office cash on delivery
     **/
    const CodeType_TW_COD = 'TW_COD';

    /**
     * Home delivery
     **/
    const CodeType_TW_DwellingMatchPost = 'TW_DwellingMatchPost';

    /**
     * Home delivery cash on delivery
     **/
    const CodeType_TW_DwellingMatchCOD = 'TW_DwellingMatchCOD';

    /**
     * Face to face
     **/
    const CodeType_TW_SelfPickup = 'TW_SelfPickup';

    /**
     * Freight delivery
     **/
    const CodeType_TW_ParcelPost = 'TW_ParcelPost';

    /**
     * Express delivery
     **/
    const CodeType_TW_ExpressMail = 'TW_ExpressMail';

    /**
     * Other
     **/
    const CodeType_TW_Other = 'TW_Other';

    /**
     * Post Office Airbag
     **/
    const CodeType_TW_CPInternationalLetterPost = 'TW_CPInternationalLetterPost';

    /**
     * Post office air parcel
     **/
    const CodeType_TW_CPInternationalParcelPost = 'TW_CPInternationalParcelPost';

    /**
     * Post office aviation registered packet
     **/
    const CodeType_TW_CPInternationalRegisteredLetterPost = 'TW_CPInternationalRegisteredLetterPost';

    /**
     * Post office aviation registration package
     **/
    const CodeType_TW_CPInternationalRegisteredParcelPost = 'TW_CPInternationalRegisteredParcelPost';

    /**
     * Post Office International Express EMS
     **/
    const CodeType_TW_CPInternationalEMS = 'TW_CPInternationalEMS';

    /**
     * Post office international land and water package
     **/
    const CodeType_TW_CPInternationalOceanShippingParcel = 'TW_CPInternationalOceanShippingParcel';

    /**
     * FedEx International Priority
     **/
    const CodeType_TW_FedExInternationalPriority = 'TW_FedExInternationalPriority';

    /**
     * FedEx International Economy
     **/
    const CodeType_TW_FedExInternationalEconomy = 'TW_FedExInternationalEconomy';

    /**
     * UPS Worldwide Expedited
     **/
    const CodeType_TW_UPSWorldwideExpedited = 'TW_UPSWorldwideExpedited';

    /**
     * UPS Worldwide Express
     **/
    const CodeType_TW_UPSWorldwideExpress = 'TW_UPSWorldwideExpress';

    /**
     * UPS Worldwide Express Plus
     **/
    const CodeType_TW_UPSWorldwideExpressPlus = 'TW_UPSWorldwideExpressPlus';

    /**
     * Other international shipping charges (see description)
     **/
    const CodeType_TW_OtherInternational = 'TW_OtherInternational';

    /**
     * Royal Mail 1st Class
     **/
    const CodeType_UK_RoyalMailFirstClassStandard = 'UK_RoyalMailFirstClassStandard';

    /**
     * Royal Mail 2nd Class
     **/
    const CodeType_UK_RoyalMailSecondClassStandard = 'UK_RoyalMailSecondClassStandard';

    /**
     * Royal Mail 1st Class Signed For
     **/
    const CodeType_UK_RoyalMailFirstClassRecorded = 'UK_RoyalMailFirstClassRecorded';

    /**
     * Royal Mail 2nd Class Signed For
     **/
    const CodeType_UK_RoyalMailSecondClassRecorded = 'UK_RoyalMailSecondClassRecorded';

    /**
     * Royal Mail Special Delivery
     **/
    const CodeType_UK_RoyalMailSpecialDelivery = 'UK_RoyalMailSpecialDelivery';

    /**
     * (This value is no longer used.)
     **/
    const CodeType_UK_RoyalMailStandardParcel = 'UK_RoyalMailStandardParcel';

    /**
     * Parcelforce 24
     **/
    const CodeType_UK_Parcelforce24 = 'UK_Parcelforce24';

    /**
     * Parcelforce 48
     **/
    const CodeType_UK_Parcelforce48 = 'UK_Parcelforce48';

    /**
     * Other Courier
     **/
    const CodeType_UK_OtherCourier = 'UK_OtherCourier';

    /**
     * Hermes Tracked
     **/
    const CodeType_UK_myHermesDoorToDoorService = 'UK_myHermesDoorToDoorService';

    /**
     * Collect+ : drop at store-delivery to door
     **/
    const CodeType_UK_CollectDropAtStoreDeliveryToDoor = 'UK_CollectDropAtStoreDeliveryToDoor';

    /**
     * Seller's Standard Rate
     **/
    const CodeType_UK_SellersStandardRate = 'UK_SellersStandardRate';

    /**
     * Collection in Person
     **/
    const CodeType_UK_CollectInPerson = 'UK_CollectInPerson';

    /**
     * Sellers Standard International Rate
     **/
    const CodeType_UK_SellersStandardInternationalRate = 'UK_SellersStandardInternationalRate';

    /**
     * Royal Mail Airmail
     **/
    const CodeType_UK_RoyalMailAirmailInternational = 'UK_RoyalMailAirmailInternational';

    /**
     * Royal Mail Airsure
     **/
    const CodeType_UK_RoyalMailAirsureInternational = 'UK_RoyalMailAirsureInternational';

    /**
     * Royal Mail Surface Mail
     **/
    const CodeType_UK_RoyalMailSurfaceMailInternational = 'UK_RoyalMailSurfaceMailInternational';

    /**
     * Royal Mail International Signed-for
     **/
    const CodeType_UK_RoyalMailInternationalSignedFor = 'UK_RoyalMailInternationalSignedFor';

    /**
     * Royal Mail HM Forces Mail
     **/
    const CodeType_UK_RoyalMailHMForcesMailInternational = 'UK_RoyalMailHMForcesMailInternational';

    /**
     * Parcelforce International Datapost
     **/
    const CodeType_UK_ParcelForceInternationalDatapost = 'UK_ParcelForceInternationalDatapost';

    /**
     * Parcelforce Ireland 24
     **/
    const CodeType_UK_ParcelForceIreland24International = 'UK_ParcelForceIreland24International';

    /**
     * Parcelforce Euro 48
     **/
    const CodeType_UK_ParcelForceEuro48International = 'UK_ParcelForceEuro48International';

    /**
     * Parcelforce International Scheduled
     **/
    const CodeType_UK_ParcelForceInternationalScheduled = 'UK_ParcelForceInternationalScheduled';

    /**
     * Other courier or delivery service
     **/
    const CodeType_UK_OtherCourierOrDeliveryInternational = 'UK_OtherCourierOrDeliveryInternational';

    /**
     * Collect in person
     **/
    const CodeType_UK_CollectInPersonInternational = 'UK_CollectInPersonInternational';

    /**
     * Parcelforce Global Express
     **/
    const CodeType_UK_ParcelForceIntlExpress = 'UK_ParcelForceIntlExpress';

    /**
     * Parcelforce Global Value
     **/
    const CodeType_UK_ParcelForceIntlValue = 'UK_ParcelForceIntlValue';

    /**
     * Parcelforce Global Economy (Not available for destinations in Europe)
     **/
    const CodeType_UK_ParcelForceIntlEconomy = 'UK_ParcelForceIntlEconomy';

    /**
     * Tracked delivery from outside abroad
     **/
    const CodeType_UK_TrackedDeliveryFromAbroad = 'UK_TrackedDeliveryFromAbroad';

    /**
     * International tracked postage
     **/
    const CodeType_UK_IntlTrackedPostage = 'UK_IntlTrackedPostage';

    /**
     * Seller's standard rate
     **/
    const CodeType_IE_SellersStandardRate = 'IE_SellersStandardRate';

    /**
     * First Class Letter Service
     **/
    const CodeType_IE_FirstClassLetterService = 'IE_FirstClassLetterService';

    /**
     * SwiftPost National
     **/
    const CodeType_IE_SwiftPostNational = 'IE_SwiftPostNational';

    /**
     * Registered Post
     **/
    const CodeType_IE_RegisteredPost = 'IE_RegisteredPost';

    /**
     * EMS SDS Courier
     **/
    const CodeType_IE_EMSSDSCourier = 'IE_EMSSDSCourier';

    /**
     * Economy SDS Courier
     **/
    const CodeType_IE_EconomySDSCourier = 'IE_EconomySDSCourier';

    /**
     * Other courier
     **/
    const CodeType_IE_OtherCourier = 'IE_OtherCourier';

    /**
     * Collection in person
     **/
    const CodeType_IE_CollectionInPerson = 'IE_CollectionInPerson';

    /**
     * Seller's Standard International Rate
     **/
    const CodeType_IE_SellersStandardRateInternational = 'IE_SellersStandardRateInternational';

    /**
     * International Economy Service
     **/
    const CodeType_IE_InternationalEconomyService = 'IE_InternationalEconomyService';

    /**
     * International Priority Service
     **/
    const CodeType_IE_InternationalPriorityService = 'IE_InternationalPriorityService';

    /**
     * SwiftPost Express
     **/
    const CodeType_IE_SwiftPostExpressInternational = 'IE_SwiftPostExpressInternational';

    /**
     * SwiftPost International
     **/
    const CodeType_IE_SwiftPostInternational = 'IE_SwiftPostInternational';

    /**
     * EMS SDS Courier
     **/
    const CodeType_IE_EMSSDSCourierInternational = 'IE_EMSSDSCourierInternational';

    /**
     * Economy SDS Courier
     **/
    const CodeType_IE_EconomySDSCourierInternational = 'IE_EconomySDSCourierInternational';

    /**
     * Other courier or delivery service
     **/
    const CodeType_IE_OtherCourierInternational = 'IE_OtherCourierInternational';

    /**
     * International collection in person
     **/
    const CodeType_IE_CollectionInPersonInternational = 'IE_CollectionInPersonInternational';

    /**
     * Economy delivery from abroad
     **/
    const CodeType_IE_EconomyDeliveryFromAbroad = 'IE_EconomyDeliveryFromAbroad';

    /**
     * Standard delivery from abroad
     **/
    const CodeType_IE_StandardDeliveryFromAbroad = 'IE_StandardDeliveryFromAbroad';

    /**
     * Express delivery from abroad
     **/
    const CodeType_IE_ExpressDeliveryFromAbroad = 'IE_ExpressDeliveryFromAbroad';

    /**
     * Tracked delivery from abroad
     **/
    const CodeType_IE_TrackedDeliveryFromAbroad = 'IE_TrackedDeliveryFromAbroad';

    /**
     * Domestic Regular shipping
     **/
    const CodeType_PL_DomesticRegular = 'PL_DomesticRegular';

    /**
     * Domestic Special shipping
     **/
    const CodeType_PL_DomesticSpecial = 'PL_DomesticSpecial';

    /**
     * Przesylka z zagranicy - ekonomiczna
     **/
    const CodeType_PL_EconomyDeliveryFromAbroad = 'PL_EconomyDeliveryFromAbroad';

    /**
     * Przesylka z zagranicy - standardowa
     **/
    const CodeType_PL_StandardDeliveryFromAbroad = 'PL_StandardDeliveryFromAbroad';

    /**
     * Przesylka z zagranicy - ekspresowa
     **/
    const CodeType_PL_ExpressDeliveryFromAbroad = 'PL_ExpressDeliveryFromAbroad';

    /**
     * Przesylka z zagranicy - ze sledzeniem
     **/
    const CodeType_PL_TrackedDeliveryFromAbroad = 'PL_TrackedDeliveryFromAbroad';

    /**
     * Service associated with FreightQuote.com
     **/
    const CodeType_FreightShipping = 'FreightShipping';

    /**
     * (This value is no longer used.)
     **/
    const CodeType_FreightOtherShipping = 'FreightOtherShipping';

    /**
     * Service associated with any freight service other than FreightQuote.com
     * 
     * <span class="tablenote">
     * <strong>Note:</strong> Sellers offering freight shipping on the following marketplaces should use the
     * Shipping service code value
     * listed below and not use the <code>Freight</code> value that is used for freight shipping on other marketplaces.
     * For example, sellers offering freight shipping on the Australia (AU) marketplace should use the
     * <code>AU_Freight</code> value for
     * ShippingServiceCodeType
     * and not use the <code>Freight</code> value.
     * 
     * <table>
     * <tr>
     * <th>SiteID</th>
     * <th>Site name</th>
     * <th>Shipping service code value</th>
     * </tr>
     * <tr><td><code>0</code></td>
     * <td>US</td>
     * <td><code>Freight</code></code></td>
     * </tr>
     * <tr><td><code>3</code></td>
     * <td>UK</td>
     * <td><code>Courier</code></code></td>
     * </tr>
     * <tr><td><code>2</code></td>
     * <td>CA</td>
     * <td><code>CA_Freight</code></code></td>
     * </tr>
     * <tr><td><code>15</code></td>
     * <td>AU</td>
     * <td><code>AU_Freight</code></code></td>
     * </tr>
     * <tr><td><code>210</code></td>
     * <td>CA_FR</td>
     * <td><code>CA_Freight</code></code></td>
     * </tr>
     * </table>
     * </span>
     **/
    const CodeType_Freight = 'Freight';

    /**
     * Freight Shipping International
     **/
    const CodeType_FreightShippingInternational = 'FreightShippingInternational';

    /**
     * US Postal Service Ground
     **/
    const CodeType_USPSGround = 'USPSGround';

    /**
     * Overnight flat rate shipping service (domestic only)
     **/
    const CodeType_ShippingMethodOvernight = 'ShippingMethodOvernight';

    /**
     * Reserved for internal or future use
     **/
    const CodeType_CustomCode = 'CustomCode';

    /**
     * USPS Priority Flat Rate Envelope
     **/
    const CodeType_USPSPriorityFlatRateEnvelope = 'USPSPriorityFlatRateEnvelope';

    /**
     * USPS Priority Flat Rate Box
     **/
    const CodeType_USPSPriorityFlatRateBox = 'USPSPriorityFlatRateBox';

    /**
     * USPS Global Priority Mail Small Envelope
     **/
    const CodeType_USPSGlobalPrioritySmallEnvelope = 'USPSGlobalPrioritySmallEnvelope';

    /**
     * USPS Global Priority Mail Large Envelope
     **/
    const CodeType_USPSGlobalPriorityLargeEnvelope = 'USPSGlobalPriorityLargeEnvelope';

    /**
     * USPS Priority Mail Express Flat Rate Envelope
     **/
    const CodeType_USPSExpressFlatRateEnvelope = 'USPSExpressFlatRateEnvelope';

    /**
     * UPS Worldwide Express Box 10 Kg
     **/
    const CodeType_UPSWorldWideExpressBox10kg = 'UPSWorldWideExpressBox10kg';

    /**
     * UPS Worldwide Express Box 25 Kg
     **/
    const CodeType_UPSWorldWideExpressBox25kg = 'UPSWorldWideExpressBox25kg';

    /**
     * UPS Worldwide Express Plus Box 10 Kg
     **/
    const CodeType_UPSWorldWideExpressPlusBox10kg = 'UPSWorldWideExpressPlusBox10kg';

    /**
     * UPS Worldwide Express Plus box 25 Kg
     **/
    const CodeType_UPSWorldWideExpressPlusBox25kg = 'UPSWorldWideExpressPlusBox25kg';

    /**
     * Local pick up only
     **/
    const CodeType_HK_LocalPickUpOnly = 'HK_LocalPickUpOnly';

    /**
     * Local courier
     **/
    const CodeType_HK_LocalCourier = 'HK_LocalCourier';

    /**
     * Domestic regular shipping
     **/
    const CodeType_HK_DomesticRegularShipping = 'HK_DomesticRegularShipping';

    /**
     * Domestic special shipping
     **/
    const CodeType_HK_DomesticSpecialShipping = 'HK_DomesticSpecialShipping';

    /**
     * International regular shipping
     **/
    const CodeType_HK_InternationalRegularShipping = 'HK_InternationalRegularShipping';

    /**
     * International special shipping
     **/
    const CodeType_HK_InternationalSpecialShipping = 'HK_InternationalSpecialShipping';

    /**
     * Local pick up only
     **/
    const CodeType_SG_LocalPickUpOnly = 'SG_LocalPickUpOnly';

    /**
     * Local courier
     **/
    const CodeType_SG_LocalCourier = 'SG_LocalCourier';

    /**
     * Domestic standard mail
     **/
    const CodeType_SG_DomesticStandardMail = 'SG_DomesticStandardMail';

    /**
     * Domestic non standard mail
     **/
    const CodeType_SG_DomesticNonStandardMail = 'SG_DomesticNonStandardMail';

    /**
     * Domestic Speedpost Islandwide
     **/
    const CodeType_SG_DomesticSpeedpostIslandwide = 'SG_DomesticSpeedpostIslandwide';

    /**
     * International standard mail
     **/
    const CodeType_SG_InternationalStandardMail = 'SG_InternationalStandardMail';

    /**
     * International Express Mail Service (EMS)
     **/
    const CodeType_SG_InternationalExpressMailService = 'SG_InternationalExpressMailService';

    /**
     * International courier (DHL, FedEx, UPS)
     **/
    const CodeType_SG_InternationalCourier = 'SG_InternationalCourier';

    /**
     * De Post zending - NON PRIOR (2 werkdagen)
     **/
    const CodeType_BENL_DePostZendingNONPRIOR = 'BENL_DePostZendingNONPRIOR';

    /**
     * De Post zending - PRIOR (1 werkdag)
     **/
    const CodeType_BENL_DePostZendingPRIOR = 'BENL_DePostZendingPRIOR';

    /**
     * De Post zending - aangetekend (1 werkdag)
     **/
    const CodeType_BENL_DePostZendingAangetekend = 'BENL_DePostZendingAangetekend';

    /**
     * Kilopost pakje (2 werkdagen)
     **/
    const CodeType_BENL_KilopostPakje = 'BENL_KilopostPakje';

    /**
     * Taxipost (express)
     **/
    const CodeType_BENL_Taxipost = 'BENL_Taxipost';

    /**
     * Kiala afhaalpunt (1 tot 4 werkdagen)
     **/
    const CodeType_BENL_KialaAfhaalpunt = 'BENL_KialaAfhaalpunt';

    /**
     * Vaste kosten standaard verzending
     **/
    const CodeType_BENL_VasteKostenStandaardVerzending = 'BENL_VasteKostenStandaardVerzending';

    /**
     * Vaste kosten versnelde verzending
     **/
    const CodeType_BENL_VasteKostenVersneldeVerzending = 'BENL_VasteKostenVersneldeVerzending';

    /**
     * Verzekerde verzending
     **/
    const CodeType_BENL_VerzekerdeVerzending = 'BENL_VerzekerdeVerzending';

    /**
     * La Poste envoi NON PRIOR (2 jours ouvrables)
     **/
    const CodeType_BEFR_LaPosteEnvoiNONPRIOR = 'BEFR_LaPosteEnvoiNONPRIOR';

    /**
     * La Poste envoi PRIOR (1 jour ouvrable)
     **/
    const CodeType_BEFR_LaPosteEnvoiPRIOR = 'BEFR_LaPosteEnvoiPRIOR';

    /**
     * La Poste envoi recommande (1 jour ouvrable)
     **/
    const CodeType_BEFR_LaPosteEnvoiRecommande = 'BEFR_LaPosteEnvoiRecommande';

    /**
     * Paquet Kilopost (2 jours ouvrables)
     **/
    const CodeType_BEFR_PaquetKilopost = 'BEFR_PaquetKilopost';

    /**
     * Taxipost (express)
     **/
    const CodeType_BEFR_Taxipost = 'BEFR_Taxipost';

    /**
     * Point retrait Kiala (1 a 4 jours ouvrables)
     **/
    const CodeType_BEFR_PointRetraitKiala = 'BEFR_PointRetraitKiala';

    /**
     * Livraison standard - prix forfaitaire
     **/
    const CodeType_BEFR_LivraisonStandardPrixforFaitaire = 'BEFR_LivraisonStandardPrixforFaitaire';

    /**
     * Livraison express - prix forfaitaire
     **/
    const CodeType_BEFR_LivraisonExpressPrixforFaitaire = 'BEFR_LivraisonExpressPrixforFaitaire';

    /**
     * Livraison securisee
     **/
    const CodeType_BEFR_LivraisonSecurise = 'BEFR_LivraisonSecurise';

    /**
     * De Post zending - PRIOR
     **/
    const CodeType_BENL_DePostZendingPRIORInternational = 'BENL_DePostZendingPRIORInternational';

    /**
     * De Post zending - NON PRIOR
     **/
    const CodeType_BENL_DePostZendingNONPRIORInternational = 'BENL_DePostZendingNONPRIORInternational';

    /**
     * De Post zending - aangetekend
     **/
    const CodeType_BENL_DePostZendingAangetekendInternational = 'BENL_DePostZendingAangetekendInternational';

    /**
     * Kilopost pakje Internationaal
     **/
    const CodeType_BENL_KilopostPakjeInternational = 'BENL_KilopostPakjeInternational';

    /**
     * Taxipost expressverzending
     **/
    const CodeType_BENL_TaxipostExpressverzending = 'BENL_TaxipostExpressverzending';

    /**
     * Verzekerde verzending
     **/
    const CodeType_BENL_VerzekerdeVerzendingInternational = 'BENL_VerzekerdeVerzendingInternational';

    /**
     * La Poste envoie PRIOR
     **/
    const CodeType_BEFR_LaPosteenvoiePRIOR = 'BEFR_LaPosteenvoiePRIOR';

    /**
     * La Poste envoie NON PRIOR
     **/
    const CodeType_BEFR_LaPosteenvoieNONPRIOR = 'BEFR_LaPosteenvoieNONPRIOR';

    /**
     * La Poste envoie recommande
     **/
    const CodeType_BEFR_LaPosteenvoieRecommande = 'BEFR_LaPosteenvoieRecommande';

    /**
     * Paquet  Kilopost Internationale
     **/
    const CodeType_BEFR_PaquetKilopostInternationale = 'BEFR_PaquetKilopostInternationale';

    /**
     * BEFR_Express Taxipost
     **/
    const CodeType_BEFR_ExpressTaxipost = 'BEFR_ExpressTaxipost';

    /**
     * Livraison standard internationale - prix forfaitaire
     **/
    const CodeType_BEFR_LivraisonStandardInternationalePrixforFaitaire = 'BEFR_LivraisonStandardInternationalePrixforFaitaire';

    /**
     * Livraison express internationale - prix forfaitaire
     **/
    const CodeType_BEFR_LivraisonExpressInternationalePrixforFaitaire = 'BEFR_LivraisonExpressInternationalePrixforFaitaire';

    /**
     * Livraison securisee
     **/
    const CodeType_BEFR_LivraisonSecuriseInternational = 'BEFR_LivraisonSecuriseInternational';

    /**
     * Chronopost
     **/
    const CodeType_FR_Chronopost = 'FR_Chronopost';

    /**
     * Royal Mail Special Delivery; 1:00 pm
     **/
    const CodeType_UK_RoyalMailSpecialDeliveryNextDay = 'UK_RoyalMailSpecialDeliveryNextDay';

    /**
     * Canada Post Light Packet International
     **/
    const CodeType_CA_PostLightPacketInternational = 'CA_PostLightPacketInternational';

    /**
     * Canada Post Light Packet USA
     **/
    const CodeType_CA_PostLightPacketUSA = 'CA_PostLightPacketUSA';

    /**
     * DHL
     **/
    const CodeType_PL_DHLInternational = 'PL_DHLInternational';

    /**
     * Przesylka zagraniczna - zwykla
     **/
    const CodeType_PL_InternationalRegular = 'PL_InternationalRegular';

    /**
     * Przesylka zagraniczna - priorytetowa
     **/
    const CodeType_PL_InternationalSpecial = 'PL_InternationalSpecial';

    /**
     * UPS
     **/
    const CodeType_PL_UPSInternational = 'PL_UPSInternational';

    /**
     * Normes de livraison postale
     **/
    const CodeType_CAFR_StandardDelivery = 'CAFR_StandardDelivery';

    /**
     * Expedition acceleree
     **/
    const CodeType_CAFR_ExpeditedDelivery = 'CAFR_ExpeditedDelivery';

    /**
     * Postes Canada, Poste-lettres
     **/
    const CodeType_CAFR_PostLettermail = 'CAFR_PostLettermail';

    /**
     * Postes Canada, Colis standard
     **/
    const CodeType_CAFR_PostRegularParcel = 'CAFR_PostRegularParcel';

    /**
     * Postes Canada, Colis acceleres
     **/
    const CodeType_CAFR_PostExpeditedParcel = 'CAFR_PostExpeditedParcel';

    /**
     * Postes Canada, Xpresspost
     **/
    const CodeType_CAFR_PostXpresspost = 'CAFR_PostXpresspost';

    /**
     * Postes Canada, Messageries prioritaires
     **/
    const CodeType_CAFR_PostPriorityCourier = 'CAFR_PostPriorityCourier';

    /**
     * Expedition standard - International, tarif fixe
     **/
    const CodeType_CAFR_StandardInternational = 'CAFR_StandardInternational';

    /**
     * Expedition acceleree - International, tarif fixe
     **/
    const CodeType_CAFR_ExpeditedInternational = 'CAFR_ExpeditedInternational';

    /**
     * Autres services d'expedition internationale (voir description)
     **/
    const CodeType_CAFR_OtherInternational = 'CAFR_OtherInternational';

    /**
     * Postes Canada, Colis acceleres - E.U.
     **/
    const CodeType_CAFR_PostExpeditedParcelUSA = 'CAFR_PostExpeditedParcelUSA';

    /**
     * Postes Canada, Petits paquets - E.U.
     **/
    const CodeType_CAFR_PostSmallPacketsUSA = 'CAFR_PostSmallPacketsUSA';

    /**
     * Postes Canada, Xpresspost - E.U.
     **/
    const CodeType_CAFR_PostXpresspostUSA = 'CAFR_PostXpresspostUSA';

    /**
     * Postes Canada, Xpresspost - International
     **/
    const CodeType_CAFR_PostXpresspostInternational = 'CAFR_PostXpresspostInternational';

    /**
     * Postes Canada, Colis international de surface
     **/
    const CodeType_CAFR_PostInternationalParcelSurface = 'CAFR_PostInternationalParcelSurface';

    /**
     * Postes Canada, Colis-avion - International
     **/
    const CodeType_CAFR_PostInternationalParcelAir = 'CAFR_PostInternationalParcelAir';

    /**
     * Petits paquets - International
     **/
    const CodeType_CAFR_SmallPacketsInternational = 'CAFR_SmallPacketsInternational';

    /**
     * Purolator International
     **/
    const CodeType_CAFR_PurolatorInternational = 'CAFR_PurolatorInternational';

    /**
     * Postes Canada, Petits paquets - E.U. service de surface
     **/
    const CodeType_CAFR_PostSmallPacketsUSAGround = 'CAFR_PostSmallPacketsUSAGround';

    /**
     * Postes Canada, Petits paquets - E.U. par avion
     **/
    const CodeType_CAFR_PostSmallPacketsUSAAir = 'CAFR_PostSmallPacketsUSAAir';

    /**
     * Petits paquets - International, courrier-surface
     **/
    const CodeType_CAFR_SmallPacketsInternationalGround = 'CAFR_SmallPacketsInternationalGround';

    /**
     * Petits paquets - International, courrier-avion
     **/
    const CodeType_CAFR_SmallPacketsInternationalAir = 'CAFR_SmallPacketsInternationalAir';

    /**
     * Postes Canada, Poste aux lettres - E.U.
     **/
    const CodeType_CAFR_PostUSALetterPost = 'CAFR_PostUSALetterPost';

    /**
     * Postes Canada, Poste aux lettres - International
     **/
    const CodeType_CAFR_PostInternationalLetterPost = 'CAFR_PostInternationalLetterPost';

    /**
     * UPS Express Saver
     **/
    const CodeType_CAFR_UPSExpressCanada = 'CAFR_UPSExpressCanada';

    /**
     * UPS Express Saver Canada
     **/
    const CodeType_CAFR_UPSExpressSaverCanada = 'CAFR_UPSExpressSaverCanada';

    /**
     * UPS Expedited Canada
     **/
    const CodeType_CAFR_UPSExpeditedCanada = 'CAFR_UPSExpeditedCanada';

    /**
     * UPS Standard au Canada
     **/
    const CodeType_CAFR_UPSStandardCanada = 'CAFR_UPSStandardCanada';

    /**
     * UPS Express Etats-Unis
     **/
    const CodeType_CAFR_UPSExpressUnitedStates = 'CAFR_UPSExpressUnitedStates';

    /**
     * UPS Expedited Etats-Unis
     **/
    const CodeType_CAFR_UPSExpeditedUnitedStates = 'CAFR_UPSExpeditedUnitedStates';

    /**
     * 3Day Select aux Etats-Unis
     **/
    const CodeType_CAFR_UPS3DaySelectUnitedStates = 'CAFR_UPS3DaySelectUnitedStates';

    /**
     * UPS Standard aux Etats-Unis
     **/
    const CodeType_CAFR_UPSStandardUnitedStates = 'CAFR_UPSStandardUnitedStates';

    /**
     * UPS Worlwide Express
     **/
    const CodeType_CAFR_UPSWorldWideExpress = 'CAFR_UPSWorldWideExpress';

    /**
     * UPS Worlwide Expedited
     **/
    const CodeType_CAFR_UPSWorldWideExpedited = 'CAFR_UPSWorldWideExpedited';

    /**
     * Royal Mail Special Delivery 9:00 am
     **/
    const CodeType_UK_RoyalMailSpecialDelivery9am = 'UK_RoyalMailSpecialDelivery9am';

    /**
     * USPS First Class Mail Intl / First Class Package Intl Service
     **/
    const CodeType_USPSFirstClassMailInternational = 'USPSFirstClassMailInternational';

    /**
     * USPS Priority Mail International
     **/
    const CodeType_USPSPriorityMailInternational = 'USPSPriorityMailInternational';

    /**
     * USPS Priority Mail Express International
     **/
    const CodeType_USPSExpressMailInternational = 'USPSExpressMailInternational';

    /**
     * Standardpauschale fur internationalen Versand
     **/
    const CodeType_CH_StandardInternational = 'CH_StandardInternational';

    /**
     * Expresspauschale fur internationalen Versand
     **/
    const CodeType_CH_ExpeditedInternational = 'CH_ExpeditedInternational';

    /**
     * Sonstiger Versand (Siehe Artikelbeschreibung)
     **/
    const CodeType_CH_SonstigerVersandSieheArtikelbeschreibung = 'CH_SonstigerVersandSieheArtikelbeschreibung';

    /**
     * International Standard Fixed Rate for Taiwan
     **/
    const CodeType_TW_StandardInternationalFixedRate = 'TW_StandardInternationalFixedRate';

    /**
     * International Express Fixed Rate for Taiwan
     **/
    const CodeType_TW_ExpeditedInternationalFixedRate = 'TW_ExpeditedInternationalFixedRate';

    /**
     * USPS Global Express Guaranteed
     **/
    const CodeType_USPSGlobalExpressGuaranteed = 'USPSGlobalExpressGuaranteed';

    /**
     * Regular with Insurance
     **/
    const CodeType_AU_RegularWithInsurance = 'AU_RegularWithInsurance';

    /**
     * Express with Insurance
     **/
    const CodeType_AU_ExpressWithInsurance = 'AU_ExpressWithInsurance';

    /**
     * Deutsche Post Warensendung
     **/
    const CodeType_DE_DeutschePostWarensendungInternational = 'DE_DeutschePostWarensendungInternational';

    /**
     * Deutsche Post Byendung
     **/
    const CodeType_DE_DeutschePostByendung = 'DE_DeutschePostByendung';

    /**
     * Hermes Paket (unversichert)
     **/
    const CodeType_DE_HermesPaketUnversichertInternational = 'DE_HermesPaketUnversichertInternational';

    /**
     * Hermes Paket (versichert)
     **/
    const CodeType_DE_HermesPaketVersichertInternational = 'DE_HermesPaketVersichertInternational';

    /**
     * iloxx Transport XXL
     **/
    const CodeType_DE_iLoxxTransportXXLInternational = 'DE_iLoxxTransportXXLInternational';

    /**
     * iloxx Ubernacht Express
     **/
    const CodeType_DE_iLoxxUbernachtExpressInternational = 'DE_iLoxxUbernachtExpressInternational';

    /**
     * iloxx Standard
     **/
    const CodeType_DE_iLoxxStandardInternational = 'DE_iLoxxStandardInternational';

    /**
     * Standardpauschale fur internationalen Versand
     **/
    const CodeType_DE_StandardInternational = 'DE_StandardInternational';

    /**
     * Expresspauschale fur internationalen Versand
     **/
    const CodeType_DE_ExpeditedInternational = 'DE_ExpeditedInternational';

    /**
     * Deutsche Post Presse & Bucher Economy
     **/
    const CodeType_DE_DeutschePostBriefIntlEcon = 'DE_DeutschePostBriefIntlEcon';

    /**
     * Deutsche Post Presse & Bucher Priority
     **/
    const CodeType_DE_DeutschePostBriefIntlPri = 'DE_DeutschePostBriefIntlPri';

    /**
     * AT_BITTE_TREFFEN_SIE_EINE_AUSWAHL
     **/
    const CodeType_AT_BitteTreffenSieEineAuswahl = 'AT_BitteTreffenSieEineAuswahl';

    /**
     * Einschreiben (Versand inkl. Einschreibengebuhr)
     **/
    const CodeType_AT_EinschreibenVersandInklEinschreibengebuhr = 'AT_EinschreibenVersandInklEinschreibengebuhr';

    /**
     * Nachnahme (Versand inkl. Nachnahmegebuhr)
     **/
    const CodeType_AT_NachnahmeVersandInklNachnahmegebuhr = 'AT_NachnahmeVersandInklNachnahmegebuhr';

    /**
     * Express- oder Kurierversand
     **/
    const CodeType_AT_ExpressOrCourierInternational = 'AT_ExpressOrCourierInternational';

    /**
     * Versicherter Express- oder Kurierversand
     **/
    const CodeType_AT_InsuredExpressOrCourierInternational = 'AT_InsuredExpressOrCourierInternational';

    /**
     * Sonderversand (z.B. Sperrgut, KFZ)
     **/
    const CodeType_AT_SpecialDispatchInternational = 'AT_SpecialDispatchInternational';

    /**
     * Versicherter Sonderversand (z.B. Sperrgut, KFZ)
     **/
    const CodeType_AT_InsuredSpecialDispatchInternational = 'AT_InsuredSpecialDispatchInternational';

    /**
     * Standardpauschale fur internationalen Versand
     **/
    const CodeType_AT_StandardInternational = 'AT_StandardInternational';

    /**
     * Expresspauschale fur internationalen Versand
     **/
    const CodeType_AT_ExpeditedInternational = 'AT_ExpeditedInternational';

    /**
     * Sonstiger Versand (Siehe Artikelbeschreibung)
     **/
    const CodeType_AT_OtherInternationalShipping = 'AT_OtherInternationalShipping';

    /**
     * CH_BITTE_TREFFEN_SIE_EINE_AUSWAHL
     **/
    const CodeType_CH_BitteTreffenSieEineAuswahl = 'CH_BitteTreffenSieEineAuswahl';

    /**
     * Unversicherter Versand
     **/
    const CodeType_CH_UnversicherterVersand = 'CH_UnversicherterVersand';

    /**
     * Versicherter Versand
     **/
    const CodeType_CH_VersicherterVersand = 'CH_VersicherterVersand';

    /**
     * Einschreiben (Versand inkl. Einschreibengebuhr)
     **/
    const CodeType_CH_EinschreibenVersandInklEinschreibengebuhr = 'CH_EinschreibenVersandInklEinschreibengebuhr';

    /**
     * Nachnahme (Versand inkl. Nachnahmegebuhr)
     **/
    const CodeType_CH_NachnahmeVersandInklNachnahmegebuhr = 'CH_NachnahmeVersandInklNachnahmegebuhr';

    /**
     * Express- oder Kurierversand
     **/
    const CodeType_CH_ExpressOrCourierInternational = 'CH_ExpressOrCourierInternational';

    /**
     * Versicherter Express- oder Kurierversand
     **/
    const CodeType_CH_InsuredExpressOrCourierInternational = 'CH_InsuredExpressOrCourierInternational';

    /**
     * Sonderversand (z.B. Sperrgut, KFZ)
     **/
    const CodeType_CH_SonderversandZBSperrgutKFZ = 'CH_SonderversandZBSperrgutKFZ';

    /**
     * Versicherter Sonderversand (z.B. Sperrgut, KFZ)
     **/
    const CodeType_CH_VersicherterSonderversandZBSperrgutKFZ = 'CH_VersicherterSonderversandZBSperrgutKFZ';

    /**
     * Standardversand (A-Post/Priority)
     **/
    const CodeType_CH_StandardversandAPostPriority = 'CH_StandardversandAPostPriority';

    /**
     * Standardversand (B-Post/Economy)
     **/
    const CodeType_CH_StandardversandBPostEconomy = 'CH_StandardversandBPostEconomy';

    /**
     * DE_BITTE_TREFFEN_SIE_EINE_AUSWAHL
     **/
    const CodeType_DE_BitteTreffenSieEineAuswahl = 'DE_BitteTreffenSieEineAuswahl';

    /**
     * Einschreiben (Versand inkl. Einschreibengebuhr)
     **/
    const CodeType_DE_EinschreibenVersandInklEinschreibengebuhr = 'DE_EinschreibenVersandInklEinschreibengebuhr';

    /**
     * Nachnahme (Versand inkl. Nachnahmegebuhr)
     **/
    const CodeType_DE_NachnahmeVersandInklNachnahmegebuhr = 'DE_NachnahmeVersandInklNachnahmegebuhr';

    /**
     * Express- oder Kurierversand
     **/
    const CodeType_DE_ExpressOrCourierInternational = 'DE_ExpressOrCourierInternational';

    /**
     * Versicherter Express- oder Kurierversand
     **/
    const CodeType_DE_InsuredExpressOrCourierInternational = 'DE_InsuredExpressOrCourierInternational';

    /**
     * Sonderversand (z.B. Mobel, KFZ)
     **/
    const CodeType_DE_SonderversandZBMobelKFZ = 'DE_SonderversandZBMobelKFZ';

    /**
     * Versicherter Sonderversand (z.B. Mobel, KFZ)
     **/
    const CodeType_DE_VersicherterSonderversandZBMobelKFZ = 'DE_VersicherterSonderversandZBMobelKFZ';

    /**
     * Deutsche Post Brief
     **/
    const CodeType_DE_DeutschePostBriefInternational = 'DE_DeutschePostBriefInternational';

    /**
     * Standard Int'l Flat Rate Postage
     **/
    const CodeType_IE_StandardInternationalFlatRatePostage = 'IE_StandardInternationalFlatRatePostage';

    /**
     * Expedited Int'l Flat Rate Postage
     **/
    const CodeType_IE_ExpeditedInternationalFlatRatePostage = 'IE_ExpeditedInternationalFlatRatePostage';

    /**
     * Other Int'l Postage (see description)
     **/
    const CodeType_IE_OtherInternationalPostage = 'IE_OtherInternationalPostage';

    /**
     * Standard Int'l Flat Rate Postage
     **/
    const CodeType_UK_StandardInternationalFlatRatePostage = 'UK_StandardInternationalFlatRatePostage';

    /**
     * Expedited Int'l Flat Rate Postage
     **/
    const CodeType_UK_ExpeditedInternationalFlatRatePostage = 'UK_ExpeditedInternationalFlatRatePostage';

    /**
     * Other Int'l Postage (see description)
     **/
    const CodeType_UK_OtherInternationalPostage = 'UK_OtherInternationalPostage';

    /**
     * Chronopost - Chrono Relais
     **/
    const CodeType_FR_ChronopostChronoRelais = 'FR_ChronopostChronoRelais';

    /**
     * Chrono 10
     **/
    const CodeType_FR_Chrono10 = 'FR_Chrono10';

    /**
     * Chrono 13
     **/
    const CodeType_FR_Chrono13 = 'FR_Chrono13';

    /**
     * Chrono 18
     **/
    const CodeType_FR_Chrono18 = 'FR_Chrono18';

    /**
     * Chronopost Express International
     **/
    const CodeType_FR_ChronopostExpressInternational = 'FR_ChronopostExpressInternational';

    /**
     * PickUp Only Service
     **/
    const CodeType_Pickup = 'Pickup';

    /**
     * Delivery
     **/
    const CodeType_Delivery = 'Delivery';

    /**
     * Pickup Only Service
     **/
    const CodeType_CA_Pickup = 'CA_Pickup';

    /**
     * Abholung
     **/
    const CodeType_DE_Pickup = 'DE_Pickup';

    /**
     * Pickup
     **/
    const CodeType_AU_Pickup = 'AU_Pickup';

    /**
     * Small Parcels
     **/
    const CodeType_AU_SmallParcels = 'AU_SmallParcels';

    /**
     * Small Parcel With Tracking
     **/
    const CodeType_AU_SmallParcelWithTracking = 'AU_SmallParcelWithTracking';

    /**
     * Small Parcel With Tracking And Signature
     **/
    const CodeType_AU_SmallParcelWithTrackingAndSignature = 'AU_SmallParcelWithTrackingAndSignature';

    /**
     * Regular Parcel With Tracking
     **/
    const CodeType_AU_RegularParcelWithTracking = 'AU_RegularParcelWithTracking';

    /**
     * Regular Parcel With Tracking And Signature
     **/
    const CodeType_AU_RegularParcelWithTrackingAndSignature = 'AU_RegularParcelWithTrackingAndSignature';

    /**
     * PrePaid Express Post Satchel 5kg
     **/
    const CodeType_AU_PrePaidExpressPostSatchel5kg = 'AU_PrePaidExpressPostSatchel5kg';

    /**
     * PrePaid Parcel Post Satchels 500g
     **/
    const CodeType_AU_PrePaidParcelPostSatchels500g = 'AU_PrePaidParcelPostSatchels500g';

    /**
     * PrePaid Parcel Post Satchels 3kg
     **/
    const CodeType_AU_PrePaidParcelPostSatchels3kg = 'AU_PrePaidParcelPostSatchels3kg';

    /**
     * PrePaid Parcel Post Satchels 5kg
     **/
    const CodeType_AU_PrePaidParcelPostSatchels5kg = 'AU_PrePaidParcelPostSatchels5kg';

    /**
     * PrePaid Express Post Satchel 500g
     **/
    const CodeType_AU_PrePaidExpressPostSatchel500g = 'AU_PrePaidExpressPostSatchel500g';

    /**
     * PrePaid Express Post Satchel 3kg
     **/
    const CodeType_AU_PrePaidExpressPostSatchel3kg = 'AU_PrePaidExpressPostSatchel3kg';

    /**
     * PrePaid Express Post Platinum 500g
     **/
    const CodeType_AU_PrePaidExpressPostPlatinum500g = 'AU_PrePaidExpressPostPlatinum500g';

    /**
     * PrePaid Express Post Platinum 3kg
     **/
    const CodeType_AU_PrePaidExpressPostPlatinum3kg = 'AU_PrePaidExpressPostPlatinum3kg';

    /**
     * Express Courier International
     **/
    const CodeType_AU_ExpressCourierInternational = 'AU_ExpressCourierInternational';

    /**
     * Express Post International
     **/
    const CodeType_AU_ExpressPostInternational = 'AU_ExpressPostInternational';

    /**
     * PrePaid Express Post International Envelope C5
     **/
    const CodeType_AU_PrePaidExpressPostInternationalEnvelopeC5 = 'AU_PrePaidExpressPostInternationalEnvelopeC5';

    /**
     * PrePaid Express Post International Envelope B4
     **/
    const CodeType_AU_PrePaidExpressPostInternationalEnvelopeB4 = 'AU_PrePaidExpressPostInternationalEnvelopeB4';

    /**
     * PrePaid Express Post International Satchels 2kg
     **/
    const CodeType_AU_PrePaidExpressPostInternationalSatchels2kg = 'AU_PrePaidExpressPostInternationalSatchels2kg';

    /**
     * PrePaid Express Post International Satchels 3kg
     **/
    const CodeType_AU_PrePaidExpressPostInternationalSatchels3kg = 'AU_PrePaidExpressPostInternationalSatchels3kg';

    /**
     * PrePaid Express Post International Box 5kg
     **/
    const CodeType_AU_PrePaidExpressPostInternationalBox5kg = 'AU_PrePaidExpressPostInternationalBox5kg';

    /**
     * PrePaid Express Post International Box 10kg
     **/
    const CodeType_AU_PrePaidExpressPostInternationalBox10kg = 'AU_PrePaidExpressPostInternationalBox10kg';

    /**
     * PrePaid Express Post International Box 20kg
     **/
    const CodeType_AU_PrePaidExpressPostInternationalBox20kg = 'AU_PrePaidExpressPostInternationalBox20kg';

    /**
     * Registered Parcel Post
     **/
    const CodeType_AU_RegisteredParcelPost = 'AU_RegisteredParcelPost';

    /**
     * Registered Small Parcel
     **/
    const CodeType_AU_RegisteredSmallParcel = 'AU_RegisteredSmallParcel';

    /**
     * Registered Parcel Post Prepaid Satchel 500g
     **/
    const CodeType_AU_RegisteredParcelPostPrepaidSatchel500g = 'AU_RegisteredParcelPostPrepaidSatchel500g';

    /**
     * Registered Parcel Post Prepaid Satchel 3kg
     **/
    const CodeType_AU_RegisteredParcelPostPrepaidSatchel3kg = 'AU_RegisteredParcelPostPrepaidSatchel3kg';

    /**
     * Registered Parcel Post Prepaid Satchel 5kg
     **/
    const CodeType_AU_RegisteredParcelPostPrepaidSatchel5kg = 'AU_RegisteredParcelPostPrepaidSatchel5kg';

    /**
     * eBay Australia Post Express Post 500g Satchel
     **/
    const CodeType_AU_ExpressPostSatchel500g = 'AU_ExpressPostSatchel500g';

    /**
     * eBay Australia Post Express Post 3kg Satchel
     **/
    const CodeType_AU_ExpressPostSatchel3kg = 'AU_ExpressPostSatchel3kg';

    /**
     * Enlevement
     **/
    const CodeType_FR_Pickup = 'FR_Pickup';

    /**
     * Pickup
     **/
    const CodeType_AT_Pickup = 'AT_Pickup';

    /**
     * Afhalen
     **/
    const CodeType_BENL_Pickup = 'BENL_Pickup';

    /**
     * Pickup
     **/
    const CodeType_BEFR_Pickup = 'BEFR_Pickup';

    /**
     * Pickup
     **/
    const CodeType_CH_Pickup = 'CH_Pickup';

    /**
     * Pickup
     **/
    const CodeType_IT_Pickup = 'IT_Pickup';

    /**
     * Pickup
     **/
    const CodeType_NL_Pickup = 'NL_Pickup';

    /**
     * Pickup
     **/
    const CodeType_PL_Pickup = 'PL_Pickup';

    /**
     * Pickup
     **/
    const CodeType_ES_Pickup = 'ES_Pickup';

    /**
     * Pickup
     **/
    const CodeType_SG_Delivery = 'SG_Delivery';

    /**
     * Other 24 Hour Courier
     **/
    const CodeType_UK_OtherCourier24 = 'UK_OtherCourier24';

    /**
     * Other 48 Hour Courier
     **/
    const CodeType_UK_OtherCourier48 = 'UK_OtherCourier48';

    /**
     * Other Courier 3 days
     **/
    const CodeType_UK_OtherCourier3Days = 'UK_OtherCourier3Days';

    /**
     * Other Courier 5 days
     **/
    const CodeType_UK_OtherCourier5Days = 'UK_OtherCourier5Days';

    /**
     * Courier Shipping
     **/
    const CodeType_Courier = 'Courier';

    /**
     * FedEx Priority Overnight
     **/
    const CodeType_FedExPriorityOvernight = 'FedExPriorityOvernight';

    /**
     * FedEx Standard Overnight
     **/
    const CodeType_FedExStandardOvernight = 'FedExStandardOvernight';

    /**
     * FedEx 2Day
     **/
    const CodeType_FedEx2Day = 'FedEx2Day';

    /**
     * FedEx Ground
     **/
    const CodeType_FedExGround = 'FedExGround';

    /**
     * FedEx Home Delivery
     **/
    const CodeType_FedExHomeDelivery = 'FedExHomeDelivery';

    /**
     * FedEx Express Saver
     **/
    const CodeType_FedExExpressSaver = 'FedExExpressSaver';

    /**
     * Reserved for internal or future use
     **/
    const CodeType_FedExGroundDisabled = 'FedExGroundDisabled';

    /**
     * Reserved for internal or future use
     **/
    const CodeType_FedExHomeDeliveryDisabled = 'FedExHomeDeliveryDisabled';

    /**
     * FedEx International First
     **/
    const CodeType_FedExInternationalFirst = 'FedExInternationalFirst';

    /**
     * FedEx International Priority
     **/
    const CodeType_FedExInternationalPriority = 'FedExInternationalPriority';

    /**
     * FedEx International Economy
     **/
    const CodeType_FedExInternationalEconomy = 'FedExInternationalEconomy';

    /**
     * FedEx International Ground
     **/
    const CodeType_FedExInternationalGround = 'FedExInternationalGround';

    /**
     * Economy shipping from outside US
     **/
    const CodeType_EconomyShippingFromOutsideUS = 'EconomyShippingFromOutsideUS';

    /**
     * Expedited shipping from outside US
     **/
    const CodeType_ExpeditedShippingFromOutsideUS = 'ExpeditedShippingFromOutsideUS';

    /**
     * Standard shipping from outside US
     **/
    const CodeType_StandardShippingFromOutsideUS = 'StandardShippingFromOutsideUS';

    /**
     * Economy postage from outside UK
     **/
    const CodeType_UK_EconomyShippingFromOutside = 'UK_EconomyShippingFromOutside';

    /**
     * Express postage from outside UK
     **/
    const CodeType_UK_ExpeditedShippingFromOutside = 'UK_ExpeditedShippingFromOutside';

    /**
     * Standard postage from outside UK
     **/
    const CodeType_UK_StandardShippingFromOutside = 'UK_StandardShippingFromOutside';

    /**
     * Economy postage from outside DE
     **/
    const CodeType_DE_SparversandAusDemAusland = 'DE_SparversandAusDemAusland';

    /**
     * Standard postage from outside DE
     **/
    const CodeType_DE_StandardversandAusDemAusland = 'DE_StandardversandAusDemAusland';

    /**
     * Express postage from outside DE
     **/
    const CodeType_DE_ExpressversandAusDemAusland = 'DE_ExpressversandAusDemAusland';

    /**
     * DHL 2kg Paket (nur fuer kurze Zeit)
     **/
    const CodeType_DE_DHL2KGPaket = 'DE_DHL2KGPaket';

    /**
     * Global Shipping Program
     * 
     * This shipping service must be selected for the international leg of the shipment.
     **/
    const CodeType_InternationalPriorityShipping = 'InternationalPriorityShipping';

    /**
     * Reserved for future use.
     **/
    const CodeType_SameDayShipping = 'SameDayShipping';

    /**
     * Royal Mail Tracked 24
     **/
    const CodeType_UK_RoyalMailNextDay = 'UK_RoyalMailNextDay';

    /**
     * Royal Mail Tracked 48
     **/
    const CodeType_UK_RoyalMailTracked = 'UK_RoyalMailTracked';

    /**
     * This value indicates that the order will be delivered by an eBay On Demand valet through the eBay On Demand
     * Delivery program.
     **/
    const CodeType_eBayNowImmediateDelivery = 'eBayNowImmediateDelivery';
    
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
     * @return ShippingServiceCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param ShippingServiceCodeType|null $value
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
    public function isUPSGround()
    {
        return $this->_value === self::CodeType_UPSGround;
    }

    /**
     * @return bool
     */
    public function isUPS3rdDay()
    {
        return $this->_value === self::CodeType_UPS3rdDay;
    }

    /**
     * @return bool
     */
    public function isUPS2ndDay()
    {
        return $this->_value === self::CodeType_UPS2ndDay;
    }

    /**
     * @return bool
     */
    public function isUPSNextDay()
    {
        return $this->_value === self::CodeType_UPSNextDay;
    }

    /**
     * @return bool
     */
    public function isUSPSPriority()
    {
        return $this->_value === self::CodeType_USPSPriority;
    }

    /**
     * @return bool
     */
    public function isUSPSParcel()
    {
        return $this->_value === self::CodeType_USPSParcel;
    }

    /**
     * @return bool
     */
    public function isUSPSStandardPost()
    {
        return $this->_value === self::CodeType_USPSStandardPost;
    }

    /**
     * @return bool
     */
    public function isUSPSMedia()
    {
        return $this->_value === self::CodeType_USPSMedia;
    }

    /**
     * @return bool
     */
    public function isUSPSFirstClass()
    {
        return $this->_value === self::CodeType_USPSFirstClass;
    }

    /**
     * @return bool
     */
    public function isShippingMethodStandard()
    {
        return $this->_value === self::CodeType_ShippingMethodStandard;
    }

    /**
     * @return bool
     */
    public function isShippingMethodExpress()
    {
        return $this->_value === self::CodeType_ShippingMethodExpress;
    }

    /**
     * @return bool
     */
    public function isUSPSExpressMail()
    {
        return $this->_value === self::CodeType_USPSExpressMail;
    }

    /**
     * @return bool
     */
    public function isUPSNextDayAir()
    {
        return $this->_value === self::CodeType_UPSNextDayAir;
    }

    /**
     * @return bool
     */
    public function isUPS2DayAirAM()
    {
        return $this->_value === self::CodeType_UPS2DayAirAM;
    }

    /**
     * @return bool
     */
    public function isUSPSExpressMailFlatRateEnvelope()
    {
        return $this->_value === self::CodeType_USPSExpressMailFlatRateEnvelope;
    }

    /**
     * @return bool
     */
    public function isUSPSExpressMailPaddedFlatRateEnvelope()
    {
        return $this->_value === self::CodeType_USPSExpressMailPaddedFlatRateEnvelope;
    }

    /**
     * @return bool
     */
    public function isUSPSPriorityMailFlatRateEnvelope()
    {
        return $this->_value === self::CodeType_USPSPriorityMailFlatRateEnvelope;
    }

    /**
     * @return bool
     */
    public function isUSPSPriorityMailSmallFlatRateBox()
    {
        return $this->_value === self::CodeType_USPSPriorityMailSmallFlatRateBox;
    }

    /**
     * @return bool
     */
    public function isUSPSPriorityMailFlatRateBox()
    {
        return $this->_value === self::CodeType_USPSPriorityMailFlatRateBox;
    }

    /**
     * @return bool
     */
    public function isUSPSPriorityMailLargeFlatRateBox()
    {
        return $this->_value === self::CodeType_USPSPriorityMailLargeFlatRateBox;
    }

    /**
     * @return bool
     */
    public function isUSPSPriorityMailPaddedFlatRateEnvelope()
    {
        return $this->_value === self::CodeType_USPSPriorityMailPaddedFlatRateEnvelope;
    }

    /**
     * @return bool
     */
    public function isUSPSPriorityMailLegalFlatRateEnvelope()
    {
        return $this->_value === self::CodeType_USPSPriorityMailLegalFlatRateEnvelope;
    }

    /**
     * @return bool
     */
    public function isUSPSExpressMailLegalFlatRateEnvelope()
    {
        return $this->_value === self::CodeType_USPSExpressMailLegalFlatRateEnvelope;
    }

    /**
     * @return bool
     */
    public function isUSPSPriorityMailRegionalBoxA()
    {
        return $this->_value === self::CodeType_USPSPriorityMailRegionalBoxA;
    }

    /**
     * @return bool
     */
    public function isUSPSPriorityMailRegionalBoxB()
    {
        return $this->_value === self::CodeType_USPSPriorityMailRegionalBoxB;
    }

    /**
     * @return bool
     */
    public function isUSPSPriorityMailRegionalBoxC()
    {
        return $this->_value === self::CodeType_USPSPriorityMailRegionalBoxC;
    }

    /**
     * @return bool
     */
    public function isUSPSExpressMailFlatRateBox()
    {
        return $this->_value === self::CodeType_USPSExpressMailFlatRateBox;
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
    public function isLocalDelivery()
    {
        return $this->_value === self::CodeType_LocalDelivery;
    }

    /**
     * @return bool
     */
    public function isNotSelected()
    {
        return $this->_value === self::CodeType_NotSelected;
    }

    /**
     * @return bool
     */
    public function isInternationalNotSelected()
    {
        return $this->_value === self::CodeType_InternationalNotSelected;
    }

    /**
     * @return bool
     */
    public function isStandardInternational()
    {
        return $this->_value === self::CodeType_StandardInternational;
    }

    /**
     * @return bool
     */
    public function isExpeditedInternational()
    {
        return $this->_value === self::CodeType_ExpeditedInternational;
    }

    /**
     * @return bool
     */
    public function isUSPSGlobalExpress()
    {
        return $this->_value === self::CodeType_USPSGlobalExpress;
    }

    /**
     * @return bool
     */
    public function isUSPSGlobalPriority()
    {
        return $this->_value === self::CodeType_USPSGlobalPriority;
    }

    /**
     * @return bool
     */
    public function isUSPSEconomyParcel()
    {
        return $this->_value === self::CodeType_USPSEconomyParcel;
    }

    /**
     * @return bool
     */
    public function isUSPSEconomyLetter()
    {
        return $this->_value === self::CodeType_USPSEconomyLetter;
    }

    /**
     * @return bool
     */
    public function isUSPSAirmailLetter()
    {
        return $this->_value === self::CodeType_USPSAirmailLetter;
    }

    /**
     * @return bool
     */
    public function isUSPSAirmailParcel()
    {
        return $this->_value === self::CodeType_USPSAirmailParcel;
    }

    /**
     * @return bool
     */
    public function isUPSWorldWideExpressPlus()
    {
        return $this->_value === self::CodeType_UPSWorldWideExpressPlus;
    }

    /**
     * @return bool
     */
    public function isUPSWorldWideExpress()
    {
        return $this->_value === self::CodeType_UPSWorldWideExpress;
    }

    /**
     * @return bool
     */
    public function isUPSWorldWideExpedited()
    {
        return $this->_value === self::CodeType_UPSWorldWideExpedited;
    }

    /**
     * @return bool
     */
    public function isUPSWorldwideSaver()
    {
        return $this->_value === self::CodeType_UPSWorldwideSaver;
    }

    /**
     * @return bool
     */
    public function isUPSStandardToCanada()
    {
        return $this->_value === self::CodeType_UPSStandardToCanada;
    }

    /**
     * @return bool
     */
    public function isUSPSExpressMailInternationalFlatRateEnvelope()
    {
        return $this->_value === self::CodeType_USPSExpressMailInternationalFlatRateEnvelope;
    }

    /**
     * @return bool
     */
    public function isUSPSExpressMailInternationalPaddedFlatRateEnvelope()
    {
        return $this->_value === self::CodeType_USPSExpressMailInternationalPaddedFlatRateEnvelope;
    }

    /**
     * @return bool
     */
    public function isUSPSPriorityMailInternationalFlatRateEnvelope()
    {
        return $this->_value === self::CodeType_USPSPriorityMailInternationalFlatRateEnvelope;
    }

    /**
     * @return bool
     */
    public function isUSPSPriorityMailInternationalSmallFlatRateBox()
    {
        return $this->_value === self::CodeType_USPSPriorityMailInternationalSmallFlatRateBox;
    }

    /**
     * @return bool
     */
    public function isUSPSPriorityMailInternationalFlatRateBox()
    {
        return $this->_value === self::CodeType_USPSPriorityMailInternationalFlatRateBox;
    }

    /**
     * @return bool
     */
    public function isUSPSPriorityMailInternationalLargeFlatRateBox()
    {
        return $this->_value === self::CodeType_USPSPriorityMailInternationalLargeFlatRateBox;
    }

    /**
     * @return bool
     */
    public function isUSPSPriorityMailInternationalPaddedFlatRateEnvelope()
    {
        return $this->_value === self::CodeType_USPSPriorityMailInternationalPaddedFlatRateEnvelope;
    }

    /**
     * @return bool
     */
    public function isUSPSPriorityMailInternationalLegalFlatRateEnvelope()
    {
        return $this->_value === self::CodeType_USPSPriorityMailInternationalLegalFlatRateEnvelope;
    }

    /**
     * @return bool
     */
    public function isUSPSExpressMailInternationalLegalFlatRateEnvelope()
    {
        return $this->_value === self::CodeType_USPSExpressMailInternationalLegalFlatRateEnvelope;
    }

    /**
     * @return bool
     */
    public function isUSPSExpressMailInternationalFlatRateBox()
    {
        return $this->_value === self::CodeType_USPSExpressMailInternationalFlatRateBox;
    }

    /**
     * @return bool
     */
    public function isOtherInternational()
    {
        return $this->_value === self::CodeType_OtherInternational;
    }

    /**
     * @return bool
     */
    public function isAT_StandardDispatch()
    {
        return $this->_value === self::CodeType_AT_StandardDispatch;
    }

    /**
     * @return bool
     */
    public function isAT_InsuredDispatch()
    {
        return $this->_value === self::CodeType_AT_InsuredDispatch;
    }

    /**
     * @return bool
     */
    public function isAT_Writing()
    {
        return $this->_value === self::CodeType_AT_Writing;
    }

    /**
     * @return bool
     */
    public function isAT_COD()
    {
        return $this->_value === self::CodeType_AT_COD;
    }

    /**
     * @return bool
     */
    public function isAT_ExpressOrCourier()
    {
        return $this->_value === self::CodeType_AT_ExpressOrCourier;
    }

    /**
     * @return bool
     */
    public function isAT_InsuredExpressOrCourier()
    {
        return $this->_value === self::CodeType_AT_InsuredExpressOrCourier;
    }

    /**
     * @return bool
     */
    public function isAT_SpecialDispatch()
    {
        return $this->_value === self::CodeType_AT_SpecialDispatch;
    }

    /**
     * @return bool
     */
    public function isAT_InsuredSpecialDispatch()
    {
        return $this->_value === self::CodeType_AT_InsuredSpecialDispatch;
    }

    /**
     * @return bool
     */
    public function isAT_Sonstige()
    {
        return $this->_value === self::CodeType_AT_Sonstige;
    }

    /**
     * @return bool
     */
    public function isAT_UnversicherterVersandInternational()
    {
        return $this->_value === self::CodeType_AT_UnversicherterVersandInternational;
    }

    /**
     * @return bool
     */
    public function isAT_VersicherterVersandInternational()
    {
        return $this->_value === self::CodeType_AT_VersicherterVersandInternational;
    }

    /**
     * @return bool
     */
    public function isAT_SonstigerVersandInternational()
    {
        return $this->_value === self::CodeType_AT_SonstigerVersandInternational;
    }

    /**
     * @return bool
     */
    public function isAT_UnversicherterExpressVersandInternational()
    {
        return $this->_value === self::CodeType_AT_UnversicherterExpressVersandInternational;
    }

    /**
     * @return bool
     */
    public function isAT_VersicherterExpressVersandInternational()
    {
        return $this->_value === self::CodeType_AT_VersicherterExpressVersandInternational;
    }

    /**
     * @return bool
     */
    public function isAT_EconomyDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_AT_EconomyDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isAT_StandardDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_AT_StandardDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isAT_ExpressDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_AT_ExpressDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isAT_TrackedDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_AT_TrackedDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isAU_Regular()
    {
        return $this->_value === self::CodeType_AU_Regular;
    }

    /**
     * @return bool
     */
    public function isAU_Express()
    {
        return $this->_value === self::CodeType_AU_Express;
    }

    /**
     * @return bool
     */
    public function isAU_Registered()
    {
        return $this->_value === self::CodeType_AU_Registered;
    }

    /**
     * @return bool
     */
    public function isAU_Courier()
    {
        return $this->_value === self::CodeType_AU_Courier;
    }

    /**
     * @return bool
     */
    public function isAU_Other()
    {
        return $this->_value === self::CodeType_AU_Other;
    }

    /**
     * @return bool
     */
    public function isAU_EMSInternationalCourierParcels()
    {
        return $this->_value === self::CodeType_AU_EMSInternationalCourierParcels;
    }

    /**
     * @return bool
     */
    public function isAU_EMSInternationalCourierDocuments()
    {
        return $this->_value === self::CodeType_AU_EMSInternationalCourierDocuments;
    }

    /**
     * @return bool
     */
    public function isAU_ExpressPostInternationalDocuments()
    {
        return $this->_value === self::CodeType_AU_ExpressPostInternationalDocuments;
    }

    /**
     * @return bool
     */
    public function isAU_AirMailInternational()
    {
        return $this->_value === self::CodeType_AU_AirMailInternational;
    }

    /**
     * @return bool
     */
    public function isAU_EconomyAirInternational()
    {
        return $this->_value === self::CodeType_AU_EconomyAirInternational;
    }

    /**
     * @return bool
     */
    public function isAU_SeaMailInternational()
    {
        return $this->_value === self::CodeType_AU_SeaMailInternational;
    }

    /**
     * @return bool
     */
    public function isAU_StandardInternational()
    {
        return $this->_value === self::CodeType_AU_StandardInternational;
    }

    /**
     * @return bool
     */
    public function isAU_ExpeditedInternational()
    {
        return $this->_value === self::CodeType_AU_ExpeditedInternational;
    }

    /**
     * @return bool
     */
    public function isAU_OtherInternational()
    {
        return $this->_value === self::CodeType_AU_OtherInternational;
    }

    /**
     * @return bool
     */
    public function isAU_AusPostRegisteredPostInternationalPaddedBag1kg()
    {
        return $this->_value === self::CodeType_AU_AusPostRegisteredPostInternationalPaddedBag1kg;
    }

    /**
     * @return bool
     */
    public function isAU_AusPostRegisteredPostInternationalPaddedBag500g()
    {
        return $this->_value === self::CodeType_AU_AusPostRegisteredPostInternationalPaddedBag500g;
    }

    /**
     * @return bool
     */
    public function isAU_AusPostRegisteredPostInternationalParcel()
    {
        return $this->_value === self::CodeType_AU_AusPostRegisteredPostInternationalParcel;
    }

    /**
     * @return bool
     */
    public function isAU_ExpeditedDeliveryFromOutsideAU()
    {
        return $this->_value === self::CodeType_AU_ExpeditedDeliveryFromOutsideAU;
    }

    /**
     * @return bool
     */
    public function isAU_EconomyDeliveryFromOutsideAU()
    {
        return $this->_value === self::CodeType_AU_EconomyDeliveryFromOutsideAU;
    }

    /**
     * @return bool
     */
    public function isAU_StandardDeliveryFromOutsideAU()
    {
        return $this->_value === self::CodeType_AU_StandardDeliveryFromOutsideAU;
    }

    /**
     * @return bool
     */
    public function isAU_AustralianAirExpressMetro15kg()
    {
        return $this->_value === self::CodeType_AU_AustralianAirExpressMetro15kg;
    }

    /**
     * @return bool
     */
    public function isAU_AustralianAirExpressFlatRate5kg()
    {
        return $this->_value === self::CodeType_AU_AustralianAirExpressFlatRate5kg;
    }

    /**
     * @return bool
     */
    public function isAU_AustralianAirExpressFlatRate3kg()
    {
        return $this->_value === self::CodeType_AU_AustralianAirExpressFlatRate3kg;
    }

    /**
     * @return bool
     */
    public function isAU_AustralianAirExpressFlatRate1kg()
    {
        return $this->_value === self::CodeType_AU_AustralianAirExpressFlatRate1kg;
    }

    /**
     * @return bool
     */
    public function isAU_ExpressDelivery()
    {
        return $this->_value === self::CodeType_AU_ExpressDelivery;
    }

    /**
     * @return bool
     */
    public function isAU_StandardDelivery()
    {
        return $this->_value === self::CodeType_AU_StandardDelivery;
    }

    /**
     * @return bool
     */
    public function isAU_eBayAusPost3kgFlatRateSatchel()
    {
        return $this->_value === self::CodeType_AU_eBayAusPost3kgFlatRateSatchel;
    }

    /**
     * @return bool
     */
    public function isAU_eBayAusPost500gFlatRateSatchel()
    {
        return $this->_value === self::CodeType_AU_eBayAusPost500gFlatRateSatchel;
    }

    /**
     * @return bool
     */
    public function isAU_Freight()
    {
        return $this->_value === self::CodeType_AU_Freight;
    }

    /**
     * @return bool
     */
    public function isBEFR_StandardDelivery()
    {
        return $this->_value === self::CodeType_BEFR_StandardDelivery;
    }

    /**
     * @return bool
     */
    public function isBEFR_PriorityDelivery()
    {
        return $this->_value === self::CodeType_BEFR_PriorityDelivery;
    }

    /**
     * @return bool
     */
    public function isBEFR_ParcelPost()
    {
        return $this->_value === self::CodeType_BEFR_ParcelPost;
    }

    /**
     * @return bool
     */
    public function isBEFR_RegisteredMail()
    {
        return $this->_value === self::CodeType_BEFR_RegisteredMail;
    }

    /**
     * @return bool
     */
    public function isBEFR_Other()
    {
        return $this->_value === self::CodeType_BEFR_Other;
    }

    /**
     * @return bool
     */
    public function isBEFR_DePostInternational()
    {
        return $this->_value === self::CodeType_BEFR_DePostInternational;
    }

    /**
     * @return bool
     */
    public function isBEFR_UPSInternational()
    {
        return $this->_value === self::CodeType_BEFR_UPSInternational;
    }

    /**
     * @return bool
     */
    public function isBEFR_FedExInternational()
    {
        return $this->_value === self::CodeType_BEFR_FedExInternational;
    }

    /**
     * @return bool
     */
    public function isBEFR_DHLInternational()
    {
        return $this->_value === self::CodeType_BEFR_DHLInternational;
    }

    /**
     * @return bool
     */
    public function isBEFR_TPGPostTNTInternational()
    {
        return $this->_value === self::CodeType_BEFR_TPGPostTNTInternational;
    }

    /**
     * @return bool
     */
    public function isBEFR_StandardInternational()
    {
        return $this->_value === self::CodeType_BEFR_StandardInternational;
    }

    /**
     * @return bool
     */
    public function isBEFR_ExpeditedInternational()
    {
        return $this->_value === self::CodeType_BEFR_ExpeditedInternational;
    }

    /**
     * @return bool
     */
    public function isBEFR_OtherInternational()
    {
        return $this->_value === self::CodeType_BEFR_OtherInternational;
    }

    /**
     * @return bool
     */
    public function isBEFR_LaPosteInternational()
    {
        return $this->_value === self::CodeType_BEFR_LaPosteInternational;
    }

    /**
     * @return bool
     */
    public function isBEFR_LaPosteStandardShipping()
    {
        return $this->_value === self::CodeType_BEFR_LaPosteStandardShipping;
    }

    /**
     * @return bool
     */
    public function isBEFR_LaPosteCertifiedShipping()
    {
        return $this->_value === self::CodeType_BEFR_LaPosteCertifiedShipping;
    }

    /**
     * @return bool
     */
    public function isBEFR_LaPosteTaxipostLLS()
    {
        return $this->_value === self::CodeType_BEFR_LaPosteTaxipostLLS;
    }

    /**
     * @return bool
     */
    public function isBEFR_LaPosteTaxipost24h()
    {
        return $this->_value === self::CodeType_BEFR_LaPosteTaxipost24h;
    }

    /**
     * @return bool
     */
    public function isBEFR_LaPosteTaxipostSecur()
    {
        return $this->_value === self::CodeType_BEFR_LaPosteTaxipostSecur;
    }

    /**
     * @return bool
     */
    public function isBEFR_PostInternationalStandard()
    {
        return $this->_value === self::CodeType_BEFR_PostInternationalStandard;
    }

    /**
     * @return bool
     */
    public function isBEFR_PostInternationalRegistered()
    {
        return $this->_value === self::CodeType_BEFR_PostInternationalRegistered;
    }

    /**
     * @return bool
     */
    public function isBEFR_TNTInternational()
    {
        return $this->_value === self::CodeType_BEFR_TNTInternational;
    }

    /**
     * @return bool
     */
    public function isBEFR_EconomyDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_BEFR_EconomyDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isBEFR_StandardDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_BEFR_StandardDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isBEFR_ExpressDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_BEFR_ExpressDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isBEFR_TrackedDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_BEFR_TrackedDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isBENL_StandardDelivery()
    {
        return $this->_value === self::CodeType_BENL_StandardDelivery;
    }

    /**
     * @return bool
     */
    public function isBENL_PriorityDelivery()
    {
        return $this->_value === self::CodeType_BENL_PriorityDelivery;
    }

    /**
     * @return bool
     */
    public function isBENL_ParcelPost()
    {
        return $this->_value === self::CodeType_BENL_ParcelPost;
    }

    /**
     * @return bool
     */
    public function isBENL_RegisteredMail()
    {
        return $this->_value === self::CodeType_BENL_RegisteredMail;
    }

    /**
     * @return bool
     */
    public function isBENL_Other()
    {
        return $this->_value === self::CodeType_BENL_Other;
    }

    /**
     * @return bool
     */
    public function isBENL_DePostInternational()
    {
        return $this->_value === self::CodeType_BENL_DePostInternational;
    }

    /**
     * @return bool
     */
    public function isBENL_UPSInternational()
    {
        return $this->_value === self::CodeType_BENL_UPSInternational;
    }

    /**
     * @return bool
     */
    public function isBENL_FedExInternational()
    {
        return $this->_value === self::CodeType_BENL_FedExInternational;
    }

    /**
     * @return bool
     */
    public function isBENL_DHLInternational()
    {
        return $this->_value === self::CodeType_BENL_DHLInternational;
    }

    /**
     * @return bool
     */
    public function isBENL_TPGPostTNTInternational()
    {
        return $this->_value === self::CodeType_BENL_TPGPostTNTInternational;
    }

    /**
     * @return bool
     */
    public function isBENL_StandardInternational()
    {
        return $this->_value === self::CodeType_BENL_StandardInternational;
    }

    /**
     * @return bool
     */
    public function isBENL_ExpeditedInternational()
    {
        return $this->_value === self::CodeType_BENL_ExpeditedInternational;
    }

    /**
     * @return bool
     */
    public function isBENL_OtherInternational()
    {
        return $this->_value === self::CodeType_BENL_OtherInternational;
    }

    /**
     * @return bool
     */
    public function isBENL_LaPosteInternational()
    {
        return $this->_value === self::CodeType_BENL_LaPosteInternational;
    }

    /**
     * @return bool
     */
    public function isBENL_DePostStandardShipping()
    {
        return $this->_value === self::CodeType_BENL_DePostStandardShipping;
    }

    /**
     * @return bool
     */
    public function isBENL_DePostCertifiedShipping()
    {
        return $this->_value === self::CodeType_BENL_DePostCertifiedShipping;
    }

    /**
     * @return bool
     */
    public function isBENL_DePostTaxipostLLS()
    {
        return $this->_value === self::CodeType_BENL_DePostTaxipostLLS;
    }

    /**
     * @return bool
     */
    public function isBENL_DePostTaxipost24h()
    {
        return $this->_value === self::CodeType_BENL_DePostTaxipost24h;
    }

    /**
     * @return bool
     */
    public function isBENL_DePostTaxipostSecur()
    {
        return $this->_value === self::CodeType_BENL_DePostTaxipostSecur;
    }

    /**
     * @return bool
     */
    public function isBENL_OtherShippingMethods()
    {
        return $this->_value === self::CodeType_BENL_OtherShippingMethods;
    }

    /**
     * @return bool
     */
    public function isBENL_PostInternationalStandard()
    {
        return $this->_value === self::CodeType_BENL_PostInternationalStandard;
    }

    /**
     * @return bool
     */
    public function isBENL_PostInternationalRegistered()
    {
        return $this->_value === self::CodeType_BENL_PostInternationalRegistered;
    }

    /**
     * @return bool
     */
    public function isBENL_TNTInternational()
    {
        return $this->_value === self::CodeType_BENL_TNTInternational;
    }

    /**
     * @return bool
     */
    public function isBENL_EconomyDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_BENL_EconomyDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isBENL_StandardDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_BENL_StandardDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isBENL_ExpressDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_BENL_ExpressDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isBENL_TrackedDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_BENL_TrackedDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isCA_StandardDelivery()
    {
        return $this->_value === self::CodeType_CA_StandardDelivery;
    }

    /**
     * @return bool
     */
    public function isCA_ExpeditedDelivery()
    {
        return $this->_value === self::CodeType_CA_ExpeditedDelivery;
    }

    /**
     * @return bool
     */
    public function isCA_PostLettermail()
    {
        return $this->_value === self::CodeType_CA_PostLettermail;
    }

    /**
     * @return bool
     */
    public function isCA_PostRegularParcel()
    {
        return $this->_value === self::CodeType_CA_PostRegularParcel;
    }

    /**
     * @return bool
     */
    public function isCA_PostExpeditedParcel()
    {
        return $this->_value === self::CodeType_CA_PostExpeditedParcel;
    }

    /**
     * @return bool
     */
    public function isCA_PostXpresspost()
    {
        return $this->_value === self::CodeType_CA_PostXpresspost;
    }

    /**
     * @return bool
     */
    public function isCA_PostPriorityCourier()
    {
        return $this->_value === self::CodeType_CA_PostPriorityCourier;
    }

    /**
     * @return bool
     */
    public function isCanadaPostExpeditedFlatRateBox()
    {
        return $this->_value === self::CodeType_CanadaPostExpeditedFlatRateBox;
    }

    /**
     * @return bool
     */
    public function isCA_PostExpeditedFlatRateBox()
    {
        return $this->_value === self::CodeType_CA_PostExpeditedFlatRateBox;
    }

    /**
     * @return bool
     */
    public function isCA_StandardInternational()
    {
        return $this->_value === self::CodeType_CA_StandardInternational;
    }

    /**
     * @return bool
     */
    public function isCA_ExpeditedInternational()
    {
        return $this->_value === self::CodeType_CA_ExpeditedInternational;
    }

    /**
     * @return bool
     */
    public function isCA_OtherInternational()
    {
        return $this->_value === self::CodeType_CA_OtherInternational;
    }

    /**
     * @return bool
     */
    public function isCA_PostExpeditedParcelUSA()
    {
        return $this->_value === self::CodeType_CA_PostExpeditedParcelUSA;
    }

    /**
     * @return bool
     */
    public function isCA_PostSmallPacketsUSA()
    {
        return $this->_value === self::CodeType_CA_PostSmallPacketsUSA;
    }

    /**
     * @return bool
     */
    public function isCA_PostXpresspostUSA()
    {
        return $this->_value === self::CodeType_CA_PostXpresspostUSA;
    }

    /**
     * @return bool
     */
    public function isCA_PostXpresspostInternational()
    {
        return $this->_value === self::CodeType_CA_PostXpresspostInternational;
    }

    /**
     * @return bool
     */
    public function isCA_PostInternationalParcelSurface()
    {
        return $this->_value === self::CodeType_CA_PostInternationalParcelSurface;
    }

    /**
     * @return bool
     */
    public function isCA_PostInternationalParcelAir()
    {
        return $this->_value === self::CodeType_CA_PostInternationalParcelAir;
    }

    /**
     * @return bool
     */
    public function isCA_SmallPacketsInternational()
    {
        return $this->_value === self::CodeType_CA_SmallPacketsInternational;
    }

    /**
     * @return bool
     */
    public function isCA_PurolatorInternational()
    {
        return $this->_value === self::CodeType_CA_PurolatorInternational;
    }

    /**
     * @return bool
     */
    public function isCA_PostSmallPacketsUSAGround()
    {
        return $this->_value === self::CodeType_CA_PostSmallPacketsUSAGround;
    }

    /**
     * @return bool
     */
    public function isCA_PostSmallPacketsUSAAir()
    {
        return $this->_value === self::CodeType_CA_PostSmallPacketsUSAAir;
    }

    /**
     * @return bool
     */
    public function isCA_SmallPacketsInternationalGround()
    {
        return $this->_value === self::CodeType_CA_SmallPacketsInternationalGround;
    }

    /**
     * @return bool
     */
    public function isCA_SmallPacketsInternationalAir()
    {
        return $this->_value === self::CodeType_CA_SmallPacketsInternationalAir;
    }

    /**
     * @return bool
     */
    public function isCA_PostUSALetterPost()
    {
        return $this->_value === self::CodeType_CA_PostUSALetterPost;
    }

    /**
     * @return bool
     */
    public function isCA_PostInternationalLetterPost()
    {
        return $this->_value === self::CodeType_CA_PostInternationalLetterPost;
    }

    /**
     * @return bool
     */
    public function isCA_PostExpeditedFlatRateBoxUSA()
    {
        return $this->_value === self::CodeType_CA_PostExpeditedFlatRateBoxUSA;
    }

    /**
     * @return bool
     */
    public function isCA_UPSExpressCanada()
    {
        return $this->_value === self::CodeType_CA_UPSExpressCanada;
    }

    /**
     * @return bool
     */
    public function isCA_UPSExpressSaverCanada()
    {
        return $this->_value === self::CodeType_CA_UPSExpressSaverCanada;
    }

    /**
     * @return bool
     */
    public function isCA_UPSExpeditedCanada()
    {
        return $this->_value === self::CodeType_CA_UPSExpeditedCanada;
    }

    /**
     * @return bool
     */
    public function isCA_UPSStandardCanada()
    {
        return $this->_value === self::CodeType_CA_UPSStandardCanada;
    }

    /**
     * @return bool
     */
    public function isCA_UPSExpressUnitedStates()
    {
        return $this->_value === self::CodeType_CA_UPSExpressUnitedStates;
    }

    /**
     * @return bool
     */
    public function isCA_UPSExpeditedUnitedStates()
    {
        return $this->_value === self::CodeType_CA_UPSExpeditedUnitedStates;
    }

    /**
     * @return bool
     */
    public function isCA_UPS3DaySelectUnitedStates()
    {
        return $this->_value === self::CodeType_CA_UPS3DaySelectUnitedStates;
    }

    /**
     * @return bool
     */
    public function isCA_UPSStandardUnitedStates()
    {
        return $this->_value === self::CodeType_CA_UPSStandardUnitedStates;
    }

    /**
     * @return bool
     */
    public function isCA_UPSWorldWideExpress()
    {
        return $this->_value === self::CodeType_CA_UPSWorldWideExpress;
    }

    /**
     * @return bool
     */
    public function isCA_UPSWorldWideExpedited()
    {
        return $this->_value === self::CodeType_CA_UPSWorldWideExpedited;
    }

    /**
     * @return bool
     */
    public function isCA_PriorityWorldwide()
    {
        return $this->_value === self::CodeType_CA_PriorityWorldwide;
    }

    /**
     * @return bool
     */
    public function isCanadaPostExpeditedFlatRateBoxUSA()
    {
        return $this->_value === self::CodeType_CanadaPostExpeditedFlatRateBoxUSA;
    }

    /**
     * @return bool
     */
    public function isCA_PostTrackedPacketsUSA()
    {
        return $this->_value === self::CodeType_CA_PostTrackedPacketsUSA;
    }

    /**
     * @return bool
     */
    public function isCA_PostTrackedPacketsInternational()
    {
        return $this->_value === self::CodeType_CA_PostTrackedPacketsInternational;
    }

    /**
     * @return bool
     */
    public function isCA_Freight()
    {
        return $this->_value === self::CodeType_CA_Freight;
    }

    /**
     * @return bool
     */
    public function isCH_StandardDispatchAPost()
    {
        return $this->_value === self::CodeType_CH_StandardDispatchAPost;
    }

    /**
     * @return bool
     */
    public function isCH_StandardDispatchBPost()
    {
        return $this->_value === self::CodeType_CH_StandardDispatchBPost;
    }

    /**
     * @return bool
     */
    public function isCH_InsuredDispatch()
    {
        return $this->_value === self::CodeType_CH_InsuredDispatch;
    }

    /**
     * @return bool
     */
    public function isCH_Writing()
    {
        return $this->_value === self::CodeType_CH_Writing;
    }

    /**
     * @return bool
     */
    public function isCH_COD()
    {
        return $this->_value === self::CodeType_CH_COD;
    }

    /**
     * @return bool
     */
    public function isCH_ExpressOrCourier()
    {
        return $this->_value === self::CodeType_CH_ExpressOrCourier;
    }

    /**
     * @return bool
     */
    public function isCH_InsuredExpressOrCourier()
    {
        return $this->_value === self::CodeType_CH_InsuredExpressOrCourier;
    }

    /**
     * @return bool
     */
    public function isCH_SpecialDispatch()
    {
        return $this->_value === self::CodeType_CH_SpecialDispatch;
    }

    /**
     * @return bool
     */
    public function isCH_InsuredSpecialDispatch()
    {
        return $this->_value === self::CodeType_CH_InsuredSpecialDispatch;
    }

    /**
     * @return bool
     */
    public function isCH_Sonstige()
    {
        return $this->_value === self::CodeType_CH_Sonstige;
    }

    /**
     * @return bool
     */
    public function isCH_SonstigerVersandInternational()
    {
        return $this->_value === self::CodeType_CH_SonstigerVersandInternational;
    }

    /**
     * @return bool
     */
    public function isCH_EconomySendungenInternational()
    {
        return $this->_value === self::CodeType_CH_EconomySendungenInternational;
    }

    /**
     * @return bool
     */
    public function isCH_PrioritySendungenInternational()
    {
        return $this->_value === self::CodeType_CH_PrioritySendungenInternational;
    }

    /**
     * @return bool
     */
    public function isCH_UrgentSendungenInternational()
    {
        return $this->_value === self::CodeType_CH_UrgentSendungenInternational;
    }

    /**
     * @return bool
     */
    public function isCH_EconomyDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_CH_EconomyDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isCH_StandardDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_CH_StandardDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isCH_ExpressDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_CH_ExpressDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isCH_TrackedDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_CH_TrackedDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isCN_PersonalDelivery()
    {
        return $this->_value === self::CodeType_CN_PersonalDelivery;
    }

    /**
     * @return bool
     */
    public function isCN_RegularPackage()
    {
        return $this->_value === self::CodeType_CN_RegularPackage;
    }

    /**
     * @return bool
     */
    public function isCN_DeliveryCompanyExpress()
    {
        return $this->_value === self::CodeType_CN_DeliveryCompanyExpress;
    }

    /**
     * @return bool
     */
    public function isCN_PostOfficeExpress()
    {
        return $this->_value === self::CodeType_CN_PostOfficeExpress;
    }

    /**
     * @return bool
     */
    public function isCN_Others()
    {
        return $this->_value === self::CodeType_CN_Others;
    }

    /**
     * @return bool
     */
    public function isCN_FastPostOffice()
    {
        return $this->_value === self::CodeType_CN_FastPostOffice;
    }

    /**
     * @return bool
     */
    public function isCN_ExpressDeliverySameCity()
    {
        return $this->_value === self::CodeType_CN_ExpressDeliverySameCity;
    }

    /**
     * @return bool
     */
    public function isCN_ExpressDeliveryOtherCities()
    {
        return $this->_value === self::CodeType_CN_ExpressDeliveryOtherCities;
    }

    /**
     * @return bool
     */
    public function isCN_StandardInternational()
    {
        return $this->_value === self::CodeType_CN_StandardInternational;
    }

    /**
     * @return bool
     */
    public function isCN_ExpeditedInternational()
    {
        return $this->_value === self::CodeType_CN_ExpeditedInternational;
    }

    /**
     * @return bool
     */
    public function isCN_OtherInternational()
    {
        return $this->_value === self::CodeType_CN_OtherInternational;
    }

    /**
     * @return bool
     */
    public function isCN_CODInternational()
    {
        return $this->_value === self::CodeType_CN_CODInternational;
    }

    /**
     * @return bool
     */
    public function isCN_StandardMailingInternational()
    {
        return $this->_value === self::CodeType_CN_StandardMailingInternational;
    }

    /**
     * @return bool
     */
    public function isCN_RegularLogisticsInternational()
    {
        return $this->_value === self::CodeType_CN_RegularLogisticsInternational;
    }

    /**
     * @return bool
     */
    public function isCN_EMSInternational()
    {
        return $this->_value === self::CodeType_CN_EMSInternational;
    }

    /**
     * @return bool
     */
    public function isCN_OthersInternational()
    {
        return $this->_value === self::CodeType_CN_OthersInternational;
    }

    /**
     * @return bool
     */
    public function isDE_StandardDispatch()
    {
        return $this->_value === self::CodeType_DE_StandardDispatch;
    }

    /**
     * @return bool
     */
    public function isDE_InsuredDispatch()
    {
        return $this->_value === self::CodeType_DE_InsuredDispatch;
    }

    /**
     * @return bool
     */
    public function isDE_Writing()
    {
        return $this->_value === self::CodeType_DE_Writing;
    }

    /**
     * @return bool
     */
    public function isDE_COD()
    {
        return $this->_value === self::CodeType_DE_COD;
    }

    /**
     * @return bool
     */
    public function isDE_ExpressOrCourier()
    {
        return $this->_value === self::CodeType_DE_ExpressOrCourier;
    }

    /**
     * @return bool
     */
    public function isDE_InsuredExpressOrCourier()
    {
        return $this->_value === self::CodeType_DE_InsuredExpressOrCourier;
    }

    /**
     * @return bool
     */
    public function isDE_SpecialDispatch()
    {
        return $this->_value === self::CodeType_DE_SpecialDispatch;
    }

    /**
     * @return bool
     */
    public function isDE_InsuredSpecialDispatch()
    {
        return $this->_value === self::CodeType_DE_InsuredSpecialDispatch;
    }

    /**
     * @return bool
     */
    public function isDE_UnversicherterVersand()
    {
        return $this->_value === self::CodeType_DE_UnversicherterVersand;
    }

    /**
     * @return bool
     */
    public function isDE_DeutschePostBrief()
    {
        return $this->_value === self::CodeType_DE_DeutschePostBrief;
    }

    /**
     * @return bool
     */
    public function isDE_eBayDHLPaket24x7()
    {
        return $this->_value === self::CodeType_DE_eBayDHLPaket24x7;
    }

    /**
     * @return bool
     */
    public function isDE_DHLPostpaket()
    {
        return $this->_value === self::CodeType_DE_DHLPostpaket;
    }

    /**
     * @return bool
     */
    public function isDE_DHLPackchen()
    {
        return $this->_value === self::CodeType_DE_DHLPackchen;
    }

    /**
     * @return bool
     */
    public function isDE_DeutschePostWarensendung()
    {
        return $this->_value === self::CodeType_DE_DeutschePostWarensendung;
    }

    /**
     * @return bool
     */
    public function isDE_DeutschePostBuchersendung()
    {
        return $this->_value === self::CodeType_DE_DeutschePostBuchersendung;
    }

    /**
     * @return bool
     */
    public function isDE_HermesPaketUnversichert()
    {
        return $this->_value === self::CodeType_DE_HermesPaketUnversichert;
    }

    /**
     * @return bool
     */
    public function isDE_HermesPaketVersichert()
    {
        return $this->_value === self::CodeType_DE_HermesPaketVersichert;
    }

    /**
     * @return bool
     */
    public function isDE_IloxxTransportXXL()
    {
        return $this->_value === self::CodeType_DE_IloxxTransportXXL;
    }

    /**
     * @return bool
     */
    public function isDE_IloxxUbernachtExpress()
    {
        return $this->_value === self::CodeType_DE_IloxxUbernachtExpress;
    }

    /**
     * @return bool
     */
    public function isDE_IloxxStandard()
    {
        return $this->_value === self::CodeType_DE_IloxxStandard;
    }

    /**
     * @return bool
     */
    public function isDE_Sonstige()
    {
        return $this->_value === self::CodeType_DE_Sonstige;
    }

    /**
     * @return bool
     */
    public function isDE_UnversicherterVersandInternational()
    {
        return $this->_value === self::CodeType_DE_UnversicherterVersandInternational;
    }

    /**
     * @return bool
     */
    public function isDE_VersicherterVersandInternational()
    {
        return $this->_value === self::CodeType_DE_VersicherterVersandInternational;
    }

    /**
     * @return bool
     */
    public function isDE_DHLPostpaketInternational()
    {
        return $this->_value === self::CodeType_DE_DHLPostpaketInternational;
    }

    /**
     * @return bool
     */
    public function isDE_DHLPackchenInternational()
    {
        return $this->_value === self::CodeType_DE_DHLPackchenInternational;
    }

    /**
     * @return bool
     */
    public function isDE_SonstigerVersandInternational()
    {
        return $this->_value === self::CodeType_DE_SonstigerVersandInternational;
    }

    /**
     * @return bool
     */
    public function isDE_UnversicherterExpressVersandInternational()
    {
        return $this->_value === self::CodeType_DE_UnversicherterExpressVersandInternational;
    }

    /**
     * @return bool
     */
    public function isDE_VersicherterExpressVersandInternational()
    {
        return $this->_value === self::CodeType_DE_VersicherterExpressVersandInternational;
    }

    /**
     * @return bool
     */
    public function isDE_DeutschePostBriefLandInternational()
    {
        return $this->_value === self::CodeType_DE_DeutschePostBriefLandInternational;
    }

    /**
     * @return bool
     */
    public function isDE_DeutschePostBriefLuftInternational()
    {
        return $this->_value === self::CodeType_DE_DeutschePostBriefLuftInternational;
    }

    /**
     * @return bool
     */
    public function isDE_IloxxEuropaInternational()
    {
        return $this->_value === self::CodeType_DE_IloxxEuropaInternational;
    }

    /**
     * @return bool
     */
    public function isDE_IloxxWorldWideInternational()
    {
        return $this->_value === self::CodeType_DE_IloxxWorldWideInternational;
    }

    /**
     * @return bool
     */
    public function isDE_Paket()
    {
        return $this->_value === self::CodeType_DE_Paket;
    }

    /**
     * @return bool
     */
    public function isDE_Express()
    {
        return $this->_value === self::CodeType_DE_Express;
    }

    /**
     * @return bool
     */
    public function isDE_DHLPaket()
    {
        return $this->_value === self::CodeType_DE_DHLPaket;
    }

    /**
     * @return bool
     */
    public function isDE_DPBuecherWarensendung()
    {
        return $this->_value === self::CodeType_DE_DPBuecherWarensendung;
    }

    /**
     * @return bool
     */
    public function isDE_HermesPaket()
    {
        return $this->_value === self::CodeType_DE_HermesPaket;
    }

    /**
     * @return bool
     */
    public function isDE_IloxxTransport()
    {
        return $this->_value === self::CodeType_DE_IloxxTransport;
    }

    /**
     * @return bool
     */
    public function isDE_SonstigeDomestic()
    {
        return $this->_value === self::CodeType_DE_SonstigeDomestic;
    }

    /**
     * @return bool
     */
    public function isDE_Einschreiben()
    {
        return $this->_value === self::CodeType_DE_Einschreiben;
    }

    /**
     * @return bool
     */
    public function isDE_Nachname()
    {
        return $this->_value === self::CodeType_DE_Nachname;
    }

    /**
     * @return bool
     */
    public function isDE_SpecialDelivery()
    {
        return $this->_value === self::CodeType_DE_SpecialDelivery;
    }

    /**
     * @return bool
     */
    public function isDE_UPS()
    {
        return $this->_value === self::CodeType_DE_UPS;
    }

    /**
     * @return bool
     */
    public function isDE_DPD()
    {
        return $this->_value === self::CodeType_DE_DPD;
    }

    /**
     * @return bool
     */
    public function isDE_GLS()
    {
        return $this->_value === self::CodeType_DE_GLS;
    }

    /**
     * @return bool
     */
    public function isDE_PaketInternational()
    {
        return $this->_value === self::CodeType_DE_PaketInternational;
    }

    /**
     * @return bool
     */
    public function isDE_DHLPaketInternational()
    {
        return $this->_value === self::CodeType_DE_DHLPaketInternational;
    }

    /**
     * @return bool
     */
    public function isDE_DHLPaketIntlExpress()
    {
        return $this->_value === self::CodeType_DE_DHLPaketIntlExpress;
    }

    /**
     * @return bool
     */
    public function isDE_SonstigeInternational()
    {
        return $this->_value === self::CodeType_DE_SonstigeInternational;
    }

    /**
     * @return bool
     */
    public function isDE_ExpressInternational()
    {
        return $this->_value === self::CodeType_DE_ExpressInternational;
    }

    /**
     * @return bool
     */
    public function isDE_DPBriefInternational()
    {
        return $this->_value === self::CodeType_DE_DPBriefInternational;
    }

    /**
     * @return bool
     */
    public function isDE_IloxxTransportInternational()
    {
        return $this->_value === self::CodeType_DE_IloxxTransportInternational;
    }

    /**
     * @return bool
     */
    public function isDE_HermesPaketInternational()
    {
        return $this->_value === self::CodeType_DE_HermesPaketInternational;
    }

    /**
     * @return bool
     */
    public function isDE_UPSInternational()
    {
        return $this->_value === self::CodeType_DE_UPSInternational;
    }

    /**
     * @return bool
     */
    public function isDE_DPDInternational()
    {
        return $this->_value === self::CodeType_DE_DPDInternational;
    }

    /**
     * @return bool
     */
    public function isDE_GLSInternational()
    {
        return $this->_value === self::CodeType_DE_GLSInternational;
    }

    /**
     * @return bool
     */
    public function isDE_eBayHermesPaketShop2ShopKaeufer()
    {
        return $this->_value === self::CodeType_DE_eBayHermesPaketShop2ShopKaeufer;
    }

    /**
     * @return bool
     */
    public function isDE_HermesPaketShop2ShopKaeufer()
    {
        return $this->_value === self::CodeType_DE_HermesPaketShop2ShopKaeufer;
    }

    /**
     * @return bool
     */
    public function isDE_eBayHermesPaketShop2Shop()
    {
        return $this->_value === self::CodeType_DE_eBayHermesPaketShop2Shop;
    }

    /**
     * @return bool
     */
    public function isDE_HermesPaketShop2Shop()
    {
        return $this->_value === self::CodeType_DE_HermesPaketShop2Shop;
    }

    /**
     * @return bool
     */
    public function isDE_HermesPaketSperrgut()
    {
        return $this->_value === self::CodeType_DE_HermesPaketSperrgut;
    }

    /**
     * @return bool
     */
    public function isDE_eBayHermesPaketSperrgutShop2Shop()
    {
        return $this->_value === self::CodeType_DE_eBayHermesPaketSperrgutShop2Shop;
    }

    /**
     * @return bool
     */
    public function isDE_DHLPaeckchenPackstation()
    {
        return $this->_value === self::CodeType_DE_DHLPaeckchenPackstation;
    }

    /**
     * @return bool
     */
    public function isDE_DHLPaketPackstation()
    {
        return $this->_value === self::CodeType_DE_DHLPaketPackstation;
    }

    /**
     * @return bool
     */
    public function isDE_eBayDHLPaeckchen()
    {
        return $this->_value === self::CodeType_DE_eBayDHLPaeckchen;
    }

    /**
     * @return bool
     */
    public function isDE_DHLStarPaeckchen()
    {
        return $this->_value === self::CodeType_DE_DHLStarPaeckchen;
    }

    /**
     * @return bool
     */
    public function isDE_TrackedDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_DE_TrackedDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isES_CartasNacionalesHasta20()
    {
        return $this->_value === self::CodeType_ES_CartasNacionalesHasta20;
    }

    /**
     * @return bool
     */
    public function isES_CartasNacionalesDeMas20()
    {
        return $this->_value === self::CodeType_ES_CartasNacionalesDeMas20;
    }

    /**
     * @return bool
     */
    public function isES_CartasInternacionalesHasta20()
    {
        return $this->_value === self::CodeType_ES_CartasInternacionalesHasta20;
    }

    /**
     * @return bool
     */
    public function isES_CartasInternacionalesDeMas20()
    {
        return $this->_value === self::CodeType_ES_CartasInternacionalesDeMas20;
    }

    /**
     * @return bool
     */
    public function isES_PaqueteAzulHasta2kg()
    {
        return $this->_value === self::CodeType_ES_PaqueteAzulHasta2kg;
    }

    /**
     * @return bool
     */
    public function isES_PaqueteAzulDeMas2kg()
    {
        return $this->_value === self::CodeType_ES_PaqueteAzulDeMas2kg;
    }

    /**
     * @return bool
     */
    public function isES_PaqueteInternacionalEconomico()
    {
        return $this->_value === self::CodeType_ES_PaqueteInternacionalEconomico;
    }

    /**
     * @return bool
     */
    public function isES_Urgente()
    {
        return $this->_value === self::CodeType_ES_Urgente;
    }

    /**
     * @return bool
     */
    public function isES_Otros()
    {
        return $this->_value === self::CodeType_ES_Otros;
    }

    /**
     * @return bool
     */
    public function isES_StandardInternational()
    {
        return $this->_value === self::CodeType_ES_StandardInternational;
    }

    /**
     * @return bool
     */
    public function isES_ExpeditedInternational()
    {
        return $this->_value === self::CodeType_ES_ExpeditedInternational;
    }

    /**
     * @return bool
     */
    public function isES_OtherInternational()
    {
        return $this->_value === self::CodeType_ES_OtherInternational;
    }

    /**
     * @return bool
     */
    public function isES_CartasPostalInternational()
    {
        return $this->_value === self::CodeType_ES_CartasPostalInternational;
    }

    /**
     * @return bool
     */
    public function isES_EmsPostalExpressInternational()
    {
        return $this->_value === self::CodeType_ES_EmsPostalExpressInternational;
    }

    /**
     * @return bool
     */
    public function isES_EconomyPacketInternational()
    {
        return $this->_value === self::CodeType_ES_EconomyPacketInternational;
    }

    /**
     * @return bool
     */
    public function isES_EconomyDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_ES_EconomyDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isES_StandardDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_ES_StandardDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isES_ExpressDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_ES_ExpressDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isES_TrackedDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_ES_TrackedDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isES_ENTREGA_KIALA_8KG()
    {
        return $this->_value === self::CodeType_ES_ENTREGA_KIALA_8KG;
    }

    /**
     * @return bool
     */
    public function isFR_ChronoposteInternationalClassic()
    {
        return $this->_value === self::CodeType_FR_ChronoposteInternationalClassic;
    }

    /**
     * @return bool
     */
    public function isFR_ColiposteColissimoDirect()
    {
        return $this->_value === self::CodeType_FR_ColiposteColissimoDirect;
    }

    /**
     * @return bool
     */
    public function isFR_DHLExpressEuropack()
    {
        return $this->_value === self::CodeType_FR_DHLExpressEuropack;
    }

    /**
     * @return bool
     */
    public function isFR_UPSStandard()
    {
        return $this->_value === self::CodeType_FR_UPSStandard;
    }

    /**
     * @return bool
     */
    public function isFR_PostOfficeLetter()
    {
        return $this->_value === self::CodeType_FR_PostOfficeLetter;
    }

    /**
     * @return bool
     */
    public function isFR_PostOfficeLetterFollowed()
    {
        return $this->_value === self::CodeType_FR_PostOfficeLetterFollowed;
    }

    /**
     * @return bool
     */
    public function isFR_PostOfficeLetterRecommended()
    {
        return $this->_value === self::CodeType_FR_PostOfficeLetterRecommended;
    }

    /**
     * @return bool
     */
    public function isFR_ColiposteColissimo()
    {
        return $this->_value === self::CodeType_FR_ColiposteColissimo;
    }

    /**
     * @return bool
     */
    public function isFR_ColiposteColissimoRecommended()
    {
        return $this->_value === self::CodeType_FR_ColiposteColissimoRecommended;
    }

    /**
     * @return bool
     */
    public function isFR_UPSStandardAgainstRefund()
    {
        return $this->_value === self::CodeType_FR_UPSStandardAgainstRefund;
    }

    /**
     * @return bool
     */
    public function isFR_Autre()
    {
        return $this->_value === self::CodeType_FR_Autre;
    }

    /**
     * @return bool
     */
    public function isFR_Ecopli()
    {
        return $this->_value === self::CodeType_FR_Ecopli;
    }

    /**
     * @return bool
     */
    public function isFR_Colieco()
    {
        return $this->_value === self::CodeType_FR_Colieco;
    }

    /**
     * @return bool
     */
    public function isFR_AuteModeDenvoiDeColis()
    {
        return $this->_value === self::CodeType_FR_AuteModeDenvoiDeColis;
    }

    /**
     * @return bool
     */
    public function isFR_RemiseEnMainPropre()
    {
        return $this->_value === self::CodeType_FR_RemiseEnMainPropre;
    }

    /**
     * @return bool
     */
    public function isFR_StandardInternational()
    {
        return $this->_value === self::CodeType_FR_StandardInternational;
    }

    /**
     * @return bool
     */
    public function isFR_ExpeditedInternational()
    {
        return $this->_value === self::CodeType_FR_ExpeditedInternational;
    }

    /**
     * @return bool
     */
    public function isFR_OtherInternational()
    {
        return $this->_value === self::CodeType_FR_OtherInternational;
    }

    /**
     * @return bool
     */
    public function isFR_LaPosteInternationalPriorityCourier()
    {
        return $this->_value === self::CodeType_FR_LaPosteInternationalPriorityCourier;
    }

    /**
     * @return bool
     */
    public function isFR_LaPosteInternationalEconomyCourier()
    {
        return $this->_value === self::CodeType_FR_LaPosteInternationalEconomyCourier;
    }

    /**
     * @return bool
     */
    public function isFR_LaPosteColissimoInternational()
    {
        return $this->_value === self::CodeType_FR_LaPosteColissimoInternational;
    }

    /**
     * @return bool
     */
    public function isFR_LaPosteColisEconomiqueInternational()
    {
        return $this->_value === self::CodeType_FR_LaPosteColisEconomiqueInternational;
    }

    /**
     * @return bool
     */
    public function isFR_LaPosteColissimoEmballageInternational()
    {
        return $this->_value === self::CodeType_FR_LaPosteColissimoEmballageInternational;
    }

    /**
     * @return bool
     */
    public function isFR_ChronopostClassicInternational()
    {
        return $this->_value === self::CodeType_FR_ChronopostClassicInternational;
    }

    /**
     * @return bool
     */
    public function isFR_ChronopostPremiumInternational()
    {
        return $this->_value === self::CodeType_FR_ChronopostPremiumInternational;
    }

    /**
     * @return bool
     */
    public function isFR_UPSStandardInternational()
    {
        return $this->_value === self::CodeType_FR_UPSStandardInternational;
    }

    /**
     * @return bool
     */
    public function isFR_UPSExpressInternational()
    {
        return $this->_value === self::CodeType_FR_UPSExpressInternational;
    }

    /**
     * @return bool
     */
    public function isFR_DHLInternational()
    {
        return $this->_value === self::CodeType_FR_DHLInternational;
    }

    /**
     * @return bool
     */
    public function isFR_LaPosteLetterMax()
    {
        return $this->_value === self::CodeType_FR_LaPosteLetterMax;
    }

    /**
     * @return bool
     */
    public function isFR_KIALA_DELIVERY()
    {
        return $this->_value === self::CodeType_FR_KIALA_DELIVERY;
    }

    /**
     * @return bool
     */
    public function isFR_TrackedDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_FR_TrackedDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isIN_Regular()
    {
        return $this->_value === self::CodeType_IN_Regular;
    }

    /**
     * @return bool
     */
    public function isIN_Express()
    {
        return $this->_value === self::CodeType_IN_Express;
    }

    /**
     * @return bool
     */
    public function isIN_NationalCOD()
    {
        return $this->_value === self::CodeType_IN_NationalCOD;
    }

    /**
     * @return bool
     */
    public function isIN_Courier()
    {
        return $this->_value === self::CodeType_IN_Courier;
    }

    /**
     * @return bool
     */
    public function isIN_LocalCOD()
    {
        return $this->_value === self::CodeType_IN_LocalCOD;
    }

    /**
     * @return bool
     */
    public function isIN_StandardInternational()
    {
        return $this->_value === self::CodeType_IN_StandardInternational;
    }

    /**
     * @return bool
     */
    public function isIN_ExpeditedInternational()
    {
        return $this->_value === self::CodeType_IN_ExpeditedInternational;
    }

    /**
     * @return bool
     */
    public function isIN_OtherInternational()
    {
        return $this->_value === self::CodeType_IN_OtherInternational;
    }

    /**
     * @return bool
     */
    public function isIN_FlatRateCOD()
    {
        return $this->_value === self::CodeType_IN_FlatRateCOD;
    }

    /**
     * @return bool
     */
    public function isIN_BuyerPicksUpAndPays()
    {
        return $this->_value === self::CodeType_IN_BuyerPicksUpAndPays;
    }

    /**
     * @return bool
     */
    public function isIT_RegularMail()
    {
        return $this->_value === self::CodeType_IT_RegularMail;
    }

    /**
     * @return bool
     */
    public function isIT_PriorityMail()
    {
        return $this->_value === self::CodeType_IT_PriorityMail;
    }

    /**
     * @return bool
     */
    public function isIT_MailRegisteredLetter()
    {
        return $this->_value === self::CodeType_IT_MailRegisteredLetter;
    }

    /**
     * @return bool
     */
    public function isIT_MailRegisteredLetterWithMark()
    {
        return $this->_value === self::CodeType_IT_MailRegisteredLetterWithMark;
    }

    /**
     * @return bool
     */
    public function isIT_InsuredMail()
    {
        return $this->_value === self::CodeType_IT_InsuredMail;
    }

    /**
     * @return bool
     */
    public function isIT_QuickMail()
    {
        return $this->_value === self::CodeType_IT_QuickMail;
    }

    /**
     * @return bool
     */
    public function isIT_RegularPackage()
    {
        return $this->_value === self::CodeType_IT_RegularPackage;
    }

    /**
     * @return bool
     */
    public function isIT_QuickPackage1()
    {
        return $this->_value === self::CodeType_IT_QuickPackage1;
    }

    /**
     * @return bool
     */
    public function isIT_QuickPackage3()
    {
        return $this->_value === self::CodeType_IT_QuickPackage3;
    }

    /**
     * @return bool
     */
    public function isIT_ExpressCourier()
    {
        return $this->_value === self::CodeType_IT_ExpressCourier;
    }

    /**
     * @return bool
     */
    public function isIT_ExpressPackageMaxi()
    {
        return $this->_value === self::CodeType_IT_ExpressPackageMaxi;
    }

    /**
     * @return bool
     */
    public function isIT_StandardInternational()
    {
        return $this->_value === self::CodeType_IT_StandardInternational;
    }

    /**
     * @return bool
     */
    public function isIT_ExpeditedInternational()
    {
        return $this->_value === self::CodeType_IT_ExpeditedInternational;
    }

    /**
     * @return bool
     */
    public function isIT_OtherInternational()
    {
        return $this->_value === self::CodeType_IT_OtherInternational;
    }

    /**
     * @return bool
     */
    public function isIT_TrackedDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_IT_TrackedDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isNL_StandardDelivery()
    {
        return $this->_value === self::CodeType_NL_StandardDelivery;
    }

    /**
     * @return bool
     */
    public function isNL_ParcelPost()
    {
        return $this->_value === self::CodeType_NL_ParcelPost;
    }

    /**
     * @return bool
     */
    public function isNL_RegisteredMail()
    {
        return $this->_value === self::CodeType_NL_RegisteredMail;
    }

    /**
     * @return bool
     */
    public function isNL_Other()
    {
        return $this->_value === self::CodeType_NL_Other;
    }

    /**
     * @return bool
     */
    public function isNL_TPGPostTNTInternational()
    {
        return $this->_value === self::CodeType_NL_TPGPostTNTInternational;
    }

    /**
     * @return bool
     */
    public function isNL_UPSInternational()
    {
        return $this->_value === self::CodeType_NL_UPSInternational;
    }

    /**
     * @return bool
     */
    public function isNL_FedExInternational()
    {
        return $this->_value === self::CodeType_NL_FedExInternational;
    }

    /**
     * @return bool
     */
    public function isNL_DHLInternational()
    {
        return $this->_value === self::CodeType_NL_DHLInternational;
    }

    /**
     * @return bool
     */
    public function isNL_DPDGBRInternational()
    {
        return $this->_value === self::CodeType_NL_DPDGBRInternational;
    }

    /**
     * @return bool
     */
    public function isNL_GLSBusinessInternational()
    {
        return $this->_value === self::CodeType_NL_GLSBusinessInternational;
    }

    /**
     * @return bool
     */
    public function isNL_StandardInternational()
    {
        return $this->_value === self::CodeType_NL_StandardInternational;
    }

    /**
     * @return bool
     */
    public function isNL_ExpeditedInternational()
    {
        return $this->_value === self::CodeType_NL_ExpeditedInternational;
    }

    /**
     * @return bool
     */
    public function isNL_OtherInternational()
    {
        return $this->_value === self::CodeType_NL_OtherInternational;
    }

    /**
     * @return bool
     */
    public function isNL_EconomyDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_NL_EconomyDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isNL_StandardDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_NL_StandardDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isNL_ExpressDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_NL_ExpressDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isNL_TrackedDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_NL_TrackedDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isTW_RegisteredMail()
    {
        return $this->_value === self::CodeType_TW_RegisteredMail;
    }

    /**
     * @return bool
     */
    public function isTW_UnregisteredMail()
    {
        return $this->_value === self::CodeType_TW_UnregisteredMail;
    }

    /**
     * @return bool
     */
    public function isTW_COD()
    {
        return $this->_value === self::CodeType_TW_COD;
    }

    /**
     * @return bool
     */
    public function isTW_DwellingMatchPost()
    {
        return $this->_value === self::CodeType_TW_DwellingMatchPost;
    }

    /**
     * @return bool
     */
    public function isTW_DwellingMatchCOD()
    {
        return $this->_value === self::CodeType_TW_DwellingMatchCOD;
    }

    /**
     * @return bool
     */
    public function isTW_SelfPickup()
    {
        return $this->_value === self::CodeType_TW_SelfPickup;
    }

    /**
     * @return bool
     */
    public function isTW_ParcelPost()
    {
        return $this->_value === self::CodeType_TW_ParcelPost;
    }

    /**
     * @return bool
     */
    public function isTW_ExpressMail()
    {
        return $this->_value === self::CodeType_TW_ExpressMail;
    }

    /**
     * @return bool
     */
    public function isTW_Other()
    {
        return $this->_value === self::CodeType_TW_Other;
    }

    /**
     * @return bool
     */
    public function isTW_CPInternationalLetterPost()
    {
        return $this->_value === self::CodeType_TW_CPInternationalLetterPost;
    }

    /**
     * @return bool
     */
    public function isTW_CPInternationalParcelPost()
    {
        return $this->_value === self::CodeType_TW_CPInternationalParcelPost;
    }

    /**
     * @return bool
     */
    public function isTW_CPInternationalRegisteredLetterPost()
    {
        return $this->_value === self::CodeType_TW_CPInternationalRegisteredLetterPost;
    }

    /**
     * @return bool
     */
    public function isTW_CPInternationalRegisteredParcelPost()
    {
        return $this->_value === self::CodeType_TW_CPInternationalRegisteredParcelPost;
    }

    /**
     * @return bool
     */
    public function isTW_CPInternationalEMS()
    {
        return $this->_value === self::CodeType_TW_CPInternationalEMS;
    }

    /**
     * @return bool
     */
    public function isTW_CPInternationalOceanShippingParcel()
    {
        return $this->_value === self::CodeType_TW_CPInternationalOceanShippingParcel;
    }

    /**
     * @return bool
     */
    public function isTW_FedExInternationalPriority()
    {
        return $this->_value === self::CodeType_TW_FedExInternationalPriority;
    }

    /**
     * @return bool
     */
    public function isTW_FedExInternationalEconomy()
    {
        return $this->_value === self::CodeType_TW_FedExInternationalEconomy;
    }

    /**
     * @return bool
     */
    public function isTW_UPSWorldwideExpedited()
    {
        return $this->_value === self::CodeType_TW_UPSWorldwideExpedited;
    }

    /**
     * @return bool
     */
    public function isTW_UPSWorldwideExpress()
    {
        return $this->_value === self::CodeType_TW_UPSWorldwideExpress;
    }

    /**
     * @return bool
     */
    public function isTW_UPSWorldwideExpressPlus()
    {
        return $this->_value === self::CodeType_TW_UPSWorldwideExpressPlus;
    }

    /**
     * @return bool
     */
    public function isTW_OtherInternational()
    {
        return $this->_value === self::CodeType_TW_OtherInternational;
    }

    /**
     * @return bool
     */
    public function isUK_RoyalMailFirstClassStandard()
    {
        return $this->_value === self::CodeType_UK_RoyalMailFirstClassStandard;
    }

    /**
     * @return bool
     */
    public function isUK_RoyalMailSecondClassStandard()
    {
        return $this->_value === self::CodeType_UK_RoyalMailSecondClassStandard;
    }

    /**
     * @return bool
     */
    public function isUK_RoyalMailFirstClassRecorded()
    {
        return $this->_value === self::CodeType_UK_RoyalMailFirstClassRecorded;
    }

    /**
     * @return bool
     */
    public function isUK_RoyalMailSecondClassRecorded()
    {
        return $this->_value === self::CodeType_UK_RoyalMailSecondClassRecorded;
    }

    /**
     * @return bool
     */
    public function isUK_RoyalMailSpecialDelivery()
    {
        return $this->_value === self::CodeType_UK_RoyalMailSpecialDelivery;
    }

    /**
     * @return bool
     */
    public function isUK_RoyalMailStandardParcel()
    {
        return $this->_value === self::CodeType_UK_RoyalMailStandardParcel;
    }

    /**
     * @return bool
     */
    public function isUK_Parcelforce24()
    {
        return $this->_value === self::CodeType_UK_Parcelforce24;
    }

    /**
     * @return bool
     */
    public function isUK_Parcelforce48()
    {
        return $this->_value === self::CodeType_UK_Parcelforce48;
    }

    /**
     * @return bool
     */
    public function isUK_OtherCourier()
    {
        return $this->_value === self::CodeType_UK_OtherCourier;
    }

    /**
     * @return bool
     */
    public function isUK_myHermesDoorToDoorService()
    {
        return $this->_value === self::CodeType_UK_myHermesDoorToDoorService;
    }

    /**
     * @return bool
     */
    public function isUK_CollectDropAtStoreDeliveryToDoor()
    {
        return $this->_value === self::CodeType_UK_CollectDropAtStoreDeliveryToDoor;
    }

    /**
     * @return bool
     */
    public function isUK_SellersStandardRate()
    {
        return $this->_value === self::CodeType_UK_SellersStandardRate;
    }

    /**
     * @return bool
     */
    public function isUK_CollectInPerson()
    {
        return $this->_value === self::CodeType_UK_CollectInPerson;
    }

    /**
     * @return bool
     */
    public function isUK_SellersStandardInternationalRate()
    {
        return $this->_value === self::CodeType_UK_SellersStandardInternationalRate;
    }

    /**
     * @return bool
     */
    public function isUK_RoyalMailAirmailInternational()
    {
        return $this->_value === self::CodeType_UK_RoyalMailAirmailInternational;
    }

    /**
     * @return bool
     */
    public function isUK_RoyalMailAirsureInternational()
    {
        return $this->_value === self::CodeType_UK_RoyalMailAirsureInternational;
    }

    /**
     * @return bool
     */
    public function isUK_RoyalMailSurfaceMailInternational()
    {
        return $this->_value === self::CodeType_UK_RoyalMailSurfaceMailInternational;
    }

    /**
     * @return bool
     */
    public function isUK_RoyalMailInternationalSignedFor()
    {
        return $this->_value === self::CodeType_UK_RoyalMailInternationalSignedFor;
    }

    /**
     * @return bool
     */
    public function isUK_RoyalMailHMForcesMailInternational()
    {
        return $this->_value === self::CodeType_UK_RoyalMailHMForcesMailInternational;
    }

    /**
     * @return bool
     */
    public function isUK_ParcelForceInternationalDatapost()
    {
        return $this->_value === self::CodeType_UK_ParcelForceInternationalDatapost;
    }

    /**
     * @return bool
     */
    public function isUK_ParcelForceIreland24International()
    {
        return $this->_value === self::CodeType_UK_ParcelForceIreland24International;
    }

    /**
     * @return bool
     */
    public function isUK_ParcelForceEuro48International()
    {
        return $this->_value === self::CodeType_UK_ParcelForceEuro48International;
    }

    /**
     * @return bool
     */
    public function isUK_ParcelForceInternationalScheduled()
    {
        return $this->_value === self::CodeType_UK_ParcelForceInternationalScheduled;
    }

    /**
     * @return bool
     */
    public function isUK_OtherCourierOrDeliveryInternational()
    {
        return $this->_value === self::CodeType_UK_OtherCourierOrDeliveryInternational;
    }

    /**
     * @return bool
     */
    public function isUK_CollectInPersonInternational()
    {
        return $this->_value === self::CodeType_UK_CollectInPersonInternational;
    }

    /**
     * @return bool
     */
    public function isUK_ParcelForceIntlExpress()
    {
        return $this->_value === self::CodeType_UK_ParcelForceIntlExpress;
    }

    /**
     * @return bool
     */
    public function isUK_ParcelForceIntlValue()
    {
        return $this->_value === self::CodeType_UK_ParcelForceIntlValue;
    }

    /**
     * @return bool
     */
    public function isUK_ParcelForceIntlEconomy()
    {
        return $this->_value === self::CodeType_UK_ParcelForceIntlEconomy;
    }

    /**
     * @return bool
     */
    public function isUK_TrackedDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_UK_TrackedDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isUK_IntlTrackedPostage()
    {
        return $this->_value === self::CodeType_UK_IntlTrackedPostage;
    }

    /**
     * @return bool
     */
    public function isIE_SellersStandardRate()
    {
        return $this->_value === self::CodeType_IE_SellersStandardRate;
    }

    /**
     * @return bool
     */
    public function isIE_FirstClassLetterService()
    {
        return $this->_value === self::CodeType_IE_FirstClassLetterService;
    }

    /**
     * @return bool
     */
    public function isIE_SwiftPostNational()
    {
        return $this->_value === self::CodeType_IE_SwiftPostNational;
    }

    /**
     * @return bool
     */
    public function isIE_RegisteredPost()
    {
        return $this->_value === self::CodeType_IE_RegisteredPost;
    }

    /**
     * @return bool
     */
    public function isIE_EMSSDSCourier()
    {
        return $this->_value === self::CodeType_IE_EMSSDSCourier;
    }

    /**
     * @return bool
     */
    public function isIE_EconomySDSCourier()
    {
        return $this->_value === self::CodeType_IE_EconomySDSCourier;
    }

    /**
     * @return bool
     */
    public function isIE_OtherCourier()
    {
        return $this->_value === self::CodeType_IE_OtherCourier;
    }

    /**
     * @return bool
     */
    public function isIE_CollectionInPerson()
    {
        return $this->_value === self::CodeType_IE_CollectionInPerson;
    }

    /**
     * @return bool
     */
    public function isIE_SellersStandardRateInternational()
    {
        return $this->_value === self::CodeType_IE_SellersStandardRateInternational;
    }

    /**
     * @return bool
     */
    public function isIE_InternationalEconomyService()
    {
        return $this->_value === self::CodeType_IE_InternationalEconomyService;
    }

    /**
     * @return bool
     */
    public function isIE_InternationalPriorityService()
    {
        return $this->_value === self::CodeType_IE_InternationalPriorityService;
    }

    /**
     * @return bool
     */
    public function isIE_SwiftPostExpressInternational()
    {
        return $this->_value === self::CodeType_IE_SwiftPostExpressInternational;
    }

    /**
     * @return bool
     */
    public function isIE_SwiftPostInternational()
    {
        return $this->_value === self::CodeType_IE_SwiftPostInternational;
    }

    /**
     * @return bool
     */
    public function isIE_EMSSDSCourierInternational()
    {
        return $this->_value === self::CodeType_IE_EMSSDSCourierInternational;
    }

    /**
     * @return bool
     */
    public function isIE_EconomySDSCourierInternational()
    {
        return $this->_value === self::CodeType_IE_EconomySDSCourierInternational;
    }

    /**
     * @return bool
     */
    public function isIE_OtherCourierInternational()
    {
        return $this->_value === self::CodeType_IE_OtherCourierInternational;
    }

    /**
     * @return bool
     */
    public function isIE_CollectionInPersonInternational()
    {
        return $this->_value === self::CodeType_IE_CollectionInPersonInternational;
    }

    /**
     * @return bool
     */
    public function isIE_EconomyDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_IE_EconomyDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isIE_StandardDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_IE_StandardDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isIE_ExpressDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_IE_ExpressDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isIE_TrackedDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_IE_TrackedDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isPL_DomesticRegular()
    {
        return $this->_value === self::CodeType_PL_DomesticRegular;
    }

    /**
     * @return bool
     */
    public function isPL_DomesticSpecial()
    {
        return $this->_value === self::CodeType_PL_DomesticSpecial;
    }

    /**
     * @return bool
     */
    public function isPL_EconomyDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_PL_EconomyDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isPL_StandardDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_PL_StandardDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isPL_ExpressDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_PL_ExpressDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isPL_TrackedDeliveryFromAbroad()
    {
        return $this->_value === self::CodeType_PL_TrackedDeliveryFromAbroad;
    }

    /**
     * @return bool
     */
    public function isFreightShipping()
    {
        return $this->_value === self::CodeType_FreightShipping;
    }

    /**
     * @return bool
     */
    public function isFreightOtherShipping()
    {
        return $this->_value === self::CodeType_FreightOtherShipping;
    }

    /**
     * @return bool
     */
    public function isFreight()
    {
        return $this->_value === self::CodeType_Freight;
    }

    /**
     * @return bool
     */
    public function isFreightShippingInternational()
    {
        return $this->_value === self::CodeType_FreightShippingInternational;
    }

    /**
     * @return bool
     */
    public function isUSPSGround()
    {
        return $this->_value === self::CodeType_USPSGround;
    }

    /**
     * @return bool
     */
    public function isShippingMethodOvernight()
    {
        return $this->_value === self::CodeType_ShippingMethodOvernight;
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
    public function isUSPSPriorityFlatRateEnvelope()
    {
        return $this->_value === self::CodeType_USPSPriorityFlatRateEnvelope;
    }

    /**
     * @return bool
     */
    public function isUSPSPriorityFlatRateBox()
    {
        return $this->_value === self::CodeType_USPSPriorityFlatRateBox;
    }

    /**
     * @return bool
     */
    public function isUSPSGlobalPrioritySmallEnvelope()
    {
        return $this->_value === self::CodeType_USPSGlobalPrioritySmallEnvelope;
    }

    /**
     * @return bool
     */
    public function isUSPSGlobalPriorityLargeEnvelope()
    {
        return $this->_value === self::CodeType_USPSGlobalPriorityLargeEnvelope;
    }

    /**
     * @return bool
     */
    public function isUSPSExpressFlatRateEnvelope()
    {
        return $this->_value === self::CodeType_USPSExpressFlatRateEnvelope;
    }

    /**
     * @return bool
     */
    public function isUPSWorldWideExpressBox10kg()
    {
        return $this->_value === self::CodeType_UPSWorldWideExpressBox10kg;
    }

    /**
     * @return bool
     */
    public function isUPSWorldWideExpressBox25kg()
    {
        return $this->_value === self::CodeType_UPSWorldWideExpressBox25kg;
    }

    /**
     * @return bool
     */
    public function isUPSWorldWideExpressPlusBox10kg()
    {
        return $this->_value === self::CodeType_UPSWorldWideExpressPlusBox10kg;
    }

    /**
     * @return bool
     */
    public function isUPSWorldWideExpressPlusBox25kg()
    {
        return $this->_value === self::CodeType_UPSWorldWideExpressPlusBox25kg;
    }

    /**
     * @return bool
     */
    public function isHK_LocalPickUpOnly()
    {
        return $this->_value === self::CodeType_HK_LocalPickUpOnly;
    }

    /**
     * @return bool
     */
    public function isHK_LocalCourier()
    {
        return $this->_value === self::CodeType_HK_LocalCourier;
    }

    /**
     * @return bool
     */
    public function isHK_DomesticRegularShipping()
    {
        return $this->_value === self::CodeType_HK_DomesticRegularShipping;
    }

    /**
     * @return bool
     */
    public function isHK_DomesticSpecialShipping()
    {
        return $this->_value === self::CodeType_HK_DomesticSpecialShipping;
    }

    /**
     * @return bool
     */
    public function isHK_InternationalRegularShipping()
    {
        return $this->_value === self::CodeType_HK_InternationalRegularShipping;
    }

    /**
     * @return bool
     */
    public function isHK_InternationalSpecialShipping()
    {
        return $this->_value === self::CodeType_HK_InternationalSpecialShipping;
    }

    /**
     * @return bool
     */
    public function isSG_LocalPickUpOnly()
    {
        return $this->_value === self::CodeType_SG_LocalPickUpOnly;
    }

    /**
     * @return bool
     */
    public function isSG_LocalCourier()
    {
        return $this->_value === self::CodeType_SG_LocalCourier;
    }

    /**
     * @return bool
     */
    public function isSG_DomesticStandardMail()
    {
        return $this->_value === self::CodeType_SG_DomesticStandardMail;
    }

    /**
     * @return bool
     */
    public function isSG_DomesticNonStandardMail()
    {
        return $this->_value === self::CodeType_SG_DomesticNonStandardMail;
    }

    /**
     * @return bool
     */
    public function isSG_DomesticSpeedpostIslandwide()
    {
        return $this->_value === self::CodeType_SG_DomesticSpeedpostIslandwide;
    }

    /**
     * @return bool
     */
    public function isSG_InternationalStandardMail()
    {
        return $this->_value === self::CodeType_SG_InternationalStandardMail;
    }

    /**
     * @return bool
     */
    public function isSG_InternationalExpressMailService()
    {
        return $this->_value === self::CodeType_SG_InternationalExpressMailService;
    }

    /**
     * @return bool
     */
    public function isSG_InternationalCourier()
    {
        return $this->_value === self::CodeType_SG_InternationalCourier;
    }

    /**
     * @return bool
     */
    public function isBENL_DePostZendingNONPRIOR()
    {
        return $this->_value === self::CodeType_BENL_DePostZendingNONPRIOR;
    }

    /**
     * @return bool
     */
    public function isBENL_DePostZendingPRIOR()
    {
        return $this->_value === self::CodeType_BENL_DePostZendingPRIOR;
    }

    /**
     * @return bool
     */
    public function isBENL_DePostZendingAangetekend()
    {
        return $this->_value === self::CodeType_BENL_DePostZendingAangetekend;
    }

    /**
     * @return bool
     */
    public function isBENL_KilopostPakje()
    {
        return $this->_value === self::CodeType_BENL_KilopostPakje;
    }

    /**
     * @return bool
     */
    public function isBENL_Taxipost()
    {
        return $this->_value === self::CodeType_BENL_Taxipost;
    }

    /**
     * @return bool
     */
    public function isBENL_KialaAfhaalpunt()
    {
        return $this->_value === self::CodeType_BENL_KialaAfhaalpunt;
    }

    /**
     * @return bool
     */
    public function isBENL_VasteKostenStandaardVerzending()
    {
        return $this->_value === self::CodeType_BENL_VasteKostenStandaardVerzending;
    }

    /**
     * @return bool
     */
    public function isBENL_VasteKostenVersneldeVerzending()
    {
        return $this->_value === self::CodeType_BENL_VasteKostenVersneldeVerzending;
    }

    /**
     * @return bool
     */
    public function isBENL_VerzekerdeVerzending()
    {
        return $this->_value === self::CodeType_BENL_VerzekerdeVerzending;
    }

    /**
     * @return bool
     */
    public function isBEFR_LaPosteEnvoiNONPRIOR()
    {
        return $this->_value === self::CodeType_BEFR_LaPosteEnvoiNONPRIOR;
    }

    /**
     * @return bool
     */
    public function isBEFR_LaPosteEnvoiPRIOR()
    {
        return $this->_value === self::CodeType_BEFR_LaPosteEnvoiPRIOR;
    }

    /**
     * @return bool
     */
    public function isBEFR_LaPosteEnvoiRecommande()
    {
        return $this->_value === self::CodeType_BEFR_LaPosteEnvoiRecommande;
    }

    /**
     * @return bool
     */
    public function isBEFR_PaquetKilopost()
    {
        return $this->_value === self::CodeType_BEFR_PaquetKilopost;
    }

    /**
     * @return bool
     */
    public function isBEFR_Taxipost()
    {
        return $this->_value === self::CodeType_BEFR_Taxipost;
    }

    /**
     * @return bool
     */
    public function isBEFR_PointRetraitKiala()
    {
        return $this->_value === self::CodeType_BEFR_PointRetraitKiala;
    }

    /**
     * @return bool
     */
    public function isBEFR_LivraisonStandardPrixforFaitaire()
    {
        return $this->_value === self::CodeType_BEFR_LivraisonStandardPrixforFaitaire;
    }

    /**
     * @return bool
     */
    public function isBEFR_LivraisonExpressPrixforFaitaire()
    {
        return $this->_value === self::CodeType_BEFR_LivraisonExpressPrixforFaitaire;
    }

    /**
     * @return bool
     */
    public function isBEFR_LivraisonSecurise()
    {
        return $this->_value === self::CodeType_BEFR_LivraisonSecurise;
    }

    /**
     * @return bool
     */
    public function isBENL_DePostZendingPRIORInternational()
    {
        return $this->_value === self::CodeType_BENL_DePostZendingPRIORInternational;
    }

    /**
     * @return bool
     */
    public function isBENL_DePostZendingNONPRIORInternational()
    {
        return $this->_value === self::CodeType_BENL_DePostZendingNONPRIORInternational;
    }

    /**
     * @return bool
     */
    public function isBENL_DePostZendingAangetekendInternational()
    {
        return $this->_value === self::CodeType_BENL_DePostZendingAangetekendInternational;
    }

    /**
     * @return bool
     */
    public function isBENL_KilopostPakjeInternational()
    {
        return $this->_value === self::CodeType_BENL_KilopostPakjeInternational;
    }

    /**
     * @return bool
     */
    public function isBENL_TaxipostExpressverzending()
    {
        return $this->_value === self::CodeType_BENL_TaxipostExpressverzending;
    }

    /**
     * @return bool
     */
    public function isBENL_VerzekerdeVerzendingInternational()
    {
        return $this->_value === self::CodeType_BENL_VerzekerdeVerzendingInternational;
    }

    /**
     * @return bool
     */
    public function isBEFR_LaPosteenvoiePRIOR()
    {
        return $this->_value === self::CodeType_BEFR_LaPosteenvoiePRIOR;
    }

    /**
     * @return bool
     */
    public function isBEFR_LaPosteenvoieNONPRIOR()
    {
        return $this->_value === self::CodeType_BEFR_LaPosteenvoieNONPRIOR;
    }

    /**
     * @return bool
     */
    public function isBEFR_LaPosteenvoieRecommande()
    {
        return $this->_value === self::CodeType_BEFR_LaPosteenvoieRecommande;
    }

    /**
     * @return bool
     */
    public function isBEFR_PaquetKilopostInternationale()
    {
        return $this->_value === self::CodeType_BEFR_PaquetKilopostInternationale;
    }

    /**
     * @return bool
     */
    public function isBEFR_ExpressTaxipost()
    {
        return $this->_value === self::CodeType_BEFR_ExpressTaxipost;
    }

    /**
     * @return bool
     */
    public function isBEFR_LivraisonStandardInternationalePrixforFaitaire()
    {
        return $this->_value === self::CodeType_BEFR_LivraisonStandardInternationalePrixforFaitaire;
    }

    /**
     * @return bool
     */
    public function isBEFR_LivraisonExpressInternationalePrixforFaitaire()
    {
        return $this->_value === self::CodeType_BEFR_LivraisonExpressInternationalePrixforFaitaire;
    }

    /**
     * @return bool
     */
    public function isBEFR_LivraisonSecuriseInternational()
    {
        return $this->_value === self::CodeType_BEFR_LivraisonSecuriseInternational;
    }

    /**
     * @return bool
     */
    public function isFR_Chronopost()
    {
        return $this->_value === self::CodeType_FR_Chronopost;
    }

    /**
     * @return bool
     */
    public function isUK_RoyalMailSpecialDeliveryNextDay()
    {
        return $this->_value === self::CodeType_UK_RoyalMailSpecialDeliveryNextDay;
    }

    /**
     * @return bool
     */
    public function isCA_PostLightPacketInternational()
    {
        return $this->_value === self::CodeType_CA_PostLightPacketInternational;
    }

    /**
     * @return bool
     */
    public function isCA_PostLightPacketUSA()
    {
        return $this->_value === self::CodeType_CA_PostLightPacketUSA;
    }

    /**
     * @return bool
     */
    public function isPL_DHLInternational()
    {
        return $this->_value === self::CodeType_PL_DHLInternational;
    }

    /**
     * @return bool
     */
    public function isPL_InternationalRegular()
    {
        return $this->_value === self::CodeType_PL_InternationalRegular;
    }

    /**
     * @return bool
     */
    public function isPL_InternationalSpecial()
    {
        return $this->_value === self::CodeType_PL_InternationalSpecial;
    }

    /**
     * @return bool
     */
    public function isPL_UPSInternational()
    {
        return $this->_value === self::CodeType_PL_UPSInternational;
    }

    /**
     * @return bool
     */
    public function isCAFR_StandardDelivery()
    {
        return $this->_value === self::CodeType_CAFR_StandardDelivery;
    }

    /**
     * @return bool
     */
    public function isCAFR_ExpeditedDelivery()
    {
        return $this->_value === self::CodeType_CAFR_ExpeditedDelivery;
    }

    /**
     * @return bool
     */
    public function isCAFR_PostLettermail()
    {
        return $this->_value === self::CodeType_CAFR_PostLettermail;
    }

    /**
     * @return bool
     */
    public function isCAFR_PostRegularParcel()
    {
        return $this->_value === self::CodeType_CAFR_PostRegularParcel;
    }

    /**
     * @return bool
     */
    public function isCAFR_PostExpeditedParcel()
    {
        return $this->_value === self::CodeType_CAFR_PostExpeditedParcel;
    }

    /**
     * @return bool
     */
    public function isCAFR_PostXpresspost()
    {
        return $this->_value === self::CodeType_CAFR_PostXpresspost;
    }

    /**
     * @return bool
     */
    public function isCAFR_PostPriorityCourier()
    {
        return $this->_value === self::CodeType_CAFR_PostPriorityCourier;
    }

    /**
     * @return bool
     */
    public function isCAFR_StandardInternational()
    {
        return $this->_value === self::CodeType_CAFR_StandardInternational;
    }

    /**
     * @return bool
     */
    public function isCAFR_ExpeditedInternational()
    {
        return $this->_value === self::CodeType_CAFR_ExpeditedInternational;
    }

    /**
     * @return bool
     */
    public function isCAFR_OtherInternational()
    {
        return $this->_value === self::CodeType_CAFR_OtherInternational;
    }

    /**
     * @return bool
     */
    public function isCAFR_PostExpeditedParcelUSA()
    {
        return $this->_value === self::CodeType_CAFR_PostExpeditedParcelUSA;
    }

    /**
     * @return bool
     */
    public function isCAFR_PostSmallPacketsUSA()
    {
        return $this->_value === self::CodeType_CAFR_PostSmallPacketsUSA;
    }

    /**
     * @return bool
     */
    public function isCAFR_PostXpresspostUSA()
    {
        return $this->_value === self::CodeType_CAFR_PostXpresspostUSA;
    }

    /**
     * @return bool
     */
    public function isCAFR_PostXpresspostInternational()
    {
        return $this->_value === self::CodeType_CAFR_PostXpresspostInternational;
    }

    /**
     * @return bool
     */
    public function isCAFR_PostInternationalParcelSurface()
    {
        return $this->_value === self::CodeType_CAFR_PostInternationalParcelSurface;
    }

    /**
     * @return bool
     */
    public function isCAFR_PostInternationalParcelAir()
    {
        return $this->_value === self::CodeType_CAFR_PostInternationalParcelAir;
    }

    /**
     * @return bool
     */
    public function isCAFR_SmallPacketsInternational()
    {
        return $this->_value === self::CodeType_CAFR_SmallPacketsInternational;
    }

    /**
     * @return bool
     */
    public function isCAFR_PurolatorInternational()
    {
        return $this->_value === self::CodeType_CAFR_PurolatorInternational;
    }

    /**
     * @return bool
     */
    public function isCAFR_PostSmallPacketsUSAGround()
    {
        return $this->_value === self::CodeType_CAFR_PostSmallPacketsUSAGround;
    }

    /**
     * @return bool
     */
    public function isCAFR_PostSmallPacketsUSAAir()
    {
        return $this->_value === self::CodeType_CAFR_PostSmallPacketsUSAAir;
    }

    /**
     * @return bool
     */
    public function isCAFR_SmallPacketsInternationalGround()
    {
        return $this->_value === self::CodeType_CAFR_SmallPacketsInternationalGround;
    }

    /**
     * @return bool
     */
    public function isCAFR_SmallPacketsInternationalAir()
    {
        return $this->_value === self::CodeType_CAFR_SmallPacketsInternationalAir;
    }

    /**
     * @return bool
     */
    public function isCAFR_PostUSALetterPost()
    {
        return $this->_value === self::CodeType_CAFR_PostUSALetterPost;
    }

    /**
     * @return bool
     */
    public function isCAFR_PostInternationalLetterPost()
    {
        return $this->_value === self::CodeType_CAFR_PostInternationalLetterPost;
    }

    /**
     * @return bool
     */
    public function isCAFR_UPSExpressCanada()
    {
        return $this->_value === self::CodeType_CAFR_UPSExpressCanada;
    }

    /**
     * @return bool
     */
    public function isCAFR_UPSExpressSaverCanada()
    {
        return $this->_value === self::CodeType_CAFR_UPSExpressSaverCanada;
    }

    /**
     * @return bool
     */
    public function isCAFR_UPSExpeditedCanada()
    {
        return $this->_value === self::CodeType_CAFR_UPSExpeditedCanada;
    }

    /**
     * @return bool
     */
    public function isCAFR_UPSStandardCanada()
    {
        return $this->_value === self::CodeType_CAFR_UPSStandardCanada;
    }

    /**
     * @return bool
     */
    public function isCAFR_UPSExpressUnitedStates()
    {
        return $this->_value === self::CodeType_CAFR_UPSExpressUnitedStates;
    }

    /**
     * @return bool
     */
    public function isCAFR_UPSExpeditedUnitedStates()
    {
        return $this->_value === self::CodeType_CAFR_UPSExpeditedUnitedStates;
    }

    /**
     * @return bool
     */
    public function isCAFR_UPS3DaySelectUnitedStates()
    {
        return $this->_value === self::CodeType_CAFR_UPS3DaySelectUnitedStates;
    }

    /**
     * @return bool
     */
    public function isCAFR_UPSStandardUnitedStates()
    {
        return $this->_value === self::CodeType_CAFR_UPSStandardUnitedStates;
    }

    /**
     * @return bool
     */
    public function isCAFR_UPSWorldWideExpress()
    {
        return $this->_value === self::CodeType_CAFR_UPSWorldWideExpress;
    }

    /**
     * @return bool
     */
    public function isCAFR_UPSWorldWideExpedited()
    {
        return $this->_value === self::CodeType_CAFR_UPSWorldWideExpedited;
    }

    /**
     * @return bool
     */
    public function isUK_RoyalMailSpecialDelivery9am()
    {
        return $this->_value === self::CodeType_UK_RoyalMailSpecialDelivery9am;
    }

    /**
     * @return bool
     */
    public function isUSPSFirstClassMailInternational()
    {
        return $this->_value === self::CodeType_USPSFirstClassMailInternational;
    }

    /**
     * @return bool
     */
    public function isUSPSPriorityMailInternational()
    {
        return $this->_value === self::CodeType_USPSPriorityMailInternational;
    }

    /**
     * @return bool
     */
    public function isUSPSExpressMailInternational()
    {
        return $this->_value === self::CodeType_USPSExpressMailInternational;
    }

    /**
     * @return bool
     */
    public function isCH_StandardInternational()
    {
        return $this->_value === self::CodeType_CH_StandardInternational;
    }

    /**
     * @return bool
     */
    public function isCH_ExpeditedInternational()
    {
        return $this->_value === self::CodeType_CH_ExpeditedInternational;
    }

    /**
     * @return bool
     */
    public function isCH_SonstigerVersandSieheArtikelbeschreibung()
    {
        return $this->_value === self::CodeType_CH_SonstigerVersandSieheArtikelbeschreibung;
    }

    /**
     * @return bool
     */
    public function isTW_StandardInternationalFixedRate()
    {
        return $this->_value === self::CodeType_TW_StandardInternationalFixedRate;
    }

    /**
     * @return bool
     */
    public function isTW_ExpeditedInternationalFixedRate()
    {
        return $this->_value === self::CodeType_TW_ExpeditedInternationalFixedRate;
    }

    /**
     * @return bool
     */
    public function isUSPSGlobalExpressGuaranteed()
    {
        return $this->_value === self::CodeType_USPSGlobalExpressGuaranteed;
    }

    /**
     * @return bool
     */
    public function isAU_RegularWithInsurance()
    {
        return $this->_value === self::CodeType_AU_RegularWithInsurance;
    }

    /**
     * @return bool
     */
    public function isAU_ExpressWithInsurance()
    {
        return $this->_value === self::CodeType_AU_ExpressWithInsurance;
    }

    /**
     * @return bool
     */
    public function isDE_DeutschePostWarensendungInternational()
    {
        return $this->_value === self::CodeType_DE_DeutschePostWarensendungInternational;
    }

    /**
     * @return bool
     */
    public function isDE_DeutschePostByendung()
    {
        return $this->_value === self::CodeType_DE_DeutschePostByendung;
    }

    /**
     * @return bool
     */
    public function isDE_HermesPaketUnversichertInternational()
    {
        return $this->_value === self::CodeType_DE_HermesPaketUnversichertInternational;
    }

    /**
     * @return bool
     */
    public function isDE_HermesPaketVersichertInternational()
    {
        return $this->_value === self::CodeType_DE_HermesPaketVersichertInternational;
    }

    /**
     * @return bool
     */
    public function isDE_iLoxxTransportXXLInternational()
    {
        return $this->_value === self::CodeType_DE_iLoxxTransportXXLInternational;
    }

    /**
     * @return bool
     */
    public function isDE_iLoxxUbernachtExpressInternational()
    {
        return $this->_value === self::CodeType_DE_iLoxxUbernachtExpressInternational;
    }

    /**
     * @return bool
     */
    public function isDE_iLoxxStandardInternational()
    {
        return $this->_value === self::CodeType_DE_iLoxxStandardInternational;
    }

    /**
     * @return bool
     */
    public function isDE_StandardInternational()
    {
        return $this->_value === self::CodeType_DE_StandardInternational;
    }

    /**
     * @return bool
     */
    public function isDE_ExpeditedInternational()
    {
        return $this->_value === self::CodeType_DE_ExpeditedInternational;
    }

    /**
     * @return bool
     */
    public function isDE_DeutschePostBriefIntlEcon()
    {
        return $this->_value === self::CodeType_DE_DeutschePostBriefIntlEcon;
    }

    /**
     * @return bool
     */
    public function isDE_DeutschePostBriefIntlPri()
    {
        return $this->_value === self::CodeType_DE_DeutschePostBriefIntlPri;
    }

    /**
     * @return bool
     */
    public function isAT_BitteTreffenSieEineAuswahl()
    {
        return $this->_value === self::CodeType_AT_BitteTreffenSieEineAuswahl;
    }

    /**
     * @return bool
     */
    public function isAT_EinschreibenVersandInklEinschreibengebuhr()
    {
        return $this->_value === self::CodeType_AT_EinschreibenVersandInklEinschreibengebuhr;
    }

    /**
     * @return bool
     */
    public function isAT_NachnahmeVersandInklNachnahmegebuhr()
    {
        return $this->_value === self::CodeType_AT_NachnahmeVersandInklNachnahmegebuhr;
    }

    /**
     * @return bool
     */
    public function isAT_ExpressOrCourierInternational()
    {
        return $this->_value === self::CodeType_AT_ExpressOrCourierInternational;
    }

    /**
     * @return bool
     */
    public function isAT_InsuredExpressOrCourierInternational()
    {
        return $this->_value === self::CodeType_AT_InsuredExpressOrCourierInternational;
    }

    /**
     * @return bool
     */
    public function isAT_SpecialDispatchInternational()
    {
        return $this->_value === self::CodeType_AT_SpecialDispatchInternational;
    }

    /**
     * @return bool
     */
    public function isAT_InsuredSpecialDispatchInternational()
    {
        return $this->_value === self::CodeType_AT_InsuredSpecialDispatchInternational;
    }

    /**
     * @return bool
     */
    public function isAT_StandardInternational()
    {
        return $this->_value === self::CodeType_AT_StandardInternational;
    }

    /**
     * @return bool
     */
    public function isAT_ExpeditedInternational()
    {
        return $this->_value === self::CodeType_AT_ExpeditedInternational;
    }

    /**
     * @return bool
     */
    public function isAT_OtherInternationalShipping()
    {
        return $this->_value === self::CodeType_AT_OtherInternationalShipping;
    }

    /**
     * @return bool
     */
    public function isCH_BitteTreffenSieEineAuswahl()
    {
        return $this->_value === self::CodeType_CH_BitteTreffenSieEineAuswahl;
    }

    /**
     * @return bool
     */
    public function isCH_UnversicherterVersand()
    {
        return $this->_value === self::CodeType_CH_UnversicherterVersand;
    }

    /**
     * @return bool
     */
    public function isCH_VersicherterVersand()
    {
        return $this->_value === self::CodeType_CH_VersicherterVersand;
    }

    /**
     * @return bool
     */
    public function isCH_EinschreibenVersandInklEinschreibengebuhr()
    {
        return $this->_value === self::CodeType_CH_EinschreibenVersandInklEinschreibengebuhr;
    }

    /**
     * @return bool
     */
    public function isCH_NachnahmeVersandInklNachnahmegebuhr()
    {
        return $this->_value === self::CodeType_CH_NachnahmeVersandInklNachnahmegebuhr;
    }

    /**
     * @return bool
     */
    public function isCH_ExpressOrCourierInternational()
    {
        return $this->_value === self::CodeType_CH_ExpressOrCourierInternational;
    }

    /**
     * @return bool
     */
    public function isCH_InsuredExpressOrCourierInternational()
    {
        return $this->_value === self::CodeType_CH_InsuredExpressOrCourierInternational;
    }

    /**
     * @return bool
     */
    public function isCH_SonderversandZBSperrgutKFZ()
    {
        return $this->_value === self::CodeType_CH_SonderversandZBSperrgutKFZ;
    }

    /**
     * @return bool
     */
    public function isCH_VersicherterSonderversandZBSperrgutKFZ()
    {
        return $this->_value === self::CodeType_CH_VersicherterSonderversandZBSperrgutKFZ;
    }

    /**
     * @return bool
     */
    public function isCH_StandardversandAPostPriority()
    {
        return $this->_value === self::CodeType_CH_StandardversandAPostPriority;
    }

    /**
     * @return bool
     */
    public function isCH_StandardversandBPostEconomy()
    {
        return $this->_value === self::CodeType_CH_StandardversandBPostEconomy;
    }

    /**
     * @return bool
     */
    public function isDE_BitteTreffenSieEineAuswahl()
    {
        return $this->_value === self::CodeType_DE_BitteTreffenSieEineAuswahl;
    }

    /**
     * @return bool
     */
    public function isDE_EinschreibenVersandInklEinschreibengebuhr()
    {
        return $this->_value === self::CodeType_DE_EinschreibenVersandInklEinschreibengebuhr;
    }

    /**
     * @return bool
     */
    public function isDE_NachnahmeVersandInklNachnahmegebuhr()
    {
        return $this->_value === self::CodeType_DE_NachnahmeVersandInklNachnahmegebuhr;
    }

    /**
     * @return bool
     */
    public function isDE_ExpressOrCourierInternational()
    {
        return $this->_value === self::CodeType_DE_ExpressOrCourierInternational;
    }

    /**
     * @return bool
     */
    public function isDE_InsuredExpressOrCourierInternational()
    {
        return $this->_value === self::CodeType_DE_InsuredExpressOrCourierInternational;
    }

    /**
     * @return bool
     */
    public function isDE_SonderversandZBMobelKFZ()
    {
        return $this->_value === self::CodeType_DE_SonderversandZBMobelKFZ;
    }

    /**
     * @return bool
     */
    public function isDE_VersicherterSonderversandZBMobelKFZ()
    {
        return $this->_value === self::CodeType_DE_VersicherterSonderversandZBMobelKFZ;
    }

    /**
     * @return bool
     */
    public function isDE_DeutschePostBriefInternational()
    {
        return $this->_value === self::CodeType_DE_DeutschePostBriefInternational;
    }

    /**
     * @return bool
     */
    public function isIE_StandardInternationalFlatRatePostage()
    {
        return $this->_value === self::CodeType_IE_StandardInternationalFlatRatePostage;
    }

    /**
     * @return bool
     */
    public function isIE_ExpeditedInternationalFlatRatePostage()
    {
        return $this->_value === self::CodeType_IE_ExpeditedInternationalFlatRatePostage;
    }

    /**
     * @return bool
     */
    public function isIE_OtherInternationalPostage()
    {
        return $this->_value === self::CodeType_IE_OtherInternationalPostage;
    }

    /**
     * @return bool
     */
    public function isUK_StandardInternationalFlatRatePostage()
    {
        return $this->_value === self::CodeType_UK_StandardInternationalFlatRatePostage;
    }

    /**
     * @return bool
     */
    public function isUK_ExpeditedInternationalFlatRatePostage()
    {
        return $this->_value === self::CodeType_UK_ExpeditedInternationalFlatRatePostage;
    }

    /**
     * @return bool
     */
    public function isUK_OtherInternationalPostage()
    {
        return $this->_value === self::CodeType_UK_OtherInternationalPostage;
    }

    /**
     * @return bool
     */
    public function isFR_ChronopostChronoRelais()
    {
        return $this->_value === self::CodeType_FR_ChronopostChronoRelais;
    }

    /**
     * @return bool
     */
    public function isFR_Chrono10()
    {
        return $this->_value === self::CodeType_FR_Chrono10;
    }

    /**
     * @return bool
     */
    public function isFR_Chrono13()
    {
        return $this->_value === self::CodeType_FR_Chrono13;
    }

    /**
     * @return bool
     */
    public function isFR_Chrono18()
    {
        return $this->_value === self::CodeType_FR_Chrono18;
    }

    /**
     * @return bool
     */
    public function isFR_ChronopostExpressInternational()
    {
        return $this->_value === self::CodeType_FR_ChronopostExpressInternational;
    }

    /**
     * @return bool
     */
    public function isPickup()
    {
        return $this->_value === self::CodeType_Pickup;
    }

    /**
     * @return bool
     */
    public function isDelivery()
    {
        return $this->_value === self::CodeType_Delivery;
    }

    /**
     * @return bool
     */
    public function isCA_Pickup()
    {
        return $this->_value === self::CodeType_CA_Pickup;
    }

    /**
     * @return bool
     */
    public function isDE_Pickup()
    {
        return $this->_value === self::CodeType_DE_Pickup;
    }

    /**
     * @return bool
     */
    public function isAU_Pickup()
    {
        return $this->_value === self::CodeType_AU_Pickup;
    }

    /**
     * @return bool
     */
    public function isAU_SmallParcels()
    {
        return $this->_value === self::CodeType_AU_SmallParcels;
    }

    /**
     * @return bool
     */
    public function isAU_SmallParcelWithTracking()
    {
        return $this->_value === self::CodeType_AU_SmallParcelWithTracking;
    }

    /**
     * @return bool
     */
    public function isAU_SmallParcelWithTrackingAndSignature()
    {
        return $this->_value === self::CodeType_AU_SmallParcelWithTrackingAndSignature;
    }

    /**
     * @return bool
     */
    public function isAU_RegularParcelWithTracking()
    {
        return $this->_value === self::CodeType_AU_RegularParcelWithTracking;
    }

    /**
     * @return bool
     */
    public function isAU_RegularParcelWithTrackingAndSignature()
    {
        return $this->_value === self::CodeType_AU_RegularParcelWithTrackingAndSignature;
    }

    /**
     * @return bool
     */
    public function isAU_PrePaidExpressPostSatchel5kg()
    {
        return $this->_value === self::CodeType_AU_PrePaidExpressPostSatchel5kg;
    }

    /**
     * @return bool
     */
    public function isAU_PrePaidParcelPostSatchels500g()
    {
        return $this->_value === self::CodeType_AU_PrePaidParcelPostSatchels500g;
    }

    /**
     * @return bool
     */
    public function isAU_PrePaidParcelPostSatchels3kg()
    {
        return $this->_value === self::CodeType_AU_PrePaidParcelPostSatchels3kg;
    }

    /**
     * @return bool
     */
    public function isAU_PrePaidParcelPostSatchels5kg()
    {
        return $this->_value === self::CodeType_AU_PrePaidParcelPostSatchels5kg;
    }

    /**
     * @return bool
     */
    public function isAU_PrePaidExpressPostSatchel500g()
    {
        return $this->_value === self::CodeType_AU_PrePaidExpressPostSatchel500g;
    }

    /**
     * @return bool
     */
    public function isAU_PrePaidExpressPostSatchel3kg()
    {
        return $this->_value === self::CodeType_AU_PrePaidExpressPostSatchel3kg;
    }

    /**
     * @return bool
     */
    public function isAU_PrePaidExpressPostPlatinum500g()
    {
        return $this->_value === self::CodeType_AU_PrePaidExpressPostPlatinum500g;
    }

    /**
     * @return bool
     */
    public function isAU_PrePaidExpressPostPlatinum3kg()
    {
        return $this->_value === self::CodeType_AU_PrePaidExpressPostPlatinum3kg;
    }

    /**
     * @return bool
     */
    public function isAU_ExpressCourierInternational()
    {
        return $this->_value === self::CodeType_AU_ExpressCourierInternational;
    }

    /**
     * @return bool
     */
    public function isAU_ExpressPostInternational()
    {
        return $this->_value === self::CodeType_AU_ExpressPostInternational;
    }

    /**
     * @return bool
     */
    public function isAU_PrePaidExpressPostInternationalEnvelopeC5()
    {
        return $this->_value === self::CodeType_AU_PrePaidExpressPostInternationalEnvelopeC5;
    }

    /**
     * @return bool
     */
    public function isAU_PrePaidExpressPostInternationalEnvelopeB4()
    {
        return $this->_value === self::CodeType_AU_PrePaidExpressPostInternationalEnvelopeB4;
    }

    /**
     * @return bool
     */
    public function isAU_PrePaidExpressPostInternationalSatchels2kg()
    {
        return $this->_value === self::CodeType_AU_PrePaidExpressPostInternationalSatchels2kg;
    }

    /**
     * @return bool
     */
    public function isAU_PrePaidExpressPostInternationalSatchels3kg()
    {
        return $this->_value === self::CodeType_AU_PrePaidExpressPostInternationalSatchels3kg;
    }

    /**
     * @return bool
     */
    public function isAU_PrePaidExpressPostInternationalBox5kg()
    {
        return $this->_value === self::CodeType_AU_PrePaidExpressPostInternationalBox5kg;
    }

    /**
     * @return bool
     */
    public function isAU_PrePaidExpressPostInternationalBox10kg()
    {
        return $this->_value === self::CodeType_AU_PrePaidExpressPostInternationalBox10kg;
    }

    /**
     * @return bool
     */
    public function isAU_PrePaidExpressPostInternationalBox20kg()
    {
        return $this->_value === self::CodeType_AU_PrePaidExpressPostInternationalBox20kg;
    }

    /**
     * @return bool
     */
    public function isAU_RegisteredParcelPost()
    {
        return $this->_value === self::CodeType_AU_RegisteredParcelPost;
    }

    /**
     * @return bool
     */
    public function isAU_RegisteredSmallParcel()
    {
        return $this->_value === self::CodeType_AU_RegisteredSmallParcel;
    }

    /**
     * @return bool
     */
    public function isAU_RegisteredParcelPostPrepaidSatchel500g()
    {
        return $this->_value === self::CodeType_AU_RegisteredParcelPostPrepaidSatchel500g;
    }

    /**
     * @return bool
     */
    public function isAU_RegisteredParcelPostPrepaidSatchel3kg()
    {
        return $this->_value === self::CodeType_AU_RegisteredParcelPostPrepaidSatchel3kg;
    }

    /**
     * @return bool
     */
    public function isAU_RegisteredParcelPostPrepaidSatchel5kg()
    {
        return $this->_value === self::CodeType_AU_RegisteredParcelPostPrepaidSatchel5kg;
    }

    /**
     * @return bool
     */
    public function isAU_ExpressPostSatchel500g()
    {
        return $this->_value === self::CodeType_AU_ExpressPostSatchel500g;
    }

    /**
     * @return bool
     */
    public function isAU_ExpressPostSatchel3kg()
    {
        return $this->_value === self::CodeType_AU_ExpressPostSatchel3kg;
    }

    /**
     * @return bool
     */
    public function isFR_Pickup()
    {
        return $this->_value === self::CodeType_FR_Pickup;
    }

    /**
     * @return bool
     */
    public function isAT_Pickup()
    {
        return $this->_value === self::CodeType_AT_Pickup;
    }

    /**
     * @return bool
     */
    public function isBENL_Pickup()
    {
        return $this->_value === self::CodeType_BENL_Pickup;
    }

    /**
     * @return bool
     */
    public function isBEFR_Pickup()
    {
        return $this->_value === self::CodeType_BEFR_Pickup;
    }

    /**
     * @return bool
     */
    public function isCH_Pickup()
    {
        return $this->_value === self::CodeType_CH_Pickup;
    }

    /**
     * @return bool
     */
    public function isIT_Pickup()
    {
        return $this->_value === self::CodeType_IT_Pickup;
    }

    /**
     * @return bool
     */
    public function isNL_Pickup()
    {
        return $this->_value === self::CodeType_NL_Pickup;
    }

    /**
     * @return bool
     */
    public function isPL_Pickup()
    {
        return $this->_value === self::CodeType_PL_Pickup;
    }

    /**
     * @return bool
     */
    public function isES_Pickup()
    {
        return $this->_value === self::CodeType_ES_Pickup;
    }

    /**
     * @return bool
     */
    public function isSG_Delivery()
    {
        return $this->_value === self::CodeType_SG_Delivery;
    }

    /**
     * @return bool
     */
    public function isUK_OtherCourier24()
    {
        return $this->_value === self::CodeType_UK_OtherCourier24;
    }

    /**
     * @return bool
     */
    public function isUK_OtherCourier48()
    {
        return $this->_value === self::CodeType_UK_OtherCourier48;
    }

    /**
     * @return bool
     */
    public function isUK_OtherCourier3Days()
    {
        return $this->_value === self::CodeType_UK_OtherCourier3Days;
    }

    /**
     * @return bool
     */
    public function isUK_OtherCourier5Days()
    {
        return $this->_value === self::CodeType_UK_OtherCourier5Days;
    }

    /**
     * @return bool
     */
    public function isCourier()
    {
        return $this->_value === self::CodeType_Courier;
    }

    /**
     * @return bool
     */
    public function isFedExPriorityOvernight()
    {
        return $this->_value === self::CodeType_FedExPriorityOvernight;
    }

    /**
     * @return bool
     */
    public function isFedExStandardOvernight()
    {
        return $this->_value === self::CodeType_FedExStandardOvernight;
    }

    /**
     * @return bool
     */
    public function isFedEx2Day()
    {
        return $this->_value === self::CodeType_FedEx2Day;
    }

    /**
     * @return bool
     */
    public function isFedExGround()
    {
        return $this->_value === self::CodeType_FedExGround;
    }

    /**
     * @return bool
     */
    public function isFedExHomeDelivery()
    {
        return $this->_value === self::CodeType_FedExHomeDelivery;
    }

    /**
     * @return bool
     */
    public function isFedExExpressSaver()
    {
        return $this->_value === self::CodeType_FedExExpressSaver;
    }

    /**
     * @return bool
     */
    public function isFedExGroundDisabled()
    {
        return $this->_value === self::CodeType_FedExGroundDisabled;
    }

    /**
     * @return bool
     */
    public function isFedExHomeDeliveryDisabled()
    {
        return $this->_value === self::CodeType_FedExHomeDeliveryDisabled;
    }

    /**
     * @return bool
     */
    public function isFedExInternationalFirst()
    {
        return $this->_value === self::CodeType_FedExInternationalFirst;
    }

    /**
     * @return bool
     */
    public function isFedExInternationalPriority()
    {
        return $this->_value === self::CodeType_FedExInternationalPriority;
    }

    /**
     * @return bool
     */
    public function isFedExInternationalEconomy()
    {
        return $this->_value === self::CodeType_FedExInternationalEconomy;
    }

    /**
     * @return bool
     */
    public function isFedExInternationalGround()
    {
        return $this->_value === self::CodeType_FedExInternationalGround;
    }

    /**
     * @return bool
     */
    public function isEconomyShippingFromOutsideUS()
    {
        return $this->_value === self::CodeType_EconomyShippingFromOutsideUS;
    }

    /**
     * @return bool
     */
    public function isExpeditedShippingFromOutsideUS()
    {
        return $this->_value === self::CodeType_ExpeditedShippingFromOutsideUS;
    }

    /**
     * @return bool
     */
    public function isStandardShippingFromOutsideUS()
    {
        return $this->_value === self::CodeType_StandardShippingFromOutsideUS;
    }

    /**
     * @return bool
     */
    public function isUK_EconomyShippingFromOutside()
    {
        return $this->_value === self::CodeType_UK_EconomyShippingFromOutside;
    }

    /**
     * @return bool
     */
    public function isUK_ExpeditedShippingFromOutside()
    {
        return $this->_value === self::CodeType_UK_ExpeditedShippingFromOutside;
    }

    /**
     * @return bool
     */
    public function isUK_StandardShippingFromOutside()
    {
        return $this->_value === self::CodeType_UK_StandardShippingFromOutside;
    }

    /**
     * @return bool
     */
    public function isDE_SparversandAusDemAusland()
    {
        return $this->_value === self::CodeType_DE_SparversandAusDemAusland;
    }

    /**
     * @return bool
     */
    public function isDE_StandardversandAusDemAusland()
    {
        return $this->_value === self::CodeType_DE_StandardversandAusDemAusland;
    }

    /**
     * @return bool
     */
    public function isDE_ExpressversandAusDemAusland()
    {
        return $this->_value === self::CodeType_DE_ExpressversandAusDemAusland;
    }

    /**
     * @return bool
     */
    public function isDE_DHL2KGPaket()
    {
        return $this->_value === self::CodeType_DE_DHL2KGPaket;
    }

    /**
     * @return bool
     */
    public function isInternationalPriorityShipping()
    {
        return $this->_value === self::CodeType_InternationalPriorityShipping;
    }

    /**
     * @return bool
     */
    public function isSameDayShipping()
    {
        return $this->_value === self::CodeType_SameDayShipping;
    }

    /**
     * @return bool
     */
    public function isUK_RoyalMailNextDay()
    {
        return $this->_value === self::CodeType_UK_RoyalMailNextDay;
    }

    /**
     * @return bool
     */
    public function isUK_RoyalMailTracked()
    {
        return $this->_value === self::CodeType_UK_RoyalMailTracked;
    }

    /**
     * @return bool
     */
    public function isEBayNowImmediateDelivery()
    {
        return $this->_value === self::CodeType_eBayNowImmediateDelivery;
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

ShippingServiceCodeType::_register();
