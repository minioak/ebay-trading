<?php
/* Generated on 10.08.16 17:04 by globalsync
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