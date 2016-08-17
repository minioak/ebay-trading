<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class AccountEntrySortTypeCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_AccountEntryCreatedTimeAscending = 'AccountEntryCreatedTimeAscending';
	const CodeType_AccountEntryCreatedTimeDescending = 'AccountEntryCreatedTimeDescending';
	const CodeType_AccountEntryItemNumberAscending = 'AccountEntryItemNumberAscending';
	const CodeType_AccountEntryItemNumberDescending = 'AccountEntryItemNumberDescending';
	const CodeType_AccountEntryFeeTypeAscending = 'AccountEntryFeeTypeAscending';
	const CodeType_AccountEntryFeeTypeDescending = 'AccountEntryFeeTypeDescending';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AccountEntrySortTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AccountEntrySortTypeCodeType = new AccountEntrySortTypeCodeType();
?>