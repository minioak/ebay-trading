<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class AccessRuleCurrentStatusCodeType extends EbatNs_FacetType
{
	const CodeType_NotSet = 'NotSet';
	const CodeType_HourlyLimitExceeded = 'HourlyLimitExceeded';
	const CodeType_DailyLimitExceeded = 'DailyLimitExceeded';
	const CodeType_PeriodicLimitExceeded = 'PeriodicLimitExceeded';
	const CodeType_HourlySoftLimitExceeded = 'HourlySoftLimitExceeded';
	const CodeType_DailySoftLimitExceeded = 'DailySoftLimitExceeded';
	const CodeType_PeriodicSoftLimitExceeded = 'PeriodicSoftLimitExceeded';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AccessRuleCurrentStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AccessRuleCurrentStatusCodeType = new AccessRuleCurrentStatusCodeType();
?>