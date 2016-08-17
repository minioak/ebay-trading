<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class UnitCodeType extends EbatNs_FacetType
{
	const CodeType_kg = 'kg';
	const CodeType_gm = 'gm';
	const CodeType_lbs = 'lbs';
	const CodeType_oz = 'oz';
	const CodeType_cm = 'cm';
	const CodeType_mm = 'mm';
	const CodeType_inches = 'inches';
	const CodeType_ft = 'ft';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('UnitCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_UnitCodeType = new UnitCodeType();
?>