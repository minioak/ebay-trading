<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class EndOfAuctionLogoTypeCodeType extends EbatNs_FacetType
{
	const CodeType_WinningBidderNotice = 'WinningBidderNotice';
	const CodeType_Store = 'Store';
	const CodeType_Customized = 'Customized';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_None = 'None';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('EndOfAuctionLogoTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_EndOfAuctionLogoTypeCodeType = new EndOfAuctionLogoTypeCodeType();
?>