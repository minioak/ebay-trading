<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';

/**
  * Indicates the success or failure of the attempt to leave feedback for the buyer,
  * change the paid status in My eBay, and/or change the shipped status in My eBay.
  * <br><br>
  * Applies to half.com.
  * <br><br>
  * When <b>CompleteSale</b> is applied to a specified order (by specifying <b>OrderID</b>), it
  * also applies to the child transactions associated with the order. An <b>OrderID</b> cannot be used with half.com items.
  * 
 **/

class CompleteSaleResponseType extends AbstractResponseType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CompleteSaleResponseType', 'urn:ebay:apis:eBLBaseComponents');
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
