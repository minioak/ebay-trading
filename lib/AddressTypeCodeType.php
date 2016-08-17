<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class AddressTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Contact = 'Contact';
	const CodeType_Registered = 'Registered';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AddressTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AddressTypeCodeType = new AddressTypeCodeType();
?>