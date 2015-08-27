<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class BuyerSatisfactionStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Excellent = 'Excellent';
	const CodeType_Good = 'Good';
	const CodeType_NeedsWork = 'NeedsWork';
	const CodeType_Poor = 'Poor';
	const CodeType_VeryPoor = 'VeryPoor';
	const CodeType_Unacceptable = 'Unacceptable';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BuyerSatisfactionStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BuyerSatisfactionStatusCodeType = new BuyerSatisfactionStatusCodeType();
?>