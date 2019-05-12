<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SKUType.php';

/**
  * A list of stock-keeping unit (SKU) identifiers that a seller uses in listings.
  * 
 **/

class SKUArrayType extends EbatNs_ComplexType
{
	/**
	* @var SKUType
	**/
	protected $SKU;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SKUArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SKU' =>
				array(
					'required' => false,
					'type' => 'SKUType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return SKUType
	 * @param integer $index 
	 **/
	function getSKU($index = null)
	{
		if ($index !== null)
		{
			return $this->SKU[$index];
		}
		else
		{
			return $this->SKU;
		}
	}

	/**
	 * @return void
	 * @param SKUType $value
	 * @param integer $index 
	 **/
	function setSKU($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SKU[$index] = $value;
		}
		else
		{
			$this->SKU= $value;
		}
	}

	/**
	 * @return void
	 * @param SKUType $value
	 **/
	function addSKU($value)
	{
		$this->SKU[] = $value;
	}

}
?>
