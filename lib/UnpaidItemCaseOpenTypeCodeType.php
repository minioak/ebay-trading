<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class UnpaidItemCaseOpenTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Auto = 'Auto';
	const CodeType_Manual = 'Manual';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('UnpaidItemCaseOpenTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_UnpaidItemCaseOpenTypeCodeType = new UnpaidItemCaseOpenTypeCodeType();
?>