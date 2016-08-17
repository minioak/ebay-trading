<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class AddressStatusCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_Confirmed = 'Confirmed';
	const CodeType_Unconfirmed = 'Unconfirmed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AddressStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AddressStatusCodeType = new AddressStatusCodeType();
?>