<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class UnpaidItemCaseStatusTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Open = 'Open';
	const CodeType_ClosedWithPayment = 'ClosedWithPayment';
	const CodeType_ClosedWithoutPayment = 'ClosedWithoutPayment';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('UnpaidItemCaseStatusTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_UnpaidItemCaseStatusTypeCodeType = new UnpaidItemCaseStatusTypeCodeType();
?>