<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class MailOptionsTypeCodeType extends EbatNs_FacetType
{
	const CodeType_DoNotSendEmail = 'DoNotSendEmail';
	const CodeType_EmailCopyToSender = 'EmailCopyToSender';
	const CodeType_HideSenderEmailAddress = 'HideSenderEmailAddress';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MailOptionsTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_MailOptionsTypeCodeType = new MailOptionsTypeCodeType();
?>