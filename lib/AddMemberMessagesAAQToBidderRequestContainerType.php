<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MemberMessageType.php';

/**
  * This type is used by the <b>AddMemberMessagesAAQToBidderRequestContainer</b> container. A <b>AddMemberMessagesAAQToBidderRequestContainer</b> container is required for each bidder the seller is sending a message to. The seller can communicate with up to 10 bidders with one <b>AddMemberMessagesAAQToBidder</b> call.
  * 
 **/

class AddMemberMessagesAAQToBidderRequestContainerType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $CorrelationID;

	/**
	* @var string
	**/
	protected $ItemID;

	/**
	* @var MemberMessageType
	**/
	protected $MemberMessage;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddMemberMessagesAAQToBidderRequestContainerType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CorrelationID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MemberMessage' =>
				array(
					'required' => false,
					'type' => 'MemberMessageType',
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
	 * @return string
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
	 * @return MemberMessageType
	 **/
	function getMemberMessage()
	{
		return $this->MemberMessage;
	}

	/**
	 * @return void
	 **/
	function setMemberMessage($value)
	{
		$this->MemberMessage = $value;
	}

}
?>
