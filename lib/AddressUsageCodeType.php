<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class AddressUsageCodeType extends EbatNs_FacetType
{
	const CodeType_DefaultShipping = 'DefaultShipping';
	const CodeType_Shipping = 'Shipping';
	const CodeType_Invalid = 'Invalid';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AddressUsageCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AddressUsageCodeType = new AddressUsageCodeType();
?>