<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ShipmentStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Active = 'Active';
	const CodeType_Canceled = 'Canceled';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ShipmentStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ShipmentStatusCodeType = new ShipmentStatusCodeType();
?>