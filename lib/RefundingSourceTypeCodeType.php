<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class RefundingSourceTypeCodeType extends EbatNs_FacetType
{
	const CodeType_ScheduledPayout = 'ScheduledPayout';
	const CodeType_Paypal = 'Paypal';
	const CodeType_BankAccount = 'BankAccount';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('RefundingSourceTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_RefundingSourceTypeCodeType = new RefundingSourceTypeCodeType();
?>