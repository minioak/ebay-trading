<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class CombinedPaymentOptionCodeType extends EbatNs_FacetType
{
	const CodeType_NoCombinedPayment = 'NoCombinedPayment';
	const CodeType_DiscountSpecified = 'DiscountSpecified';
	const CodeType_SpecifyDiscountLater = 'SpecifyDiscountLater';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CombinedPaymentOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CombinedPaymentOptionCodeType = new CombinedPaymentOptionCodeType();
?>