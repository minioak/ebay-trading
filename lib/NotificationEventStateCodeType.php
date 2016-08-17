<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class NotificationEventStateCodeType extends EbatNs_FacetType
{
	const CodeType_New = 'New';
	const CodeType_Failed = 'Failed';
	const CodeType_MarkedDown = 'MarkedDown';
	const CodeType_Pending = 'Pending';
	const CodeType_FailedPending = 'FailedPending';
	const CodeType_MarkedDownPending = 'MarkedDownPending';
	const CodeType_Delivered = 'Delivered';
	const CodeType_Undeliverable = 'Undeliverable';
	const CodeType_Rejected = 'Rejected';
	const CodeType_Canceled = 'Canceled';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('NotificationEventStateCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_NotificationEventStateCodeType = new NotificationEventStateCodeType();
?>