<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CharacteristicsSetType.php';
require_once 'AmountType.php';

/**
  * This type is deprecated as <b>GetProduct*</b> calls were deprecated.
  * 
  * 
 **/

class ProductType extends EbatNs_ComplexType
{
	/**
	* @var CharacteristicsSetType
	**/
	protected $CharacteristicsSet;

	/**
	* @var anyURI
	**/
	protected $DetailsURL;

	/**
	* @var int
	**/
	protected $NumItems;

	/**
	* @var AmountType
	**/
	protected $MinPrice;

	/**
	* @var AmountType
	**/
	protected $MaxPrice;

	/**
	* @var string
	**/
	protected $ProductReferenceID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProductType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CharacteristicsSet' =>
				array(
					'required' => false,
					'type' => 'CharacteristicsSetType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DetailsURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NumItems' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MinPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductReferenceID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
			'productID' =>
			array(
				'name' => ' productID',
				'type' => 'string',
				'use' => 'optional'
			),
			'stockPhotoURL' =>
			array(
				'name' => ' stockPhotoURL',
				'type' => 'anyURI',
				'use' => 'optional'
			),
			'title' =>
			array(
				'name' => ' title',
				'type' => 'string',
				'use' => 'optional'
			)));
	}

	/**
	 * @return CharacteristicsSetType
	 **/
	function getCharacteristicsSet()
	{
		return $this->CharacteristicsSet;
	}

	/**
	 * @return void
	 **/
	function setCharacteristicsSet($value)
	{
		$this->CharacteristicsSet = $value;
	}

	/**
	 * @return anyURI
	 **/
	function getDetailsURL()
	{
		return $this->DetailsURL;
	}

	/**
	 * @return void
	 **/
	function setDetailsURL($value)
	{
		$this->DetailsURL = $value;
	}

	/**
	 * @return int
	 **/
	function getNumItems()
	{
		return $this->NumItems;
	}

	/**
	 * @return void
	 **/
	function setNumItems($value)
	{
		$this->NumItems = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getMinPrice()
	{
		return $this->MinPrice;
	}

	/**
	 * @return void
	 **/
	function setMinPrice($value)
	{
		$this->MinPrice = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getMaxPrice()
	{
		return $this->MaxPrice;
	}

	/**
	 * @return void
	 **/
	function setMaxPrice($value)
	{
		$this->MaxPrice = $value;
	}

	/**
	 * @return string
	 **/
	function getProductReferenceID()
	{
		return $this->ProductReferenceID;
	}

	/**
	 * @return void
	 **/
	function setProductReferenceID($value)
	{
		$this->ProductReferenceID = $value;
	}




}
?>
