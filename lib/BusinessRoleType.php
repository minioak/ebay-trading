<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class BusinessRoleType extends EbatNs_FacetType
{
	const CodeType_Shopper = 'Shopper';
	const CodeType_FullMarketPlaceParticipant = 'FullMarketPlaceParticipant';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('BusinessRoleType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_BusinessRoleType = new BusinessRoleType();
?>