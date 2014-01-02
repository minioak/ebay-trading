<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * MyMessagesFolderOperationCodeType - Indicates the type ofoperation to perform on 
 * a specified My Messsages folder.Operations cannot be performed on the Inbox or 
 * Sent folders. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MyMessagesFolderOperationCodeType.html
 *
 * @property string Display
 * @property string Rename
 * @property string Remove
 * @property string CustomCode
 */
class MyMessagesFolderOperationCodeType extends EbatNs_FacetType
{
	const CodeType_Display = 'Display';
	const CodeType_Rename = 'Rename';
	const CodeType_Remove = 'Remove';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MyMessagesFolderOperationCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_MyMessagesFolderOperationCodeType = new MyMessagesFolderOperationCodeType();

?>
