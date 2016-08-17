<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class AccountHistorySelectionCodeType extends EbatNs_FacetType
{
	const CodeType_LastInvoice = 'LastInvoice';
	const CodeType_SpecifiedInvoice = 'SpecifiedInvoice';
	const CodeType_BetweenSpecifiedDates = 'BetweenSpecifiedDates';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AccountHistorySelectionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AccountHistorySelectionCodeType = new AccountHistorySelectionCodeType();
?>