<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * The format of a ValueType. The ValueFormatCodeType places additional constraints 
 * on the format a value takeson which are enforceable for validation purposes 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ValueFormatCodeType.html
 *
 * @property string FullDate
 * @property string PartialDate
 * @property string Year
 * @property string CustomCode
 */
class ValueFormatCodeType extends EbatNs_FacetType
{
	const CodeType_FullDate = 'FullDate';
	const CodeType_PartialDate = 'PartialDate';
	const CodeType_Year = 'Year';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ValueFormatCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_ValueFormatCodeType = new ValueFormatCodeType();

?>