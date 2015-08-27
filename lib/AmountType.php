<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CurrencyCodeType.php';

/**
  * An eBay-defined complex type for specifying monetary amounts.
  * <br><br>
  * A double value (e.g., 1.00 or 1.0) is meaningful as a monetary amount when accompanied by a specification of the currency, in which case the value specifies the amount in that currency. An <b>AmountType</b> expresses both the value (a double) and the currency.
  * <br><br>
  * The <b>AmountType</b> data type is typically used to specify details such as prices, fees, costs, and payments. In some cases, a whole number (i.e., without a period) can be passed or returned as a monetary value. This is necessary to support certain currencies that are only expressed as whole numbers.
  * <br><br>
  * Because a double is used to represent the amount, this also means whole monetary amounts may be returned with only one 0 after the decimal. For example, a dollar value could be returned as 1.0 instead of 1.00 in calls like <b>AddItem</b>. 
  * 
  * Three-digit code representing the currency type being used. <br>
  * <br>
  * In Add/Revise/Relist calls, the currency can be specified in
  * the <b>Item.Currency</b> field in requests instead.
  * If you do specify this attribute in Add/Revise/Relist calls,
  * the value must match the site currency (i.e., it must be the same
  * as the value in <b>Item.Currency</b>) unless otherwise stated.<br>
  * <br>
  * In Add/Revise/Relist calls, listing fees are returned in the
  * currency of the user's registration site.
  * For example, a user who is registered on the eBay US site always
  * sees their fees returned in USD, even when their listing request
  * is sent to another site, such as eBay UK or eBay Germany.
  * 
 **/

class AmountType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AmountType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
			'currencyID' =>
			array(
				'name' => ' currencyID',
				'type' => 'CurrencyCodeType',
				'use' => 'required'
			)));
	}



}
?>
