<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ItemIDType.php';
require_once 'PromotionItemSelectionCodeType.php';
require_once 'ListingTypeCodeType.php';
require_once 'PromotionDetailsType.php';

/**
  * This type is deprecated.
  * 
 **/

class PromotedItemType extends EbatNs_ComplexType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var string
	**/
	protected $PictureURL;

	/**
	* @var int
	**/
	protected $Position;

	/**
	* @var PromotionItemSelectionCodeType
	**/
	protected $SelectionType;

	/**
	* @var string
	**/
	protected $Title;

	/**
	* @var ListingTypeCodeType
	**/
	protected $ListingType;

	/**
	* @var PromotionDetailsType
	**/
	protected $PromotionDetails;

	/**
	* @var duration
	**/
	protected $TimeLeft;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PromotedItemType', 'urn:ebay:apis:eBLBaseComponents');
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
				'PictureURL' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Position' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SelectionType' =>
				array(
					'required' => false,
					'type' => 'PromotionItemSelectionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Title' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingType' =>
				array(
					'required' => false,
					'type' => 'ListingTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionDetails' =>
				array(
					'required' => false,
					'type' => 'PromotionDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'TimeLeft' =>
				array(
					'required' => false,
					'type' => 'duration',
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
	 * @return string
	 **/
	function getPictureURL()
	{
		return $this->PictureURL;
	}

	/**
	 * @return void
	 **/
	function setPictureURL($value)
	{
		$this->PictureURL = $value;
	}

	/**
	 * @return int
	 **/
	function getPosition()
	{
		return $this->Position;
	}

	/**
	 * @return void
	 **/
	function setPosition($value)
	{
		$this->Position = $value;
	}

	/**
	 * @return PromotionItemSelectionCodeType
	 **/
	function getSelectionType()
	{
		return $this->SelectionType;
	}

	/**
	 * @return void
	 **/
	function setSelectionType($value)
	{
		$this->SelectionType = $value;
	}

	/**
	 * @return string
	 **/
	function getTitle()
	{
		return $this->Title;
	}

	/**
	 * @return void
	 **/
	function setTitle($value)
	{
		$this->Title = $value;
	}

	/**
	 * @return ListingTypeCodeType
	 **/
	function getListingType()
	{
		return $this->ListingType;
	}

	/**
	 * @return void
	 **/
	function setListingType($value)
	{
		$this->ListingType = $value;
	}

	/**
	 * @return PromotionDetailsType
	 * @param integer $index 
	 **/
	function getPromotionDetails($index = null)
	{
		if ($index !== null)
		{
			return $this->PromotionDetails[$index];
		}
		else
		{
			return $this->PromotionDetails;
		}
	}

	/**
	 * @return void
	 * @param PromotionDetailsType $value
	 * @param integer $index 
	 **/
	function setPromotionDetails($value, $index = null)
	{
		if ($index !== null)
		{
			$this->PromotionDetails[$index] = $value;
		}
		else
		{
			$this->PromotionDetails= $value;
		}
	}

	/**
	 * @return void
	 * @param PromotionDetailsType $value
	 **/
	function addPromotionDetails($value)
	{
		$this->PromotionDetails[] = $value;
	}

	/**
	 * @return duration
	 **/
	function getTimeLeft()
	{
		return $this->TimeLeft;
	}

	/**
	 * @return void
	 **/
	function setTimeLeft($value)
	{
		$this->TimeLeft = $value;
	}

}
?>
