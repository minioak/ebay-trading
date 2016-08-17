<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DeviceTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Platform = 'Platform';
	const CodeType_SMS = 'SMS';
	const CodeType_ClientAlerts = 'ClientAlerts';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DeviceTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DeviceTypeCodeType = new DeviceTypeCodeType();
?>