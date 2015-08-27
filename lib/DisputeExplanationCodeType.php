<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DisputeExplanationCodeType extends EbatNs_FacetType
{
	const CodeType_BuyerHasNotResponded = 'BuyerHasNotResponded';
	const CodeType_BuyerRefusedToPay = 'BuyerRefusedToPay';
	const CodeType_BuyerNotClearedToPay = 'BuyerNotClearedToPay';
	const CodeType_BuyerReturnedItemForRefund = 'BuyerReturnedItemForRefund';
	const CodeType_UnableToResolveTerms = 'UnableToResolveTerms';
	const CodeType_BuyerNoLongerWantsItem = 'BuyerNoLongerWantsItem';
	const CodeType_BuyerPurchasingMistake = 'BuyerPurchasingMistake';
	const CodeType_ShipCountryNotSupported = 'ShipCountryNotSupported';
	const CodeType_ShippingAddressNotConfirmed = 'ShippingAddressNotConfirmed';
	const CodeType_PaymentMethodNotSupported = 'PaymentMethodNotSupported';
	const CodeType_BuyerNoLongerRegistered = 'BuyerNoLongerRegistered';
	const CodeType_OtherExplanation = 'OtherExplanation';
	const CodeType_Unspecified = 'Unspecified';
	const CodeType_UPIAssistance = 'UPIAssistance';
	const CodeType_BuyerPaymentNotReceivedOrCleared = 'BuyerPaymentNotReceivedOrCleared';
	const CodeType_SellerDoesntShipToCountry = 'SellerDoesntShipToCountry';
	const CodeType_BuyerNotPaid = 'BuyerNotPaid';
	const CodeType_UPIAssistanceDisabled = 'UPIAssistanceDisabled';
	const CodeType_SellerRanOutOfStock = 'SellerRanOutOfStock';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DisputeExplanationCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DisputeExplanationCodeType = new DisputeExplanationCodeType();
?>