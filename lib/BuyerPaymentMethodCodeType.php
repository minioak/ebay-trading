<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class BuyerPaymentMethodCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_MOCC = 'MOCC';
	const CodeType_AmEx = 'AmEx';
	const CodeType_PaymentSeeDescription = 'PaymentSeeDescription';
	const CodeType_CCAccepted = 'CCAccepted';
	const CodeType_PersonalCheck = 'PersonalCheck';
	const CodeType_COD = 'COD';
	const CodeType_VisaMC = 'VisaMC';
	const CodeType_PaisaPayAccepted = 'PaisaPayAccepted';
	const CodeType_Other = 'Other';
	const CodeType_PayPal = 'PayPal';
	const CodeType_Discover = 'Discover';
	const CodeType_CashOnPickup = 'CashOnPickup';
	const CodeType_MoneyXferAccepted = 'MoneyXferAccepted';
	const CodeType_MoneyXferAcceptedInCheckout = 'MoneyXferAcceptedInCheckout';
	const CodeType_OtherOnlinePayments = 'OtherOnlinePayments';
	const CodeType_Escrow = 'Escrow';
	const CodeType_PrePayDelivery = 'PrePayDelivery';
	const CodeType_CODPrePayDelivery = 'CODPrePayDelivery';
	const CodeType_PostalTransfer = 'PostalTransfer';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_LoanCheck = 'LoanCheck';
	const CodeType_CashInPerson = 'CashInPerson';
	const CodeType_ELV = 'ELV';
	const CodeType_PaisaPayEscrow = 'PaisaPayEscrow';
	const CodeType_PaisaPayEscrowEMI = 'PaisaPayEscrowEMI';
	const CodeType_IntegratedMerchantCreditCard = 'IntegratedMerchantCreditCard';
	const CodeType_Moneybookers = 'Moneybookers';
	const CodeType_Paymate = 'Paymate';
	const CodeType_ProPay = 'ProPay';
	const CodeType_PayOnPickup = 'PayOnPickup';
	const CodeType_Diners = 'Diners';
	const CodeType_StandardPayment = 'StandardPayment';
	const CodeType_DirectDebit = 'DirectDebit';
	const CodeType_CreditCard = 'CreditCard';
	const CodeType_PayUponInvoice = 'PayUponInvoice';
	const CodeType_QIWI = 'QIWI';
	const CodeType_PayPalCredit = 'PayPalCredit';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BuyerPaymentMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BuyerPaymentMethodCodeType = new BuyerPaymentMethodCodeType();
?>