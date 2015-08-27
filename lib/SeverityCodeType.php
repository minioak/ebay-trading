<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SeverityCodeType extends EbatNs_FacetType
{
	const CodeType_Warning = 'Warning';
	const CodeType_Error = 'Error';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SeverityCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SeverityCodeType = new SeverityCodeType();
?>