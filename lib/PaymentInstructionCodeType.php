<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PaymentInstructionCodeType extends EbatNs_FacetType
{
	const CodeType_PaymentInstruction = 'PaymentInstruction';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PaymentInstructionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PaymentInstructionCodeType = new PaymentInstructionCodeType();
?>