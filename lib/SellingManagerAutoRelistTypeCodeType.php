<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SellingManagerAutoRelistTypeCodeType extends EbatNs_FacetType
{
	const CodeType_RelistOnceIfNotSold = 'RelistOnceIfNotSold';
	const CodeType_RelistContinuouslyUntilSold = 'RelistContinuouslyUntilSold';
	const CodeType_RelistContinuously = 'RelistContinuously';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerAutoRelistTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellingManagerAutoRelistTypeCodeType = new SellingManagerAutoRelistTypeCodeType();
?>