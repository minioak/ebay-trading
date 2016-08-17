<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DaysCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_EveryDay = 'EveryDay';
	const CodeType_Weekdays = 'Weekdays';
	const CodeType_Weekends = 'Weekends';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DaysCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DaysCodeType = new DaysCodeType();
?>