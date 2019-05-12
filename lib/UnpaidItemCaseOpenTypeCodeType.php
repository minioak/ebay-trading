<?php
/* Generated on 10.08.16 17:04 by globalsync
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