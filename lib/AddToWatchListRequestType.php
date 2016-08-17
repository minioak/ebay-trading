<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';
require_once 'VariationKeyType.php';

/**
  * Adds one or more order line items to the eBay user's Watch List. An auction item or a single-variation, fixed-price listing is identified with an <b>ItemID</b> value. To add a specific item variation to the Watch List from within a multi-variation, fixed-price listing, the user will use the  <b>VariationKey</b> container instead.
  * 
 **/

class AddToWatchListRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var VariationKeyType
	**/
	protected $VariationKey;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddToWatchListRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'VariationKey' =>
				array(
					'required' => false,
					'type' => 'VariationKeyType',
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
	 * @return ItemIDType
	 * @param integer $index 
	 **/
	function getItemID($index = null)
	{
		if ($index !== null)
		{
			return $this->ItemID[$index];
		}
		else
		{
			return $this->ItemID;
		}
	}

	/**
	 * @return void
	 * @param ItemIDType $value
	 * @param integer $index 
	 **/
	function setItemID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ItemID[$index] = $value;
		}
		else
		{
			$this->ItemID= $value;
		}
	}

	/**
	 * @return void
	 * @param ItemIDType $value
	 **/
	function addItemID($value)
	{
		$this->ItemID[] = $value;
	}

	/**
	 * @return VariationKeyType
	 * @param integer $index 
	 **/
	function getVariationKey($index = null)
	{
		if ($index !== null)
		{
			return $this->VariationKey[$index];
		}
		else
		{
			return $this->VariationKey;
		}
	}

	/**
	 * @return void
	 * @param VariationKeyType $value
	 * @param integer $index 
	 **/
	function setVariationKey($value, $index = null)
	{
		if ($index !== null)
		{
			$this->VariationKey[$index] = $value;
		}
		else
		{
			$this->VariationKey= $value;
		}
	}

	/**
	 * @return void
	 * @param VariationKeyType $value
	 **/
	function addVariationKey($value)
	{
		$this->VariationKey[] = $value;
	}

}
?>
