<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SMSSubscriptionUserStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Registered = 'Registered';
	const CodeType_Unregistered = 'Unregistered';
	const CodeType_Pending = 'Pending';
	const CodeType_Failed = 'Failed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SMSSubscriptionUserStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SMSSubscriptionUserStatusCodeType = new SMSSubscriptionUserStatusCodeType();
?>