<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DeliveryStatusEmailCodeType extends EbatNs_FacetType
{
	const CodeType_Notified = 'Notified';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DeliveryStatusEmailCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DeliveryStatusEmailCodeType = new DeliveryStatusEmailCodeType();
?>