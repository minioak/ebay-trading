<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SellingManagerSearchTypeCodeType extends EbatNs_FacetType
{
	const CodeType_BuyerUserID = 'BuyerUserID';
	const CodeType_BuyerEmail = 'BuyerEmail';
	const CodeType_BuyerFullName = 'BuyerFullName';
	const CodeType_ItemID = 'ItemID';
	const CodeType_Title = 'Title';
	const CodeType_ProductID = 'ProductID';
	const CodeType_ProductName = 'ProductName';
	const CodeType_CustomLabel = 'CustomLabel';
	const CodeType_SaleRecordID = 'SaleRecordID';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerSearchTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellingManagerSearchTypeCodeType = new SellingManagerSearchTypeCodeType();
?>