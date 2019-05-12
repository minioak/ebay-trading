<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class MeasurementSystemCodeType extends EbatNs_FacetType
{
	const CodeType_English = 'English';
	const CodeType_Metric = 'Metric';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MeasurementSystemCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_MeasurementSystemCodeType = new MeasurementSystemCodeType();
?>