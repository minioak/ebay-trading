<?php
/* Generated on 10.08.16 17:04 by globalsync
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