<?php
/* Generated on 10.08.16 17:04 by globalsync
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