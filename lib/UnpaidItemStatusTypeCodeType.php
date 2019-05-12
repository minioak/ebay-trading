<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class UnpaidItemStatusTypeCodeType extends EbatNs_FacetType
{
	const CodeType_FinalValueFeeDenied = 'FinalValueFeeDenied';
	const CodeType_FinalValueFeeCredited = 'FinalValueFeeCredited';
	const CodeType_FinalValueFeeEligible = 'FinalValueFeeEligible';
	const CodeType_AwaitingSellerResponse = 'AwaitingSellerResponse';
	const CodeType_AwaitingBuyerResponse = 'AwaitingBuyerResponse';
	const CodeType_UnpaidItemFiled = 'UnpaidItemFiled';
	const CodeType_UnpaidItemEligible = 'UnpaidItemEligible';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('UnpaidItemStatusTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_UnpaidItemStatusTypeCodeType = new UnpaidItemStatusTypeCodeType();
?>