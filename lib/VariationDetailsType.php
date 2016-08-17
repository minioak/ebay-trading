<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>VariationDetails</b> container that is returned in 
  * <b>GeteBayDetails</b> if <b>VariationDetails</b> is included 
  * in the request as a <b>DetailName</b> filter, or if <b>GeteBayDetails</b> 
  * is called with no <b>DetailName</b> filters.
  * 
 **/

class VariationDetailsType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $MaxVariationsPerItem;

	/**
	* @var int
	**/
	protected $MaxNamesPerVariationSpecificsSet;

	/**
	* @var int
	**/
	protected $MaxValuesPerVariationSpecificsSetName;

	/**
	* @var string
	**/
	protected $DetailVersion;

	/**
	* @var dateTime
	**/
	protected $UpdateTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('VariationDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MaxVariationsPerItem' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxNamesPerVariationSpecificsSet' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxValuesPerVariationSpecificsSetName' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DetailVersion' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UpdateTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
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
	 * @return int
	 **/
	function getMaxVariationsPerItem()
	{
		return $this->MaxVariationsPerItem;
	}

	/**
	 * @return void
	 **/
	function setMaxVariationsPerItem($value)
	{
		$this->MaxVariationsPerItem = $value;
	}

	/**
	 * @return int
	 **/
	function getMaxNamesPerVariationSpecificsSet()
	{
		return $this->MaxNamesPerVariationSpecificsSet;
	}

	/**
	 * @return void
	 **/
	function setMaxNamesPerVariationSpecificsSet($value)
	{
		$this->MaxNamesPerVariationSpecificsSet = $value;
	}

	/**
	 * @return int
	 **/
	function getMaxValuesPerVariationSpecificsSetName()
	{
		return $this->MaxValuesPerVariationSpecificsSetName;
	}

	/**
	 * @return void
	 **/
	function setMaxValuesPerVariationSpecificsSetName($value)
	{
		$this->MaxValuesPerVariationSpecificsSetName = $value;
	}

	/**
	 * @return string
	 **/
	function getDetailVersion()
	{
		return $this->DetailVersion;
	}

	/**
	 * @return void
	 **/
	function setDetailVersion($value)
	{
		$this->DetailVersion = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getUpdateTime()
	{
		return $this->UpdateTime;
	}

	/**
	 * @return void
	 **/
	function setUpdateTime($value)
	{
		$this->UpdateTime = $value;
	}

}
?>
