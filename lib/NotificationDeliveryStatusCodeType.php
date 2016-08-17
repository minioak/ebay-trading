<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class NotificationDeliveryStatusCodeType extends EbatNs_FacetType
{
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_Delivered = 'Delivered';
	const CodeType_Failed = 'Failed';
	const CodeType_Rejected = 'Rejected';
	const CodeType_MarkedDown = 'MarkedDown';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('NotificationDeliveryStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_NotificationDeliveryStatusCodeType = new NotificationDeliveryStatusCodeType();
?>