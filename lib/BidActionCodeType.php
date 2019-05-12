<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class BidActionCodeType extends EbatNs_FacetType
{
	const CodeType_Unknown = 'Unknown';
	const CodeType_Bid = 'Bid';
	const CodeType_NotUsed = 'NotUsed';
	const CodeType_Retraction = 'Retraction';
	const CodeType_AutoRetraction = 'AutoRetraction';
	const CodeType_Cancelled = 'Cancelled';
	const CodeType_AutoCancel = 'AutoCancel';
	const CodeType_Absentee = 'Absentee';
	const CodeType_BuyItNow = 'BuyItNow';
	const CodeType_Purchase = 'Purchase';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_Offer = 'Offer';
	const CodeType_Counter = 'Counter';
	const CodeType_Accept = 'Accept';
	const CodeType_Decline = 'Decline';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BidActionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BidActionCodeType = new BidActionCodeType();
?>