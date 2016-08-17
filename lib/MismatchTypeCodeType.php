<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class MismatchTypeCodeType extends EbatNs_FacetType
{
	const CodeType_OverPayment = 'OverPayment';
	const CodeType_UnderPayment = 'UnderPayment';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MismatchTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_MismatchTypeCodeType = new MismatchTypeCodeType();
?>