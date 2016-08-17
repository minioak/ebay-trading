<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class USPSRateOptionCodeType extends EbatNs_FacetType
{
	const CodeType_USPSDiscounted = 'USPSDiscounted';
	const CodeType_USPSRetail = 'USPSRetail';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('USPSRateOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_USPSRateOptionCodeType = new USPSRateOptionCodeType();
?>