<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ReasonHideFromSearchCodeType extends EbatNs_FacetType
{
	const CodeType_DuplicateListing = 'DuplicateListing';
	const CodeType_OutOfStock = 'OutOfStock';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ReasonHideFromSearchCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ReasonHideFromSearchCodeType = new ReasonHideFromSearchCodeType();
?>