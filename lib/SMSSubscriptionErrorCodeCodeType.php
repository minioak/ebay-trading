<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SMSSubscriptionErrorCodeCodeType extends EbatNs_FacetType
{
	const CodeType_SMSAggregatorNotAvailable = 'SMSAggregatorNotAvailable';
	const CodeType_PhoneNumberInvalid = 'PhoneNumberInvalid';
	const CodeType_PhoneNumberChanged = 'PhoneNumberChanged';
	const CodeType_PhoneNumberCarrierChanged = 'PhoneNumberCarrierChanged';
	const CodeType_UserRequestedUnregistration = 'UserRequestedUnregistration';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SMSSubscriptionErrorCodeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SMSSubscriptionErrorCodeCodeType = new SMSSubscriptionErrorCodeCodeType();
?>