<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class AccountStateCodeType extends EbatNs_FacetType
{
	const CodeType_Active = 'Active';
	const CodeType_Pending = 'Pending';
	const CodeType_Inactive = 'Inactive';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AccountStateCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AccountStateCodeType = new AccountStateCodeType();
?>