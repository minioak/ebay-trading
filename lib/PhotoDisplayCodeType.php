<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PhotoDisplayCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_SlideShow = 'SlideShow';
	const CodeType_SuperSize = 'SuperSize';
	const CodeType_PicturePack = 'PicturePack';
	const CodeType_SiteHostedPictureShow = 'SiteHostedPictureShow';
	const CodeType_VendorHostedPictureShow = 'VendorHostedPictureShow';
	const CodeType_SuperSizePictureShow = 'SuperSizePictureShow';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PhotoDisplayCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PhotoDisplayCodeType = new PhotoDisplayCodeType();
?>