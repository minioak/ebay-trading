<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'DisputeIDType.php';
require_once 'DisputeRecordTypeCodeType.php';
require_once 'DisputeStateCodeType.php';
require_once 'DisputeStatusCodeType.php';
require_once 'TradingRoleCodeType.php';
require_once 'UserIDType.php';
require_once 'ItemType.php';
require_once 'DisputeReasonCodeType.php';
require_once 'DisputeExplanationCodeType.php';
require_once 'DisputeCreditEligibilityCodeType.php';
require_once 'DisputeResolutionType.php';
require_once 'DisputeMessageType.php';

/**
  * Contains all information describing a dispute.
  * <br/><br/>
  * <span class="tablenote"><strong>Note:</strong>
  * These are not eBay money back guarantee disputes.
  * </span>
  * 
 **/

class DisputeType extends EbatNs_ComplexType
{
	/**
	* @var DisputeIDType
	**/
	protected $DisputeID;

	/**
	* @var DisputeRecordTypeCodeType
	**/
	protected $DisputeRecordType;

	/**
	* @var DisputeStateCodeType
	**/
	protected $DisputeState;

	/**
	* @var DisputeStatusCodeType
	**/
	protected $DisputeStatus;

	/**
	* @var TradingRoleCodeType
	**/
	protected $OtherPartyRole;

	/**
	* @var string
	**/
	protected $OtherPartyName;

	/**
	* @var TradingRoleCodeType
	**/
	protected $UserRole;

	/**
	* @var UserIDType
	**/
	protected $BuyerUserID;

	/**
	* @var UserIDType
	**/
	protected $SellerUserID;

	/**
	* @var string
	**/
	protected $TransactionID;

	/**
	* @var ItemType
	**/
	protected $Item;

	/**
	* @var DisputeReasonCodeType
	**/
	protected $DisputeReason;

	/**
	* @var DisputeExplanationCodeType
	**/
	protected $DisputeExplanation;

	/**
	* @var DisputeCreditEligibilityCodeType
	**/
	protected $DisputeCreditEligibility;

	/**
	* @var dateTime
	**/
	protected $DisputeCreatedTime;

	/**
	* @var dateTime
	**/
	protected $DisputeModifiedTime;

	/**
	* @var DisputeResolutionType
	**/
	protected $DisputeResolution;

	/**
	* @var DisputeMessageType
	**/
	protected $DisputeMessage;

	/**
	* @var boolean
	**/
	protected $Escalation;

	/**
	* @var boolean
	**/
	protected $PurchaseProtection;

