<?php
/* Generated on 10.08.16 17:04 by globalsync
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