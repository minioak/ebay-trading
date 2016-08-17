<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SellerGuaranteeLevelCodeType extends EbatNs_FacetType
{
	const CodeType_NotEligible = 'NotEligible';
	const CodeType_Regular = 'Regular';
	const CodeType_Premium = 'Premium';
	const CodeType_Ultra = 'Ultra';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellerGuaranteeLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellerGuaranteeLevelCodeType = new SellerGuaranteeLevelCodeType();
?>