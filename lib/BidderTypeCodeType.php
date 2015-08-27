<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class BidderTypeCodeType extends EbatNs_FacetType
{
	const CodeType_AllBidder = 'AllBidder';
	const CodeType_HighBidder = 'HighBidder';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BidderTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BidderTypeCodeType = new BidderTypeCodeType();
?>