<?php
/* Generated on 10.08.16 17:04 by globalsync
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