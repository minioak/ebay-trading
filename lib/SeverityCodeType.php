<?php
/* Generated on 10.08.16 17:04 by globalsync
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