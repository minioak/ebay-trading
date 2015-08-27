<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class RefundSourceTypeCodeType extends EbatNs_FacetType
{
	const CodeType_StoreCredit = 'StoreCredit';
	const CodeType_PaymentRefund = 'PaymentRefund';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('RefundSourceTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_RefundSourceTypeCodeType = new RefundSourceTypeCodeType();
?>