<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PictureWatermarkCodeType extends EbatNs_FacetType
{
	const CodeType_User = 'User';
	const CodeType_Icon = 'Icon';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PictureWatermarkCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PictureWatermarkCodeType = new PictureWatermarkCodeType();
?>