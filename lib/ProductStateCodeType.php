<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ProductStateCodeType extends EbatNs_FacetType
{
	const CodeType_Update = 'Update';
	const CodeType_UpdateMajor = 'UpdateMajor';
	const CodeType_UpdateNoDetails = 'UpdateNoDetails';
	const CodeType_Merge = 'Merge';
	const CodeType_Delete = 'Delete';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ProductStateCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ProductStateCodeType = new ProductStateCodeType();
?>