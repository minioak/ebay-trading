<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The set of valid states for an order. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/OrderStatusCodeType.html
 *
 * @property string Active
 * @property string Inactive
 * @property string Completed
 * @property string Cancelled
 * @property string Shipped
 * @property string Default
 * @property string Authenticated
 * @property string InProcess
 * @property string Invalid
 * @property string CustomCode
 * @property string All
 */
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

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('OrderStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_OrderStatusCodeType = new OrderStatusCodeType();

?>
