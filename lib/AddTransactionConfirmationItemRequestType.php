<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'UserIDType.php';
require_once 'RecipientRelationCodeType.php';
require_once 'AmountType.php';
require_once 'SecondChanceOfferDurationCodeType.php';
require_once 'ItemIDType.php';

/**
  * Base request of the <b>AddTransactionConfirmationItem</b> call, which is used to end an eBay Motors listing and creates a new Transaction Confirmation Request (TCR) for the motor vehichle, thus enabling the TCR recipient to purchase the item. You can also use this call to see if a new TCR can be created for the specified item.
  * 
 **/

class AddTransactionConfirmationItemRequestType extends AbstractRequestType
{
	/**
	* @var UserIDType
	**/
	protected $RecipientUserID;

	/**
	* @var string
	**/
	protected $VerifyEligibilityOnly;

	/**
	* @var string
	**/
	protected $RecipientPostalCode;

	/**
	* @var RecipientRelationCodeType
	**/
	protected $RecipientRelationType;

	/**
	* @var AmountType
	**/
	protected $NegotiatedPrice;

	/**
	* @var SecondChanceOfferDurationCodeType
	**/
	protected $ListingDuration;

	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var string
	**/
	protected $Comments;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddTransactionConfirmationItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'RecipientUserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VerifyEligibilityOnly' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RecipientPostalCode' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RecipientRelationType' =>
				array(
					'required' => false,
					'type' => 'RecipientRelationCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NegotiatedPrice' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingDuration' =>
				array(
					'required' => false,
					'type' => 'SecondChanceOfferDurationCodeType',
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
				'Comments' =>
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
	 * @return UserIDType
	 **/
	function getRecipientUserID()
	{
		return $this->RecipientUserID;
	}

	/**
	 * @return void
	 **/
	function setRecipientUserID($value)
	{
		$this->RecipientUserID = $value;
	}

	/**
	 * @return string
	 **/
	function getVerifyEligibilityOnly()
	{
		return $this->VerifyEligibilityOnly;
	}

	/**
	 * @return void
	 **/
	function setVerifyEligibilityOnly($value)
	{
		$this->VerifyEligibilityOnly = $value;
	}

	/**
	 * @return string
	 **/
	function getRecipientPostalCode()
	{
		return $this->RecipientPostalCode;
	}

	/**
	 * @return void
	 **/
	function setRecipientPostalCode($value)
	{
		$this->RecipientPostalCode = $value;
	}

	/**
	 * @return RecipientRelationCodeType
	 **/
	function getRecipientRelationType()
	{
		return $this->RecipientRelationType;
	}

	/**
	 * @return void
	 **/
	function setRecipientRelationType($value)
	{
		$this->RecipientRelationType = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getNegotiatedPrice()
	{
		return $this->NegotiatedPrice;
	}

	/**
	 * @return void
	 **/
	function setNegotiatedPrice($value)
	{
		$this->NegotiatedPrice = $value;
	}

	/**
	 * @return SecondChanceOfferDurationCodeType
	 **/
	function getListingDuration()
	{
		return $this->ListingDuration;
	}

	/**
	 * @return void
	 **/
	function setListingDuration($value)
	{
		$this->ListingDuration = $value;
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
	function getComments()
	{
		return $this->Comments;
	}

	/**
	 * @return void
	 **/
	function setComments($value)
	{
		$this->Comments = $value;
	}

}
?>
