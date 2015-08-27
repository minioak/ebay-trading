<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class SocialAddressTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Facebook = 'Facebook';
	const CodeType_Twitter = 'Twitter';
	const CodeType_Linkedin = 'Linkedin';
	const CodeType_GooglePlus = 'GooglePlus';
	const CodeType_Myspace = 'Myspace';
	const CodeType_Orkut = 'Orkut';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SocialAddressTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SocialAddressTypeCodeType = new SocialAddressTypeCodeType();
?>