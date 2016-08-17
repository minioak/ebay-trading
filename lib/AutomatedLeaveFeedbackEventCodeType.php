<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class AutomatedLeaveFeedbackEventCodeType extends EbatNs_FacetType
{
	const CodeType_PositiveFeedbackReceived = 'PositiveFeedbackReceived';
	const CodeType_PaymentReceived = 'PaymentReceived';
	const CodeType_None = 'None';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AutomatedLeaveFeedbackEventCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AutomatedLeaveFeedbackEventCodeType = new AutomatedLeaveFeedbackEventCodeType();
?>