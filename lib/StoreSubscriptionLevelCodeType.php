<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class StoreSubscriptionLevelCodeType extends EbatNs_FacetType
{
	const CodeType_Close = 'Close';
	const CodeType_Basic = 'Basic';
	const CodeType_Featured = 'Featured';
	const CodeType_Anchor = 'Anchor';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('StoreSubscriptionLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_StoreSubscriptionLevelCodeType = new StoreSubscriptionLevelCodeType();
?>