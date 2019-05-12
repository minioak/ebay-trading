<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class FeedbackRatingStarCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_Yellow = 'Yellow';
	const CodeType_Blue = 'Blue';
	const CodeType_Turquoise = 'Turquoise';
	const CodeType_Purple = 'Purple';
	const CodeType_Red = 'Red';
	const CodeType_Green = 'Green';
	const CodeType_YellowShooting = 'YellowShooting';
	const CodeType_TurquoiseShooting = 'TurquoiseShooting';
	const CodeType_PurpleShooting = 'PurpleShooting';
	const CodeType_RedShooting = 'RedShooting';
	const CodeType_GreenShooting = 'GreenShooting';
	const CodeType_SilverShooting = 'SilverShooting';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('FeedbackRatingStarCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_FeedbackRatingStarCodeType = new FeedbackRatingStarCodeType();
?>