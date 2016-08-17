<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class EndReasonCodeType extends EbatNs_FacetType
{
	const CodeType_LostOrBroken = 'LostOrBroken';
	const CodeType_NotAvailable = 'NotAvailable';
	const CodeType_Incorrect = 'Incorrect';
	const CodeType_OtherListingError = 'OtherListingError';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_SellToHighBidder = 'SellToHighBidder';
	const CodeType_Sold = 'Sold';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('EndReasonCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_EndReasonCodeType = new EndReasonCodeType();
?>