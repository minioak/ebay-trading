<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ShippingCostPaidByOptionsCodeType extends EbatNs_FacetType
{
	const CodeType_Buyer = 'Buyer';
	const CodeType_Seller = 'Seller';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_EUSeller_ReturnRights = 'EUSeller_ReturnRights';
	const CodeType_EUSeller_CancelRights = 'EUSeller_CancelRights';
	const CodeType_EUBuyer_CancelRightsUnder40 = 'EUBuyer_CancelRightsUnder40';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ShippingCostPaidByOptionsCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ShippingCostPaidByOptionsCodeType = new ShippingCostPaidByOptionsCodeType();
?>