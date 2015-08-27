<?php
/* Generated on 8/11/15 3:23 AM by globalsync
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