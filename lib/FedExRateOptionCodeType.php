<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class FedExRateOptionCodeType extends EbatNs_FacetType
{
	const CodeType_FedExStandardList = 'FedExStandardList';
	const CodeType_FedExCounter = 'FedExCounter';
	const CodeType_FedExDiscounted = 'FedExDiscounted';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('FedExRateOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_FedExRateOptionCodeType = new FedExRateOptionCodeType();
?>