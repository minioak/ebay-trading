<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PickupStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Invalid = 'Invalid';
	const CodeType_NotApplicable = 'NotApplicable';
	const CodeType_PendingMerchantConfirmation = 'PendingMerchantConfirmation';
	const CodeType_ReadyToPickup = 'ReadyToPickup';
	const CodeType_Pickedup = 'Pickedup';
	const CodeType_PickupCancelledOutOfStock = 'PickupCancelledOutOfStock';
	const CodeType_PickupCancelledBuyerRejected = 'PickupCancelledBuyerRejected';
	const CodeType_PickupCancelledBuyerNoShow = 'PickupCancelledBuyerNoShow';
	const CodeType_PickupCancelled = 'PickupCancelled';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PickupStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PickupStatusCodeType = new PickupStatusCodeType();
?>