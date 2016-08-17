<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SellingManagerEmailSentStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Successful = 'Successful';
	const CodeType_Failed = 'Failed';
	const CodeType_Pending = 'Pending';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerEmailSentStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellingManagerEmailSentStatusCodeType = new SellingManagerEmailSentStatusCodeType();
?>