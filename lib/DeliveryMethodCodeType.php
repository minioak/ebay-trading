<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DeliveryMethodCodeType extends EbatNs_FacetType
{
	const CodeType_Email = 'Email';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DeliveryMethodCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DeliveryMethodCodeType = new DeliveryMethodCodeType();
?>