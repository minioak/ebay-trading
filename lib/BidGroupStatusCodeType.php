<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class BidGroupStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Open = 'Open';
	const CodeType_Closed = 'Closed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BidGroupStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BidGroupStatusCodeType = new BidGroupStatusCodeType();
?>