<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

/**
  * Type defining the <b>BiddingDetails</b> container, which consists of
  * information about the buyer's bidding history on a single auction item.
  * 
 **/

class BiddingDetailsType extends EbatNs_ComplexType
{
	/**
	* @var AmountType
	**/
	protected $ConvertedMaxBid;

	/**
	* @var AmountType
	**/
	protected $MaxBid;

	/**
	* @var int
	**/
	protected $QuantityBid;

	/**
	* @var int
	**/
	protected $QuantityWon;

	/**
	* @var boolean
	**/
	protected $Winning;

	/**
	* @var boolean
	**/
	protected $BidAssistant;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BiddingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ConvertedMaxBid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxBid' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantityBid' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuantityWon' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Winning' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BidAssistant' =>
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
	 * @return AmountType
	 **/
	function getConvertedMaxBid()
	{
		return $this->ConvertedMaxBid;
	}

	/**
	 * @return void
	 **/
	function setConvertedMaxBid($value)
	{
		$this->ConvertedMaxBid = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getMaxBid()
	{
		return $this->MaxBid;
	}

	/**
	 * @return void
	 **/
	function setMaxBid($value)
	{
		$this->MaxBid = $value;
	}

	/**
	 * @return int
	 **/
	function getQuantityBid()
	{
		return $this->QuantityBid;
	}

	/**
	 * @return void
	 **/
	function setQuantityBid($value)
	{
		$this->QuantityBid = $value;
	}

	/**
	 * @return int
	 **/
	function getQuantityWon()
	{
		return $this->QuantityWon;
	}

	/**
	 * @return void
	 **/
	function setQuantityWon($value)
	{
		$this->QuantityWon = $value;
	}

	/**
	 * @return boolean
	 **/
	function getWinning()
	{
		return $this->Winning;
	}

	/**
	 * @return void
	 **/
	function setWinning($value)
	{
		$this->Winning = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBidAssistant()
	{
		return $this->BidAssistant;
	}

	/**
	 * @return void
	 **/
	function setBidAssistant($value)
	{
		$this->BidAssistant = $value;
	}

}
?>
