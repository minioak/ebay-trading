<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class WarrantyDurationOptionsCodeType extends EbatNs_FacetType
{
	const CodeType_Months_1 = 'Months_1';
	const CodeType_Months_3 = 'Months_3';
	const CodeType_Months_6 = 'Months_6';
	const CodeType_Years_1 = 'Years_1';
	const CodeType_Years_2 = 'Years_2';
	const CodeType_Years_3 = 'Years_3';
	const CodeType_Years_MoreThan3 = 'Years_MoreThan3';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('WarrantyDurationOptionsCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_WarrantyDurationOptionsCodeType = new WarrantyDurationOptionsCodeType();
?>