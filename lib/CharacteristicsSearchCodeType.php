<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class CharacteristicsSearchCodeType extends EbatNs_FacetType
{
	const CodeType_Single = 'Single';
	const CodeType_Multi = 'Multi';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CharacteristicsSearchCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CharacteristicsSearchCodeType = new CharacteristicsSearchCodeType();
?>