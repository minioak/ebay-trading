<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SecondChanceOfferDurationCodeType extends EbatNs_FacetType
{
	const CodeType_Days_1 = 'Days_1';
	const CodeType_Days_3 = 'Days_3';
	const CodeType_Days_5 = 'Days_5';
	const CodeType_Days_7 = 'Days_7';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SecondChanceOfferDurationCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SecondChanceOfferDurationCodeType = new SecondChanceOfferDurationCodeType();
?>