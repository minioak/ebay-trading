<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SellereBayPaymentProcessStatusCodeType extends EbatNs_FacetType
{
	const CodeType_AcceptedUA = 'AcceptedUA';
	const CodeType_MustAcceptUA = 'MustAcceptUA';
	const CodeType_eBayPaymentProcessEnabled = 'eBayPaymentProcessEnabled';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellereBayPaymentProcessStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellereBayPaymentProcessStatusCodeType = new SellereBayPaymentProcessStatusCodeType();
?>