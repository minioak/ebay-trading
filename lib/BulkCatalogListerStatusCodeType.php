<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class BulkCatalogListerStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Preapproved = 'Preapproved';
	const CodeType_Active = 'Active';
	const CodeType_OnWatch = 'OnWatch';
	const CodeType_OnHold = 'OnHold';
	const CodeType_Suspended = 'Suspended';
	const CodeType_WatchWarn = 'WatchWarn';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BulkCatalogListerStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BulkCatalogListerStatusCodeType = new BulkCatalogListerStatusCodeType();
?>