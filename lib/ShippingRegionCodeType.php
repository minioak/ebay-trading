<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ShippingRegionCodeType extends EbatNs_FacetType
{
	const CodeType_Africa = 'Africa';
	const CodeType_Asia = 'Asia';
	const CodeType_Caribbean = 'Caribbean';
	const CodeType_Europe = 'Europe';
	const CodeType_LatinAmerica = 'LatinAmerica';
	const CodeType_MiddleEast = 'MiddleEast';
	const CodeType_NorthAmerica = 'NorthAmerica';
	const CodeType_Oceania = 'Oceania';
	const CodeType_SouthAmerica = 'SouthAmerica';
	const CodeType_EuropeanUnion = 'EuropeanUnion';
	const CodeType_WillNotShip = 'WillNotShip';
	const CodeType_Worldwide = 'Worldwide';
	const CodeType_Americas = 'Americas';
	const CodeType_None = 'None';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ShippingRegionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ShippingRegionCodeType = new ShippingRegionCodeType();
?>