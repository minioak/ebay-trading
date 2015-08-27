<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PromotionalSaleTypeCodeType extends EbatNs_FacetType
{
	const CodeType_PriceDiscountOnly = 'PriceDiscountOnly';
	const CodeType_FreeShippingOnly = 'FreeShippingOnly';
	const CodeType_PriceDiscountAndFreeShipping = 'PriceDiscountAndFreeShipping';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PromotionalSaleTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PromotionalSaleTypeCodeType = new PromotionalSaleTypeCodeType();
?>