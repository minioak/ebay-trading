<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ItemIDType.php';
require_once 'FeesType.php';
require_once 'ErrorType.php';
require_once 'DiscountReasonCodeType.php';
require_once 'ListingRecommendationsType.php';

/**
  * Type defining the <b>AddItemResponseContainer</b> containers that are returned in an <b>AddItems</b> call. An <b>AddItemResponseContainer</b> container is returned for each item created through an <b>AddItems</b> call. Each item being created through an <b>AddItems</b> call is identified through a unique <b>AddItemRequestContainer.MessageID</b> value that is defined by the seller. To match up the <b>AddItemResponseContainer</b> to the <b>AddItemRequestContainer</b>, look for a <b>AddItemResponseContainer.CorrelationID</b> value that matches the <b>AddItemRequestContainer.MessageID</b> value in the request.
  * 
 **/

class AddItemResponseContainerType extends EbatNs_ComplexType
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
	* @var string
	**/
	protected $CorrelationID;

	/**
	* @var ErrorType
	**/
	protected $Errors;

	/**
	* @var string
	**/
	protected $Message;

	/**
	* @var DiscountReasonCodeType
	**/
	protected $DiscountReason;

	/**
	* @var ListingRecommendationsType
	**/
	protected $ListingRecommendations;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddItemResponseContainerType', 'urn:ebay:apis:eBLBaseComponents');
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
				),
				'CorrelationID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Errors' =>
				array(
					'required' => false,
					'type' => 'ErrorType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'Message' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DiscountReason' =>
				array(
					'required' => false,
					'type' => 'DiscountReasonCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ListingRecommendations' =>
				array(
					'required' => false,
					'type' => 'ListingRecommendationsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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

	/**
	 * @return string
	 **/
	function getCorrelationID()
	{
		return $this->CorrelationID;
	}

	/**
	 * @return void
	 **/
	function setCorrelationID($value)
	{
		$this->CorrelationID = $value;
	}

	/**
	 * @return ErrorType
	 * @param integer $index 
	 **/
	function getErrors($index = null)
	{
		if ($index !== null)
		{
			return $this->Errors[$index];
		}
		else
		{
			return $this->Errors;
		}
	}

	/**
	 * @return void
	 * @param ErrorType $value
	 * @param integer $index 
	 **/
	function setErrors($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Errors[$index] = $value;
		}
		else
		{
			$this->Errors= $value;
		}
	}

	/**
	 * @return void
	 * @param ErrorType $value
	 **/
	function addErrors($value)
	{
		$this->Errors[] = $value;
	}

	/**
	 * @return string
	 **/
	function getMessage()
	{
		return $this->Message;
	}

	/**
	 * @return void
	 **/
	function setMessage($value)
	{
		$this->Message = $value;
	}

	/**
	 * @return DiscountReasonCodeType
	 * @param integer $index 
	 **/
	function getDiscountReason($index = null)
	{
		if ($index !== null)
		{
			return $this->DiscountReason[$index];
		}
		else
		{
			return $this->DiscountReason;
		}
	}

	/**
	 * @return void
	 * @param DiscountReasonCodeType $value
	 * @param integer $index 
	 **/
	function setDiscountReason($value, $index = null)
	{
		if ($index !== null)
		{
			$this->DiscountReason[$index] = $value;
		}
		else
		{
			$this->DiscountReason= $value;
		}
	}

	/**
	 * @return void
	 * @param DiscountReasonCodeType $value
	 **/
	function addDiscountReason($value)
	{
		$this->DiscountReason[] = $value;
	}

	/**
	 * @return ListingRecommendationsType
	 **/
	function getListingRecommendations()
	{
		return $this->ListingRecommendations;
	}

	/**
	 * @return void
	 **/
	function setListingRecommendations($value)
	{
		$this->ListingRecommendations = $value;
	}

}
?>
