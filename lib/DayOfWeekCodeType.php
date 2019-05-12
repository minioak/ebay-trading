<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DayOfWeekCodeType extends EbatNs_FacetType
{
	const CodeType_Sunday = 'Sunday';
	const CodeType_Monday = 'Monday';
	const CodeType_Tuesday = 'Tuesday';
	const CodeType_Wednesday = 'Wednesday';
	const CodeType_Thursday = 'Thursday';
	const CodeType_Friday = 'Friday';
	const CodeType_Saturday = 'Saturday';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DayOfWeekCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DayOfWeekCodeType = new DayOfWeekCodeType();
?>