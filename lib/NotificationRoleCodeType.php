<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class NotificationRoleCodeType extends EbatNs_FacetType
{
	const CodeType_Application = 'Application';
	const CodeType_User = 'User';
	const CodeType_UserData = 'UserData';
	const CodeType_Event = 'Event';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('NotificationRoleCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_NotificationRoleCodeType = new NotificationRoleCodeType();
?>