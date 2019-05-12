<?php
/* Generated on 10.08.16 17:04 by globalsync
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