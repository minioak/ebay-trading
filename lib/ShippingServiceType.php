<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ShippingServiceType extends EbatNs_FacetType
{
	const CodeType_Domestic = 'Domestic';
	const CodeType_International = 'International';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ShippingServiceType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ShippingServiceType = new ShippingServiceType();
?>