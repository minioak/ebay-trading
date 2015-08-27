<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DepositTypeCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_OtherMethod = 'OtherMethod';
	const CodeType_FastDeposit = 'FastDeposit';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DepositTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DepositTypeCodeType = new DepositTypeCodeType();
?>