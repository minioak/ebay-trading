<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class CalculatedShippingRateOptionCodeType extends EbatNs_FacetType
{
	const CodeType_CombinedItemWeight = 'CombinedItemWeight';
	const CodeType_IndividualItemWeight = 'IndividualItemWeight';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CalculatedShippingRateOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CalculatedShippingRateOptionCodeType = new CalculatedShippingRateOptionCodeType();
?>