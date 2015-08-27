<?php
/* Generated on 8/11/15 3:23 AM by globalsync
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