<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SellerPaymentMethodCodeType extends EbatNs_FacetType
{
	const CodeType_NothingOnFile = 'NothingOnFile';
	const CodeType_CreditCard = 'CreditCard';
	const CodeType_PayPal = 'PayPal';
	const CodeType_DirectDebit = 'DirectDebit';
	const CodeType_DirectDebitPendingSignatureMandate = 'DirectDebitPendingSignatureMandate';
	const CodeType_eBayDirectPay = 'eBayDirectPay';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_DirectDebitPendingVerification = 'DirectDebitPendingVerification';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellerPaymentMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellerPaymentMethodCodeType = new SellerPaymentMethodCodeType();
?>