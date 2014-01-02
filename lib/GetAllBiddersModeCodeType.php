<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies which bidder information to return. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetAllBiddersModeCodeType.html
 *
 * @property string ViewAll
 * @property string EndedListing
 * @property string SecondChanceEligibleEndedListing
 * @property string CustomCode
 */
class GetAllBiddersModeCodeType extends EbatNs_FacetType
{
	const CodeType_ViewAll = 'ViewAll';
	const CodeType_EndedListing = 'EndedListing';
	const CodeType_SecondChanceEligibleEndedListing = 'SecondChanceEligibleEndedListing';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetAllBiddersModeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_GetAllBiddersModeCodeType = new GetAllBiddersModeCodeType();

?>
