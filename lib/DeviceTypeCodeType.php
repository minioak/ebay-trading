<?php
/* Generated on 8/11/15 3:23 AM by globalsync
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