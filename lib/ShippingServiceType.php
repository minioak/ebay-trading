<?php
/* Generated on 10.08.16 17:04 by globalsync
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