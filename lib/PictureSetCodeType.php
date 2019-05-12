<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PictureSetCodeType extends EbatNs_FacetType
{
	const CodeType_Standard = 'Standard';
	const CodeType_Supersize = 'Supersize';
	const CodeType_Large = 'Large';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PictureSetCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PictureSetCodeType = new PictureSetCodeType();
?>