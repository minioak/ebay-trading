<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class BalanceCodeType extends EbatNs_FacetType
{
	const CodeType_Other = 'Other';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BalanceCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BalanceCodeType = new BalanceCodeType();
?>