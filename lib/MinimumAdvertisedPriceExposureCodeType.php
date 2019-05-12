<?php
/* Generated on 10.08.16 17:04 by globalsync
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