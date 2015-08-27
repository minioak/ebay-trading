<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SellingManagerPaidStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Paid = 'Paid';
	const CodeType_PartiallyPaid = 'PartiallyPaid';
	const CodeType_Unpaid = 'Unpaid';
	const CodeType_Pending = 'Pending';
	const CodeType_Refunded = 'Refunded';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerPaidStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellingManagerPaidStatusCodeType = new SellingManagerPaidStatusCodeType();
?>