<?php
/* Generated on 8/11/15 3:23 AM by globalsync
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