	/**
	* @var string
	**/
	protected $OrderLineItemID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DisputeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DisputeID' =>
				array(
					'required' => false,
					'type' => 'DisputeIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisputeRecordType' =>
				array(
					'required' => false,
					'type' => 'DisputeRecordTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisputeState' =>
				array(
					'required' => false,
					'type' => 'DisputeStateCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisputeStatus' =>
				array(
					'required' => false,
					'type' => 'DisputeStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OtherPartyRole' =>
				array(
					'required' => false,
					'type' => 'TradingRoleCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OtherPartyName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserRole' =>
				array(
					'required' => false,
					'type' => 'TradingRoleCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerUserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerUserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
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
				'Item' =>
				array(
					'required' => false,
					'type' => 'ItemType',
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
				'DisputeExplanation' =>
				array(
					'required' => false,
					'type' => 'DisputeExplanationCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisputeCreditEligibility' =>
				array(
					'required' => false,
					'type' => 'DisputeCreditEligibilityCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisputeCreatedTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisputeModifiedTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisputeResolution' =>
				array(
					'required' => false,
					'type' => 'DisputeResolutionType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'DisputeMessage' =>
				array(
					'required' => false,
					'type' => 'DisputeMessageType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'Escalation' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PurchaseProtection' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	 * @return DisputeIDType
	 **/
	function getDisputeID()
	{
		return $this->DisputeID;
	}

	/**
	 * @return void
	 **/
	function setDisputeID($value)
	{
		$this->DisputeID = $value;
	}

	/**
	 * @return DisputeRecordTypeCodeType
	 **/
	function getDisputeRecordType()
	{
		return $this->DisputeRecordType;
	}

	/**
	 * @return void
	 **/
	function setDisputeRecordType($value)
	{
		$this->DisputeRecordType = $value;
	}

	/**
	 * @return DisputeStateCodeType
	 **/
	function getDisputeState()
	{
		return $this->DisputeState;
	}

	/**
	 * @return void
	 **/
	function setDisputeState($value)
	{
		$this->DisputeState = $value;
	}

	/**
	 * @return DisputeStatusCodeType
	 **/
	function getDisputeStatus()
	{
		return $this->DisputeStatus;
	}

	/**
	 * @return void
	 **/
	function setDisputeStatus($value)
	{
		$this->DisputeStatus = $value;
	}

	/**
	 * @return TradingRoleCodeType
	 **/
	function getOtherPartyRole()
	{
		return $this->OtherPartyRole;
	}

	/**
	 * @return void
	 **/
	function setOtherPartyRole($value)
	{
		$this->OtherPartyRole = $value;
	}

	/**
	 * @return string
	 **/
	function getOtherPartyName()
	{
		return $this->OtherPartyName;
	}

	/**
	 * @return void
	 **/
	function setOtherPartyName($value)
	{
		$this->OtherPartyName = $value;
	}

	/**
	 * @return TradingRoleCodeType
	 **/
	function getUserRole()
	{
		return $this->UserRole;
	}

	/**
	 * @return void
	 **/
	function setUserRole($value)
	{
		$this->UserRole = $value;
	}

	/**
	 * @return UserIDType
	 **/
	function getBuyerUserID()
	{
		return $this->BuyerUserID;
	}

	/**
	 * @return void
	 **/
	function setBuyerUserID($value)
	{
		$this->BuyerUserID = $value;
	}

	/**
	 * @return UserIDType
	 **/
	function getSellerUserID()
	{
		return $this->SellerUserID;
	}

	/**
	 * @return void
	 **/
	function setSellerUserID($value)
	{
		$this->SellerUserID = $value;
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
	 * @return ItemType
	 **/
	function getItem()
	{
		return $this->Item;
	}

	/**
	 * @return void
	 **/
	function setItem($value)
	{
		$this->Item = $value;
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
	 * @return DisputeCreditEligibilityCodeType
	 **/
	function getDisputeCreditEligibility()
	{
		return $this->DisputeCreditEligibility;
	}

	/**
	 * @return void
	 **/
	function setDisputeCreditEligibility($value)
	{
		$this->DisputeCreditEligibility = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getDisputeCreatedTime()
	{
		return $this->DisputeCreatedTime;
	}

	/**
	 * @return void
	 **/
	function setDisputeCreatedTime($value)
	{
		$this->DisputeCreatedTime = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getDisputeModifiedTime()
	{
		return $this->DisputeModifiedTime;
	}

	/**
	 * @return void
	 **/
	function setDisputeModifiedTime($value)
	{
		$this->DisputeModifiedTime = $value;
	}

	/**
	 * @return DisputeResolutionType
	 * @param integer $index 
	 **/
	function getDisputeResolution($index = null)
	{
		if ($index !== null)
		{
			return $this->DisputeResolution[$index];
		}
		else
		{
			return $this->DisputeResolution;
		}
	}

	/**
	 * @return void
	 * @param DisputeResolutionType $value
	 * @param integer $index 
	 **/
	function setDisputeResolution($value, $index = null)
	{
		if ($index !== null)
		{
			$this->DisputeResolution[$index] = $value;
		}
		else
		{
			$this->DisputeResolution= $value;
		}
	}

	/**
	 * @return void
	 * @param DisputeResolutionType $value
	 **/
	function addDisputeResolution($value)
	{
		$this->DisputeResolution[] = $value;
	}

	/**
	 * @return DisputeMessageType
	 * @param integer $index 
	 **/
	function getDisputeMessage($index = null)
	{
		if ($index !== null)
		{
			return $this->DisputeMessage[$index];
		}
		else
		{
			return $this->DisputeMessage;
		}
	}

	/**
	 * @return void
	 * @param DisputeMessageType $value
	 * @param integer $index 
	 **/
	function setDisputeMessage($value, $index = null)
	{
		if ($index !== null)
		{
			$this->DisputeMessage[$index] = $value;
		}
		else
		{
			$this->DisputeMessage= $value;
		}
	}

	/**
	 * @return void
	 * @param DisputeMessageType $value
	 **/
	function addDisputeMessage($value)
	{
		$this->DisputeMessage[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getEscalation()
	{
		return $this->Escalation;
	}

	/**
	 * @return void
	 **/
	function setEscalation($value)
	{
		$this->Escalation = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPurchaseProtection()
	{
		return $this->PurchaseProtection;
	}

	/**
	 * @return void
	 **/
	function setPurchaseProtection($value)
	{
		$this->PurchaseProtection = $value;
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
