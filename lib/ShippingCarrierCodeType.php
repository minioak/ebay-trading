<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ShippingCarrierCodeType extends EbatNs_FacetType
{
	const CodeType_UPS = 'UPS';
	const CodeType_USPS = 'USPS';
	const CodeType_FedEx = 'FedEx';
	const CodeType_DeutschePost = 'DeutschePost';
	const CodeType_DHL = 'DHL';
	const CodeType_Hermes = 'Hermes';
	const CodeType_iLoxx = 'iLoxx';
	const CodeType_Other = 'Other';
	const CodeType_ColiposteDomestic = 'ColiposteDomestic';
	const CodeType_ColiposteInternational = 'ColiposteInternational';
	const CodeType_Chronopost = 'Chronopost';
	const CodeType_Correos = 'Correos';
	const CodeType_Seur = 'Seur';
	const CodeType_Nacex = 'Nacex';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ShippingCarrierCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ShippingCarrierCodeType = new ShippingCarrierCodeType();
?>