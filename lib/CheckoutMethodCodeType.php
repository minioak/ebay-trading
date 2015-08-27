<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class CheckoutMethodCodeType extends EbatNs_FacetType
{
	const CodeType_Other = 'Other';
	const CodeType_ThirdPartyCheckout = 'ThirdPartyCheckout';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CheckoutMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CheckoutMethodCodeType = new CheckoutMethodCodeType();
?>