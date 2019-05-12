<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class InvocationStatusType extends EbatNs_FacetType
{
	const CodeType_InProgress = 'InProgress';
	const CodeType_Success = 'Success';
	const CodeType_Failure = 'Failure';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('InvocationStatusType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_InvocationStatusType = new InvocationStatusType();
?>