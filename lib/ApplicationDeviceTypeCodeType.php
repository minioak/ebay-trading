<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ApplicationDeviceTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Browser = 'Browser';
	const CodeType_Wireless = 'Wireless';
	const CodeType_Desktop = 'Desktop';
	const CodeType_SetTopTVBox = 'SetTopTVBox';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ApplicationDeviceTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ApplicationDeviceTypeCodeType = new ApplicationDeviceTypeCodeType();
?>