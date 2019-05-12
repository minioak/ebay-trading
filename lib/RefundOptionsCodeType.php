<?php
/* Generated on 10.08.16 17:04 by globalsync
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