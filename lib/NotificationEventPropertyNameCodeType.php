<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class NotificationEventPropertyNameCodeType extends EbatNs_FacetType
{
	const CodeType_TimeLeft = 'TimeLeft';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('NotificationEventPropertyNameCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_NotificationEventPropertyNameCodeType = new NotificationEventPropertyNameCodeType();
?>