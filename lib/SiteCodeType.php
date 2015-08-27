<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SiteCodeType extends EbatNs_FacetType
{
	const CodeType_US = 'US';
	const CodeType_Canada = 'Canada';
	const CodeType_UK = 'UK';
	const CodeType_Australia = 'Australia';
	const CodeType_Austria = 'Austria';
	const CodeType_Belgium_French = 'Belgium_French';
	const CodeType_France = 'France';
	const CodeType_Germany = 'Germany';
	const CodeType_Italy = 'Italy';
	const CodeType_Belgium_Dutch = 'Belgium_Dutch';
	const CodeType_Netherlands = 'Netherlands';
	const CodeType_Spain = 'Spain';
	const CodeType_Switzerland = 'Switzerland';
	const CodeType_Taiwan = 'Taiwan';
	const CodeType_eBayMotors = 'eBayMotors';
	const CodeType_HongKong = 'HongKong';
	const CodeType_Singapore = 'Singapore';
	const CodeType_India = 'India';
	const CodeType_China = 'China';
	const CodeType_Ireland = 'Ireland';
	const CodeType_Malaysia = 'Malaysia';
	const CodeType_Philippines = 'Philippines';
	const CodeType_Poland = 'Poland';
	const CodeType_Sweden = 'Sweden';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_CanadaFrench = 'CanadaFrench';
	const CodeType_Russia = 'Russia';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SiteCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SiteCodeType = new SiteCodeType();
?>