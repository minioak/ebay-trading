<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class QuantityAvailableHintCodeType extends EbatNs_FacetType
{
	const CodeType_Limited = 'Limited';
	const CodeType_MoreThan = 'MoreThan';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('QuantityAvailableHintCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_QuantityAvailableHintCodeType = new QuantityAvailableHintCodeType();
?>