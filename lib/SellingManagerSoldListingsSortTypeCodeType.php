<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SellingManagerSoldListingsSortTypeCodeType extends EbatNs_FacetType
{
	const CodeType_SalesRecordID = 'SalesRecordID';
	const CodeType_BuyerEmail = 'BuyerEmail';
	const CodeType_SaleFormat = 'SaleFormat';
	const CodeType_CustomLabel = 'CustomLabel';
	const CodeType_TotalPrice = 'TotalPrice';
	const CodeType_SaleDate = 'SaleDate';
	const CodeType_PaidDate = 'PaidDate';
	const CodeType_EmailsSent = 'EmailsSent';
	const CodeType_CheckoutState = 'CheckoutState';
	const CodeType_PaidState = 'PaidState';
	const CodeType_ShippedState = 'ShippedState';
	const CodeType_FeedbackLeft = 'FeedbackLeft';
	const CodeType_FeedbackReceived = 'FeedbackReceived';
	const CodeType_ShippedDate = 'ShippedDate';
	const CodeType_BuyerPostalCode = 'BuyerPostalCode';
	const CodeType_DaysSinceSale = 'DaysSinceSale';
	const CodeType_StartPrice = 'StartPrice';
	const CodeType_ReservePrice = 'ReservePrice';
	const CodeType_SoldOn = 'SoldOn';
	const CodeType_ShippingCost = 'ShippingCost';
	const CodeType_ListedOn = 'ListedOn';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerSoldListingsSortTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellingManagerSoldListingsSortTypeCodeType = new SellingManagerSoldListingsSortTypeCodeType();
?>