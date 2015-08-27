<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SellingManagerProductSortCodeType extends EbatNs_FacetType
{
	const CodeType_ActiveQuantity = 'ActiveQuantity';
	const CodeType_AvailableToList = 'AvailableToList';
	const CodeType_AveragePrice = 'AveragePrice';
	const CodeType_AverageUnitCost = 'AverageUnitCost';
	const CodeType_CustomLabel = 'CustomLabel';
	const CodeType_ProductName = 'ProductName';
	const CodeType_LastSubmittedDate = 'LastSubmittedDate';
	const CodeType_ScheduledQuantity = 'ScheduledQuantity';
	const CodeType_SoldQuantity = 'SoldQuantity';
	const CodeType_SuccessPercent = 'SuccessPercent';
	const CodeType_UnsoldQuantity = 'UnsoldQuantity';
	const CodeType_FolderName = 'FolderName';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerProductSortCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellingManagerProductSortCodeType = new SellingManagerProductSortCodeType();
?>