<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class RefundTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Full = 'Full';
	const CodeType_FullPlusShipping = 'FullPlusShipping';
	const CodeType_CustomOrPartial = 'CustomOrPartial';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('RefundTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_RefundTypeCodeType = new RefundTypeCodeType();
?>