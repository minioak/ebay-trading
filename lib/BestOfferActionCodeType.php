<?php
/* Generated on 10.08.16 17:04 by globalsync
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