<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class CancelReasonCodeType extends EbatNs_FacetType
{
	const CodeType_OutOfStock = 'OutOfStock';
	const CodeType_BuyerNoShow = 'BuyerNoShow';
	const CodeType_BuyerRefused = 'BuyerRefused';
	const CodeType_BuyerNotSchedule = 'BuyerNotSchedule';
	const CodeType_BuyerCancelOrder = 'BuyerCancelOrder';
	const CodeType_ValetDeliveryIssues = 'ValetDeliveryIssues';
	const CodeType_ValetUnavailable = 'ValetUnavailable';
	const CodeType_OrderPlacedByMistake = 'OrderPlacedByMistake';
	const CodeType_PriceTooHigh = 'PriceTooHigh';
	const CodeType_FoundCheaperPrice = 'FoundCheaperPrice';
	const CodeType_WontArriveInTime = 'WontArriveInTime';
	const CodeType_BuyerCancelOrAddressIssue = 'BuyerCancelOrAddressIssue';
	const CodeType_OutOfStockOrCannotFulfill = 'OutOfStockOrCannotFulfill';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CancelReasonCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CancelReasonCodeType = new CancelReasonCodeType();
?>