<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PictureManagerPictureDisplayTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Thumbnail = 'Thumbnail';
	const CodeType_BIBO = 'BIBO';
	const CodeType_Standard = 'Standard';
	const CodeType_Large = 'Large';
	const CodeType_Supersize = 'Supersize';
	const CodeType_Original = 'Original';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PictureManagerPictureDisplayTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PictureManagerPictureDisplayTypeCodeType = new PictureManagerPictureDisplayTypeCodeType();
?>