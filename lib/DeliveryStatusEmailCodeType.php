<?php
/* Generated on 8/11/15 3:23 AM by globalsync
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