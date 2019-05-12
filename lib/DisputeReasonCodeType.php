<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DisputeReasonCodeType extends EbatNs_FacetType
{
	const CodeType_BuyerHasNotPaid = 'BuyerHasNotPaid';
	const CodeType_TransactionMutuallyCanceled = 'TransactionMutuallyCanceled';
	const CodeType_ItemNotReceived = 'ItemNotReceived';
	const CodeType_SignificantlyNotAsDescribed = 'SignificantlyNotAsDescribed';
	const CodeType_NoRefund = 'NoRefund';
	const CodeType_ReturnPolicyUnpaidItem = 'ReturnPolicyUnpaidItem';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DisputeReasonCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DisputeReasonCodeType = new DisputeReasonCodeType();
?>