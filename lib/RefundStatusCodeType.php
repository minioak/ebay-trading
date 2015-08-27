<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class RefundStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Successful = 'Successful';
	const CodeType_Pending = 'Pending';
	const CodeType_Failed = 'Failed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('RefundStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_RefundStatusCodeType = new RefundStatusCodeType();
?>