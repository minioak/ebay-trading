<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SellerDashboardAlertSeverityCodeType extends EbatNs_FacetType
{
	const CodeType_Informational = 'Informational';
	const CodeType_Warning = 'Warning';
	const CodeType_StrongWarning = 'StrongWarning';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellerDashboardAlertSeverityCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellerDashboardAlertSeverityCodeType = new SellerDashboardAlertSeverityCodeType();
?>