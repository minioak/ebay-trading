<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'LineItemType.php';

/**
  *          This type provides information about one or more order line items in a Global Shipping Program package.
  * 
 **/

class ShipmentLineItemType extends EbatNs_ComplexType
{
	/**
	* @var LineItemType
	**/
	protected $LineItem;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ShipmentLineItemType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'LineItem' =>
				array(
					'required' => true,
					'type' => 'LineItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '1..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return LineItemType
	 * @param integer $index 
	 **/
	function getLineItem($index = null)
	{
		if ($index !== null)
		{
			return $this->LineItem[$index];
		}
		else
		{
			return $this->LineItem;
		}
	}

	/**
	 * @return void
	 * @param LineItemType $value
	 * @param integer $index 
	 **/
	function setLineItem($value, $index = null)
	{
		if ($index !== null)
		{
			$this->LineItem[$index] = $value;
		}
		else
		{
			$this->LineItem= $value;
		}
	}

	/**
	 * @return void
	 * @param LineItemType $value
	 **/
	function addLineItem($value)
	{
		$this->LineItem[] = $value;
	}

}
?>
