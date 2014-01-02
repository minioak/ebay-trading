<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Specifies how cross-promoted items with gallery imagesshould be displayed. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GallerySortFilterCodeType.html
 *
 * @property string ShowAnyItems
 * @property string ShowItemsWithGalleryImagesFirst
 * @property string ShowOnlyItemsWithGalleryImages
 * @property string CustomCode
 */
class GallerySortFilterCodeType extends EbatNs_FacetType
{
	const CodeType_ShowAnyItems = 'ShowAnyItems';
	const CodeType_ShowItemsWithGalleryImagesFirst = 'ShowItemsWithGalleryImagesFirst';
	const CodeType_ShowOnlyItemsWithGalleryImages = 'ShowOnlyItemsWithGalleryImages';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GallerySortFilterCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_GallerySortFilterCodeType = new GallerySortFilterCodeType();

?>
