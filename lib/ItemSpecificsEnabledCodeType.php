<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ItemSpecificsEnabledCodeType extends EbatNs_FacetType
{
	const CodeType_Disabled = 'Disabled';
	const CodeType_Enabled = 'Enabled';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ItemSpecificsEnabledCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ItemSpecificsEnabledCodeType = new ItemSpecificsEnabledCodeType();
?>