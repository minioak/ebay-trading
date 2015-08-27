<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PaymentMethodSearchCodeType extends EbatNs_FacetType
{
	const CodeType_PayPal = 'PayPal';
	const CodeType_PaisaPay = 'PaisaPay';
	const CodeType_PayPalOrPaisaPay = 'PayPalOrPaisaPay';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_PaisaPayEscrowEMI = 'PaisaPayEscrowEMI';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PaymentMethodSearchCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PaymentMethodSearchCodeType = new PaymentMethodSearchCodeType();
?>