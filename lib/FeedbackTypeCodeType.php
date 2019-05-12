<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class FeedbackTypeCodeType extends EbatNs_FacetType
{
	const CodeType_FeedbackReceivedAsSeller = 'FeedbackReceivedAsSeller';
	const CodeType_FeedbackReceivedAsBuyer = 'FeedbackReceivedAsBuyer';
	const CodeType_FeedbackReceived = 'FeedbackReceived';
	const CodeType_FeedbackLeft = 'FeedbackLeft';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('FeedbackTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_FeedbackTypeCodeType = new FeedbackTypeCodeType();
?>