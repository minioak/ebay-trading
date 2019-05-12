<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PaymentHoldStatusCodeType extends EbatNs_FacetType
{
	const CodeType_PaymentReview = 'PaymentReview';
	const CodeType_MerchantHold = 'MerchantHold';
	const CodeType_Released = 'Released';
	const CodeType_None = 'None';
	const CodeType_NewSellerHold = 'NewSellerHold';
	const CodeType_PaymentHold = 'PaymentHold';
	const CodeType_ReleasePending = 'ReleasePending';
	const CodeType_ReleaseConfirmed = 'ReleaseConfirmed';
	const CodeType_ReleaseFailed = 'ReleaseFailed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PaymentHoldStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PaymentHoldStatusCodeType = new PaymentHoldStatusCodeType();
?>