<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DescriptionReviseModeCodeType extends EbatNs_FacetType
{
	const CodeType_Replace = 'Replace';
	const CodeType_Prepend = 'Prepend';
	const CodeType_Append = 'Append';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DescriptionReviseModeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DescriptionReviseModeCodeType = new DescriptionReviseModeCodeType();
?>