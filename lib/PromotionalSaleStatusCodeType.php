<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PromotionalSaleStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Active = 'Active';
	const CodeType_Scheduled = 'Scheduled';
	const CodeType_Processing = 'Processing';
	const CodeType_Inactive = 'Inactive';
	const CodeType_Deleted = 'Deleted';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PromotionalSaleStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PromotionalSaleStatusCodeType = new PromotionalSaleStatusCodeType();
?>