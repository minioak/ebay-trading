<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SellerPIStatusCodeType extends EbatNs_FacetType
{
	const CodeType_AcceptedUA = 'AcceptedUA';
	const CodeType_MustAcceptUA = 'MustAcceptUA';
	const CodeType_PIEnabled = 'PIEnabled';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SellerPIStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SellerPIStatusCodeType = new SellerPIStatusCodeType();
?>