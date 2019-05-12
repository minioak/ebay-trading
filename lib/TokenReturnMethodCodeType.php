<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class TokenReturnMethodCodeType extends EbatNs_FacetType
{
	const CodeType_Redirect = 'Redirect';
	const CodeType_FetchToken = 'FetchToken';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('TokenReturnMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_TokenReturnMethodCodeType = new TokenReturnMethodCodeType();
?>