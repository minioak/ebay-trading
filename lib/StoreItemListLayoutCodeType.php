<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class StoreItemListLayoutCodeType extends EbatNs_FacetType
{
	const CodeType_ListView = 'ListView';
	const CodeType_GalleryView = 'GalleryView';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('StoreItemListLayoutCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_StoreItemListLayoutCodeType = new StoreItemListLayoutCodeType();
?>