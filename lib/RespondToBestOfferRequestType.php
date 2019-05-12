<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';
require_once 'BestOfferIDType.php';
require_once 'BestOfferActionCodeType.php';
require_once 'AmountType.php';

/**
  * This call enables the seller to accept or decline a buyer's Best Offer on an item, or make a counter offer to the buyer's Best Offer. A seller can decline multiple Best Offers with one call, but the seller cannot accept or counter offer multiple Best Offers with one call. Best Offers are not applicable to auction listings.
  * 
 **/

class RespondToBestOfferRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var BestOfferIDType
	**/
	protected $BestOfferID;

	/**
	* @var BestOfferActionCodeType
	**/
	protected $Action;

	/**
	* @var string
	**/
	protected $SellerResponse;

	/**
	* @var AmountType
	**/
	protected $CounterOfferPrice;

	/**
	* @var int
	**/
	protected $CounterOfferQuantity;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RespondToBestOfferRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
				'BestOfferID' =>
				array(
					'required' => false,
					'type' => 'BestOfferIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'Action' =>
				array(
					'required' => false,
					'type' => 'BestOfferActionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerResponse' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CounterOfferPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CounterOfferQuantity' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return BestOfferIDType
	 * @param integer $index 
	 **/
	function getBestOfferID($index = null)
	{
		if ($index !== null)
		{
			return $this->BestOfferID[$index];
		}
		else
		{
			return $this->BestOfferID;
		}
	}

	/**
	 * @return void
	 * @param BestOfferIDType $value
	 * @param integer $index 
	 **/
	function setBestOfferID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->BestOfferID[$index] = $value;
		}
		else
		{
			$this->BestOfferID= $value;
		}
	}

	/**
	 * @return void
	 * @param BestOfferIDType $value
	 **/
	function addBestOfferID($value)
	{
		$this->BestOfferID[] = $value;
	}

	/**
	 * @return BestOfferActionCodeType
	 **/
	function getAction()
	{
		return $this->Action;
	}

	/**
	 * @return void
	 **/
	function setAction($value)
	{
		$this->Action = $value;
	}

	/**
	 * @return string
	 **/
	function getSellerResponse()
	{
		return $this->SellerResponse;
	}

	/**
	 * @return void
	 **/
	function setSellerResponse($value)
	{
		$this->SellerResponse = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getCounterOfferPrice()
	{
		return $this->CounterOfferPrice;
	}

	/**
	 * @return void
	 **/
	function setCounterOfferPrice($value)
	{
		$this->CounterOfferPrice = $value;
	}

	/**
	 * @return int
	 **/
	function getCounterOfferQuantity()
	{
		return $this->CounterOfferQuantity;
	}

	/**
	 * @return void
	 **/
	function setCounterOfferQuantity($value)
	{
		$this->CounterOfferQuantity = $value;
	}

}
?>
