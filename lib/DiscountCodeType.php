<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DiscountCodeType extends EbatNs_FacetType
{
	const CodeType_Percentage = 'Percentage';
	const CodeType_Price = 'Price';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DiscountCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DiscountCodeType = new DiscountCodeType();
?>