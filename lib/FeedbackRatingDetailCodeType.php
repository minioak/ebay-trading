<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class FeedbackRatingDetailCodeType extends EbatNs_FacetType
{
	const CodeType_ItemAsDescribed = 'ItemAsDescribed';
	const CodeType_Communication = 'Communication';
	const CodeType_ShippingTime = 'ShippingTime';
	const CodeType_ShippingAndHandlingCharges = 'ShippingAndHandlingCharges';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('FeedbackRatingDetailCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_FeedbackRatingDetailCodeType = new FeedbackRatingDetailCodeType();
?>