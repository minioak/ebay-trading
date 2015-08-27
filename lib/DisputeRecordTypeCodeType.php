<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DisputeRecordTypeCodeType extends EbatNs_FacetType
{
	const CodeType_UnpaidItem = 'UnpaidItem';
	const CodeType_ItemNotReceived = 'ItemNotReceived';
	const CodeType_HalfDispute = 'HalfDispute';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DisputeRecordTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DisputeRecordTypeCodeType = new DisputeRecordTypeCodeType();
?>