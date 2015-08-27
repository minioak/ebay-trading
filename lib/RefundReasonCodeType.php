<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class RefundReasonCodeType extends EbatNs_FacetType
{
	const CodeType_CannotShipProduct = 'CannotShipProduct';
	const CodeType_WrongItemShipped = 'WrongItemShipped';
	const CodeType_ItemBadQuality = 'ItemBadQuality';
	const CodeType_ItemDamaged = 'ItemDamaged';
	const CodeType_BuyerRemorse = 'BuyerRemorse';
	const CodeType_Other = 'Other';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('RefundReasonCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_RefundReasonCodeType = new RefundReasonCodeType();
?>