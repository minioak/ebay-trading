<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class MyMessagesAlertResolutionStatusCode extends EbatNs_FacetType
{
	const CodeType_Unresolved = 'Unresolved';
	const CodeType_ResolvedByAutoResolution = 'ResolvedByAutoResolution';
	const CodeType_ResolvedByUser = 'ResolvedByUser';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MyMessagesAlertResolutionStatusCode', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_MyMessagesAlertResolutionStatusCode = new MyMessagesAlertResolutionStatusCode();
?>