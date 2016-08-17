<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class GiftServicesCodeType extends EbatNs_FacetType
{
	const CodeType_GiftExpressShipping = 'GiftExpressShipping';
	const CodeType_GiftShipToRecipient = 'GiftShipToRecipient';
	const CodeType_GiftWrap = 'GiftWrap';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('GiftServicesCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_GiftServicesCodeType = new GiftServicesCodeType();
?>