<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class MessageStatusTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Answered = 'Answered';
	const CodeType_Unanswered = 'Unanswered';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MessageStatusTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_MessageStatusTypeCodeType = new MessageStatusTypeCodeType();
?>