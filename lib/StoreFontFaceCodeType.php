<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class StoreFontFaceCodeType extends EbatNs_FacetType
{
	const CodeType_Arial = 'Arial';
	const CodeType_Courier = 'Courier';
	const CodeType_Times = 'Times';
	const CodeType_Verdana = 'Verdana';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('StoreFontFaceCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_StoreFontFaceCodeType = new StoreFontFaceCodeType();
?>