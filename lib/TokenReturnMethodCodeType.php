<?php
/* Generated on 8/11/15 3:23 AM by globalsync
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