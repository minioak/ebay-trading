<?php
/* Generated on 10.08.16 17:04 by globalsync
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