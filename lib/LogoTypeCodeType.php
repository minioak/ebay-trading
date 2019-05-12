<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class LogoTypeCodeType extends EbatNs_FacetType
{
	const CodeType_WinningBidderNotice = 'WinningBidderNotice';
	const CodeType_Store = 'Store';
	const CodeType_Custom = 'Custom';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('LogoTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_LogoTypeCodeType = new LogoTypeCodeType();
?>