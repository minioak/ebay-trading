<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class FeedbackSummaryPeriodCodeType extends EbatNs_FacetType
{
	const CodeType_ThirtyDays = 'ThirtyDays';
	const CodeType_FiftyTwoWeeks = 'FiftyTwoWeeks';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('FeedbackSummaryPeriodCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_FeedbackSummaryPeriodCodeType = new FeedbackSummaryPeriodCodeType();
?>