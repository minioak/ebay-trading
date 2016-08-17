<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class BidGroupItemStatusCodeType extends EbatNs_FacetType
{
	const CodeType_CurrentBid = 'CurrentBid';
	const CodeType_Cancelled = 'Cancelled';
	const CodeType_Pending = 'Pending';
	const CodeType_Skipped = 'Skipped';
	const CodeType_Ended = 'Ended';
	const CodeType_Won = 'Won';
	const CodeType_GroupClosed = 'GroupClosed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BidGroupItemStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BidGroupItemStatusCodeType = new BidGroupItemStatusCodeType();
?>