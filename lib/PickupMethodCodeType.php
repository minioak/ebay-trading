<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PickupMethodCodeType extends EbatNs_FacetType
{
	const CodeType_InStorePickup = 'InStorePickup';
	const CodeType_PickUpDropOff = 'PickUpDropOff';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PickupMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PickupMethodCodeType = new PickupMethodCodeType();
?>