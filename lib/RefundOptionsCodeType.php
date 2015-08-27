<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class RefundOptionsCodeType extends EbatNs_FacetType
{
	const CodeType_MoneyBack = 'MoneyBack';
	const CodeType_Exchange = 'Exchange';
	const CodeType_MerchandiseCredit = 'MerchandiseCredit';
	const CodeType_MoneyBackOrExchange = 'MoneyBackOrExchange';
	const CodeType_MoneyBackOrReplacement = 'MoneyBackOrReplacement';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('RefundOptionsCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_RefundOptionsCodeType = new RefundOptionsCodeType();
?>