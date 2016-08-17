<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class GranularityLevelCodeType extends EbatNs_FacetType
{
	const CodeType_Coarse = 'Coarse';
	const CodeType_Fine = 'Fine';
	const CodeType_Medium = 'Medium';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('GranularityLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_GranularityLevelCodeType = new GranularityLevelCodeType();
?>