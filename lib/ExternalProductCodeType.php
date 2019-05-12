<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ExternalProductCodeType extends EbatNs_FacetType
{
	const CodeType_ISBN = 'ISBN';
	const CodeType_UPC = 'UPC';
	const CodeType_ProductID = 'ProductID';
	const CodeType_EAN = 'EAN';
	const CodeType_Keywords = 'Keywords';
	const CodeType_MPN = 'MPN';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ExternalProductCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ExternalProductCodeType = new ExternalProductCodeType();
?>