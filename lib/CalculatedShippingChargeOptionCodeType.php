<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class CalculatedShippingChargeOptionCodeType extends EbatNs_FacetType
{
	const CodeType_ChargeEachItem = 'ChargeEachItem';
	const CodeType_ChargeEntireOrder = 'ChargeEntireOrder';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CalculatedShippingChargeOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CalculatedShippingChargeOptionCodeType = new CalculatedShippingChargeOptionCodeType();
?>