<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class EnableCodeType extends EbatNs_FacetType
{
	const CodeType_Enable = 'Enable';
	const CodeType_Disable = 'Disable';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('EnableCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_EnableCodeType = new EnableCodeType();
?>