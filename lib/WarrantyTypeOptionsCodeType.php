<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class WarrantyTypeOptionsCodeType extends EbatNs_FacetType
{
	const CodeType_ReplacementWarranty = 'ReplacementWarranty';
	const CodeType_DealerWarranty = 'DealerWarranty';
	const CodeType_ManufacturerWarranty = 'ManufacturerWarranty';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('WarrantyTypeOptionsCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_WarrantyTypeOptionsCodeType = new WarrantyTypeOptionsCodeType();
?>