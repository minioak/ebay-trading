<?php
/* Generated on 10.08.16 17:04 by globalsync
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