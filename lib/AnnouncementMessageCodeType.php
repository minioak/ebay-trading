<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class AnnouncementMessageCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_Deprecation = 'Deprecation';
	const CodeType_Mapping = 'Mapping';
	const CodeType_DeprecationAndMapping = 'DeprecationAndMapping';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AnnouncementMessageCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AnnouncementMessageCodeType = new AnnouncementMessageCodeType();
?>