<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class PromotionItemSelectionCodeType extends EbatNs_FacetType
{
	const CodeType_Manual = 'Manual';
	const CodeType_Automatic = 'Automatic';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('PromotionItemSelectionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_PromotionItemSelectionCodeType = new PromotionItemSelectionCodeType();
?>