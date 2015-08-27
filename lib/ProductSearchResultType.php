<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ResponseAttributeSetType.php';

/**
  * This type is deprecated as <b>GetProduct*</b> calls were deprecated.
  * 
  * 
 **/

class ProductSearchResultType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $ID;

	/**
	* @var string
	**/
	protected $NumProducts;

	/**
	* @var ResponseAttributeSetType
	**/
	protected $AttributeSet;

	/**
	* @var boolean
	**/
	protected $DisplayStockPhotos;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProductSearchResultType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NumProducts' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AttributeSet' =>
				array(
					'required' => false,
					'type' => 'ResponseAttributeSetType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'DisplayStockPhotos' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return string
	 **/
	function getID()
	{
		return $this->ID;
	}

	/**
	 * @return void
	 **/
	function setID($value)
	{
		$this->ID = $value;
	}

	/**
	 * @return string
	 **/
	function getNumProducts()
	{
		return $this->NumProducts;
	}

	/**
	 * @return void
	 **/
	function setNumProducts($value)
	{
		$this->NumProducts = $value;
	}

	/**
	 * @return ResponseAttributeSetType
	 * @param integer $index 
	 **/
	function getAttributeSet($index = null)
	{
		if ($index !== null)
		{
			return $this->AttributeSet[$index];
		}
		else
		{
			return $this->AttributeSet;
		}
	}

	/**
	 * @return void
	 * @param ResponseAttributeSetType $value
	 * @param integer $index 
	 **/
	function setAttributeSet($value, $index = null)
	{
		if ($index !== null)
		{
			$this->AttributeSet[$index] = $value;
		}
		else
		{
			$this->AttributeSet= $value;
		}
	}

	/**
	 * @return void
	 * @param ResponseAttributeSetType $value
	 **/
	function addAttributeSet($value)
	{
		$this->AttributeSet[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDisplayStockPhotos()
	{
		return $this->DisplayStockPhotos;
	}

	/**
	 * @return void
	 **/
	function setDisplayStockPhotos($value)
	{
		$this->DisplayStockPhotos = $value;
	}

}
?>
