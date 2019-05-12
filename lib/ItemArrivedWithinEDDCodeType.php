<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ItemArrivedWithinEDDCodeType extends EbatNs_FacetType
{
	const CodeType_EddQuestionWasNotAsked = 'EddQuestionWasNotAsked';
	const CodeType_BuyerDidntProvideAnswer = 'BuyerDidntProvideAnswer';
	const CodeType_BuyerIndicatedItemArrivedWithinEDDRange = 'BuyerIndicatedItemArrivedWithinEDDRange';
	const CodeType_BuyerIndicatedItemNotArrivedWithinEDDRange = 'BuyerIndicatedItemNotArrivedWithinEDDRange';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ItemArrivedWithinEDDCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ItemArrivedWithinEDDCodeType = new ItemArrivedWithinEDDCodeType();
?>