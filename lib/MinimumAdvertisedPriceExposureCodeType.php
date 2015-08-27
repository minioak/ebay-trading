<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class MinimumAdvertisedPriceExposureCodeType extends EbatNs_FacetType
{
	const CodeType_PreCheckout = 'PreCheckout';
	const CodeType_DuringCheckout = 'DuringCheckout';
	const CodeType_None = 'None';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MinimumAdvertisedPriceExposureCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_MinimumAdvertisedPriceExposureCodeType = new MinimumAdvertisedPriceExposureCodeType();
?>