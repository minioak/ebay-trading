<?php
/* Generated on 8/11/15 3:23 AM by globalsync
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