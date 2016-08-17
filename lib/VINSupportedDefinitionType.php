<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * If present, the site defines category settings for when the seller 
  * can provide a Vehicle Identification Number (VIN) for 
  * US, CA, and CAFR eBay Motors sites. VIN is required for cars and trucks 
  * from model year 1981 and later. (The US developed national standards for VIN 
  * values as of 1981.)
  * 
 **/

class VINSupportedDefinitionType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('VINSupportedDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

}
?>
