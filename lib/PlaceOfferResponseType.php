<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'SellingStatusType.php';
require_once 'BestOfferType.php';

/**
  * The <b>PlaceOffer</b> response notifies you about the success and result
  * of the call.
  * 
 **/

class PlaceOfferResponseType extends AbstractResponseType
{
	/**
	* @var SellingStatusType
	**/
	protected $SellingStatus;

	/**
	* @var string
	**/
	protected $TransactionID;

	/**
	* @var BestOfferType
	**/
	protected $BestOffer;

	/**
	* @var string
	**/
	protected $OrderLineItemID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PlaceOfferResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SellingStatus' =>
				array(
					'required' => false,
					'type' => 'SellingStatusType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOffer' =>
				array(
					'required' => false,
					'type' => 'BestOfferType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OrderLineItemID' =>
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
	 * @return SellingStatusType
	 **/
	function getSellingStatus()
	{
		return $this->SellingStatus;
	}

	/**
	 * @return void
	 **/
	function setSellingStatus($value)
	{
		$this->SellingStatus = $value;
	}

	/**
	 * @return string
	 **/
	function getTransactionID()
	{
		return $this->TransactionID;
	}

	/**
	 * @return void
	 **/
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}

	/**
	 * @return BestOfferType
	 **/
	function getBestOffer()
	{
		return $this->BestOffer;
	}

	/**
	 * @return void
	 **/
	function setBestOffer($value)
	{
		$this->BestOffer = $value;
	}

	/**
	 * @return string
	 **/
	function getOrderLineItemID()
	{
		return $this->OrderLineItemID;
	}

	/**
	 * @return void
	 **/
	function setOrderLineItemID($value)
	{
		$this->OrderLineItemID = $value;
	}

}
?>
