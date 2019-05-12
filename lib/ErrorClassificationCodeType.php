<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ErrorClassificationCodeType extends EbatNs_FacetType
{
	const CodeType_RequestError = 'RequestError';
	const CodeType_SystemError = 'SystemError';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ErrorClassificationCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ErrorClassificationCodeType = new ErrorClassificationCodeType();
?>