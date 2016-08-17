<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PictureManagerSubscriptionLevelCodeType extends EbatNs_FacetType
{
	const CodeType_Free = 'Free';
	const CodeType_Level1 = 'Level1';
	const CodeType_Level2 = 'Level2';
	const CodeType_Level3 = 'Level3';
	const CodeType_Level4 = 'Level4';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PictureManagerSubscriptionLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PictureManagerSubscriptionLevelCodeType = new PictureManagerSubscriptionLevelCodeType();
?>