<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PictureManagerDetailLevelCodeType extends EbatNs_FacetType
{
	const CodeType_ReturnAll = 'ReturnAll';
	const CodeType_ReturnSubscription = 'ReturnSubscription';
	const CodeType_ReturnPicture = 'ReturnPicture';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PictureManagerDetailLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PictureManagerDetailLevelCodeType = new PictureManagerDetailLevelCodeType();
?>