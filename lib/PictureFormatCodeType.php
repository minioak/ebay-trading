<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PictureFormatCodeType extends EbatNs_FacetType
{
	const CodeType_JPG = 'JPG';
	const CodeType_GIF = 'GIF';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PictureFormatCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PictureFormatCodeType = new PictureFormatCodeType();
?>