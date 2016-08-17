<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class CheckoutStatusCodeType extends EbatNs_FacetType
{
	const CodeType_CheckoutComplete = 'CheckoutComplete';
	const CodeType_CheckoutIncomplete = 'CheckoutIncomplete';
	const CodeType_BuyerRequestsTotal = 'BuyerRequestsTotal';
	const CodeType_SellerResponded = 'SellerResponded';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CheckoutStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CheckoutStatusCodeType = new CheckoutStatusCodeType();
?>