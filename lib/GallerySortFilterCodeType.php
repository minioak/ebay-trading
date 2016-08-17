<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class GallerySortFilterCodeType extends EbatNs_FacetType
{
	const CodeType_ShowAnyItems = 'ShowAnyItems';
	const CodeType_ShowItemsWithGalleryImagesFirst = 'ShowItemsWithGalleryImagesFirst';
	const CodeType_ShowOnlyItemsWithGalleryImages = 'ShowOnlyItemsWithGalleryImages';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('GallerySortFilterCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_GallerySortFilterCodeType = new GallerySortFilterCodeType();
?>