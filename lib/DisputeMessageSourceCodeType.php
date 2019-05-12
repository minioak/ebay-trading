<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DisputeMessageSourceCodeType extends EbatNs_FacetType
{
	const CodeType_Buyer = 'Buyer';
	const CodeType_Seller = 'Seller';
	const CodeType_eBay = 'eBay';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DisputeMessageSourceCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DisputeMessageSourceCodeType = new DisputeMessageSourceCodeType();
?>