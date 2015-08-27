<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DigitalStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Inactive = 'Inactive';
	const CodeType_Activated = 'Activated';
	const CodeType_Downloaded = 'Downloaded';
	const CodeType_Deactivated = 'Deactivated';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DigitalStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DigitalStatusCodeType = new DigitalStatusCodeType();
?>