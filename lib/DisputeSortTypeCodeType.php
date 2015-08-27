<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DisputeSortTypeCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_DisputeCreatedTimeAscending = 'DisputeCreatedTimeAscending';
	const CodeType_DisputeCreatedTimeDescending = 'DisputeCreatedTimeDescending';
	const CodeType_DisputeStatusAscending = 'DisputeStatusAscending';
	const CodeType_DisputeStatusDescending = 'DisputeStatusDescending';
	const CodeType_DisputeCreditEligibilityAscending = 'DisputeCreditEligibilityAscending';
	const CodeType_DisputeCreditEligibilityDescending = 'DisputeCreditEligibilityDescending';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DisputeSortTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DisputeSortTypeCodeType = new DisputeSortTypeCodeType();
?>