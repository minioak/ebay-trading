<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PaymentOptionsGroupEnabledCodeType extends EbatNs_FacetType
{
	const CodeType_eBayPaymentProcessEnabled = 'eBayPaymentProcessEnabled';
	const CodeType_NonStandardPaymentsEnabled = 'NonStandardPaymentsEnabled';
	const CodeType_eBayPaymentProcessExcluded = 'eBayPaymentProcessExcluded';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PaymentOptionsGroupEnabledCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PaymentOptionsGroupEnabledCodeType = new PaymentOptionsGroupEnabledCodeType();
?>