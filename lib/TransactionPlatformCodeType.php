<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class TransactionPlatformCodeType extends EbatNs_FacetType
{
	const CodeType_eBay = 'eBay';
	const CodeType_Express = 'Express';
	const CodeType_Half = 'Half';
	const CodeType_Shopping = 'Shopping';
	const CodeType_WorldOfGood = 'WorldOfGood';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('TransactionPlatformCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_TransactionPlatformCodeType = new TransactionPlatformCodeType();
?>