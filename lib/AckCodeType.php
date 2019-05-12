<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class AckCodeType extends EbatNs_FacetType
{
	const CodeType_Success = 'Success';
	const CodeType_Failure = 'Failure';
	const CodeType_Warning = 'Warning';
	const CodeType_PartialFailure = 'PartialFailure';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('AckCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_AckCodeType = new AckCodeType();
?>