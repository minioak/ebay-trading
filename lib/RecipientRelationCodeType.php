<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class RecipientRelationCodeType extends EbatNs_FacetType
{
	const CodeType_1 = '1';
	const CodeType_2 = '2';
	const CodeType_3 = '3';
	const CodeType_4 = '4';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('RecipientRelationCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_RecipientRelationCodeType = new RecipientRelationCodeType();
?>