<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ShippingTrackingEventCodeType extends EbatNs_FacetType
{
	const CodeType_ValetReadyForPickup = 'ValetReadyForPickup';
	const CodeType_ValetPickedUpOrder = 'ValetPickedUpOrder';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ShippingTrackingEventCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ShippingTrackingEventCodeType = new ShippingTrackingEventCodeType();
?>