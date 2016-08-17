<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class BuyerProtectionSourceCodeType extends EbatNs_FacetType
{
	const CodeType_eBay = 'eBay';
	const CodeType_PayPal = 'PayPal';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BuyerProtectionSourceCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BuyerProtectionSourceCodeType = new BuyerProtectionSourceCodeType();
?>