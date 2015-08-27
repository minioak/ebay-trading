<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class StoreCustomListingHeaderDisplayCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_Full = 'Full';
	const CodeType_FullAndLeftNavigationBar = 'FullAndLeftNavigationBar';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('StoreCustomListingHeaderDisplayCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_StoreCustomListingHeaderDisplayCodeType = new StoreCustomListingHeaderDisplayCodeType();
?>