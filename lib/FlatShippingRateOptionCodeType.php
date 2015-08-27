<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class FlatShippingRateOptionCodeType extends EbatNs_FacetType
{
	const CodeType_ChargeAmountForEachAdditionalItem = 'ChargeAmountForEachAdditionalItem';
	const CodeType_DeductAmountFromEachAdditionalItem = 'DeductAmountFromEachAdditionalItem';
	const CodeType_ShipAdditionalItemsFree = 'ShipAdditionalItemsFree';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('FlatShippingRateOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_FlatShippingRateOptionCodeType = new FlatShippingRateOptionCodeType();
?>