<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class OrderStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Active = 'Active';
	const CodeType_Inactive = 'Inactive';
	const CodeType_Completed = 'Completed';
	const CodeType_Cancelled = 'Cancelled';
	const CodeType_Shipped = 'Shipped';
	const CodeType_Default = 'Default';
	const CodeType_Authenticated = 'Authenticated';
	const CodeType_InProcess = 'InProcess';
	const CodeType_Invalid = 'Invalid';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_All = 'All';
	const CodeType_CancelPending = 'CancelPending';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('OrderStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_OrderStatusCodeType = new OrderStatusCodeType();
?>