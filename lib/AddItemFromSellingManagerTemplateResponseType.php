<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'ItemIDType.php';
require_once 'FeesType.php';

/**
  * Returns values indicating information for a new listing.
  * 
 **/

class AddItemFromSellingManagerTemplateResponseType extends AbstractResponseType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var dateTime
	**/
	protected $StartTime;

	/**
	* @var dateTime
	**/
	protected $EndTime;

	/**
	* @var FeesType
	**/
	protected $Fees;

	/**
	* @var string
	**/
	protected $CategoryID;

	/**
	* @var string
	**/
	protected $Category2ID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddItemFromSellingManagerTemplateResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StartTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Fees' =>
				array(
					'required' => false,
					'type' => 'FeesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Category2ID' =>
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
));
	}

	/**
	 * @return ItemIDType
	 **/
	function getItemID()
	{
		return $this->ItemID;
	}

	/**
	 * @return void
	 **/
	function setItemID($value)
	{
		$this->ItemID = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getStartTime()
	{
		return $this->StartTime;
	}

	/**
	 * @return void
	 **/
	function setStartTime($value)
	{
		$this->StartTime = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getEndTime()
	{
		return $this->EndTime;
	}

	/**
	 * @return void
	 **/
	function setEndTime($value)
	{
		$this->EndTime = $value;
	}

	/**
	 * @return FeesType
	 **/
	function getFees()
	{
		return $this->Fees;
	}

	/**
	 * @return void
	 **/
	function setFees($value)
	{
		$this->Fees = $value;
	}

	/**
	 * @return string
	 **/
	function getCategoryID()
	{
		return $this->CategoryID;
	}

	/**
	 * @return void
	 **/
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}

	/**
	 * @return string
	 **/
	function getCategory2ID()
	{
		return $this->Category2ID;
	}

	/**
	 * @return void
	 **/
	function setCategory2ID($value)
	{
		$this->Category2ID = $value;
	}

}
?>
