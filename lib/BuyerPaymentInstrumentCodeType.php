<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class BuyerPaymentInstrumentCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_CreditCard = 'CreditCard';
	const CodeType_BankDirectDebit = 'BankDirectDebit';
	const CodeType_PayPal = 'PayPal';
	const CodeType_ELV = 'ELV';
	const CodeType_LocalPaymentCreditCardOther = 'LocalPaymentCreditCardOther';
	const CodeType_LocalPaymentELV = 'LocalPaymentELV';
	const CodeType_LocalPaymentMasterCard = 'LocalPaymentMasterCard';
	const CodeType_LocalPaymentAMEX = 'LocalPaymentAMEX';
	const CodeType_LocalPaymentVISA = 'LocalPaymentVISA';
	const CodeType_LocalPaymentDiscover = 'LocalPaymentDiscover';
	const CodeType_LocalPaymentDinersclub = 'LocalPaymentDinersclub';
	const CodeType_LocalPaymentJCB = 'LocalPaymentJCB';
	const CodeType_LocalPaymentSWITCH = 'LocalPaymentSWITCH';
	const CodeType_LocalPaymentSOLO = 'LocalPaymentSOLO';
	const CodeType_GIROPAY = 'GIROPAY';
	const CodeType_BML = 'BML';
	const CodeType_PayUponInvoice = 'PayUponInvoice';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BuyerPaymentInstrumentCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BuyerPaymentInstrumentCodeType = new BuyerPaymentInstrumentCodeType();
?>