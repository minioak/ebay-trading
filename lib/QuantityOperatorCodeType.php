<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class QuantityOperatorCodeType extends EbatNs_FacetType
{
	const CodeType_LessThan = 'LessThan';
	const CodeType_LessThanOrEqual = 'LessThanOrEqual';
	const CodeType_Equal = 'Equal';
	const CodeType_GreaterThan = 'GreaterThan';
	const CodeType_GreaterThanOrEqual = 'GreaterThanOrEqual';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('QuantityOperatorCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_QuantityOperatorCodeType = new QuantityOperatorCodeType();
?>