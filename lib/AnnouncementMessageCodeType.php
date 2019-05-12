<?php
/* Generated on 10.08.16 17:04 by globalsync
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