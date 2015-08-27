<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class CompleteStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Incomplete = 'Incomplete';
	const CodeType_Complete = 'Complete';
	const CodeType_Pending = 'Pending';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CompleteStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CompleteStatusCodeType = new CompleteStatusCodeType();
?>