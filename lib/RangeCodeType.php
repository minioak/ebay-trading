<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class RangeCodeType extends EbatNs_FacetType
{
	const CodeType_High = 'High';
	const CodeType_Low = 'Low';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('RangeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_RangeCodeType = new RangeCodeType();
?>