<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'DisputeExplanationCodeType.php';
require_once 'DisputeReasonCodeType.php';
require_once 'ItemIDType.php';

/**
  * Enables a seller to create an Unpaid Item case against a buyer, or to cancel a
  * single line item order. 
  * <br/><br/>
  * <span class="tablenote"><b>Note:</b>
  * This call is only used by sellers to create an Unpaid Item case or to mutually cancel a
  * single line item order. Buyers must use the eBay Resolution Center or PayPal Resolution 
  * Center (for orders that satisfy requirements) to create an Item Not Received or an Item
  * Significantly Not as Described case. 
  * </span>
  * 
 **/

class AddDisputeRequestType extends AbstractRequestType
{
	/**
	* @var DisputeExplanationCodeType
	**/
	protected $DisputeExplanation;

	/**
	* @var DisputeReasonCodeType
	**/
	protected $DisputeReason;

	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var string
	**/
	protected $TransactionID;

	/**
	* @var string
	**/
	protected $OrderLineItemID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddDisputeRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DisputeExplanation' =>
				array(
					'required' => false,
					'type' => 'DisputeExplanationCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisputeReason' =>
				array(
					'required' => false,
					'type' => 'DisputeReasonCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
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
	 * @return DisputeExplanationCodeType
	 **/
	function getDisputeExplanation()
	{
		return $this->DisputeExplanation;
	}

	/**
	 * @return void
	 **/
	function setDisputeExplanation($value)
	{
		$this->DisputeExplanation = $value;
	}

	/**
	 * @return DisputeReasonCodeType
	 **/
	function getDisputeReason()
	{
		return $this->DisputeReason;
	}

	/**
	 * @return void
	 **/
	function setDisputeReason($value)
	{
		$this->DisputeReason = $value;
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
