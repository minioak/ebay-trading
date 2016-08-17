<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class CharityAffiliationTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Community = 'Community';
	const CodeType_Direct = 'Direct';
	const CodeType_Remove = 'Remove';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CharityAffiliationTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CharityAffiliationTypeCodeType = new CharityAffiliationTypeCodeType();
?>