<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class GeneralPaymentMethodCodeType extends EbatNs_FacetType
{
	const CodeType_Other = 'Other';
	const CodeType_Echeck = 'Echeck';
	const CodeType_ACH = 'ACH';
	const CodeType_Creditcard = 'Creditcard';
	const CodeType_PayPalBalance = 'PayPalBalance';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('GeneralPaymentMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_GeneralPaymentMethodCodeType = new GeneralPaymentMethodCodeType();
?>