<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SellingManagerAutoRelistOptionCodeType extends EbatNs_FacetType
{
	const CodeType_RelistImmediately = 'RelistImmediately';
	const CodeType_RelistAfterDaysHours = 'RelistAfterDaysHours';
	const CodeType_RelistAtSpecificTimeOfDay = 'RelistAtSpecificTimeOfDay';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerAutoRelistOptionCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellingManagerAutoRelistOptionCodeType = new SellingManagerAutoRelistOptionCodeType();
?>