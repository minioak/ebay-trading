<?php
/* Generated on 10.08.16 17:04 by globalsync
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