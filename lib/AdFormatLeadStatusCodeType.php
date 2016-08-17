<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class AdFormatLeadStatusCodeType extends EbatNs_FacetType
{
	const CodeType_New = 'New';
	const CodeType_Responded = 'Responded';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AdFormatLeadStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AdFormatLeadStatusCodeType = new AdFormatLeadStatusCodeType();
?>