<?php
/* Generated on 10.08.16 17:04 by globalsync
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