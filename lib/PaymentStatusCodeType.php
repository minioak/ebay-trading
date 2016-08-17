<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PaymentStatusCodeType extends EbatNs_FacetType
{
	const CodeType_NoPaymentFailure = 'NoPaymentFailure';
	const CodeType_BuyerECheckBounced = 'BuyerECheckBounced';
	const CodeType_BuyerCreditCardFailed = 'BuyerCreditCardFailed';
	const CodeType_BuyerFailedPaymentReportedBySeller = 'BuyerFailedPaymentReportedBySeller';
	const CodeType_PayPalPaymentInProcess = 'PayPalPaymentInProcess';
	const CodeType_PaymentInProcess = 'PaymentInProcess';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PaymentStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PaymentStatusCodeType = new PaymentStatusCodeType();
?>