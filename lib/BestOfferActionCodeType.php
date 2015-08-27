<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class BestOfferActionCodeType extends EbatNs_FacetType
{
	const CodeType_Accept = 'Accept';
	const CodeType_Decline = 'Decline';
	const CodeType_Counter = 'Counter';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BestOfferActionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BestOfferActionCodeType = new BestOfferActionCodeType();
?>