<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ProfileCategoryGroupCodeType extends EbatNs_FacetType
{
	const CodeType_Inherit = 'Inherit';
	const CodeType_None = 'None';
	const CodeType_ALL = 'ALL';
	const CodeType_MOTORS_VEHICLE = 'MOTORS_VEHICLE';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ProfileCategoryGroupCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ProfileCategoryGroupCodeType = new ProfileCategoryGroupCodeType();
?>