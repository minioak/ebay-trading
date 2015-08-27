<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class WarningLevelCodeType extends EbatNs_FacetType
{
	const CodeType_Low = 'Low';
	const CodeType_High = 'High';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('WarningLevelCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_WarningLevelCodeType = new WarningLevelCodeType();
?>