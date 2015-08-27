<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SellingManagerShippedStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Shipped = 'Shipped';
	const CodeType_Unshipped = 'Unshipped';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerShippedStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellingManagerShippedStatusCodeType = new SellingManagerShippedStatusCodeType();
?>