<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'AddMemberMessagesAAQToBidderRequestContainerType.php';

/**
  * The base request of the <b>AddMemberMessagesAAQToBidder</b> call, which allows a seller to send up to 10 messages to bidders/potential buyers regarding an active listing. These potential buyers may include those who have made a Best Offer on a listing.
  * 
 **/

class AddMemberMessagesAAQToBidderRequestType extends AbstractRequestType
{
	/**
	* @var AddMemberMessagesAAQToBidderRequestContainerType
	**/
	protected $AddMemberMessagesAAQToBidderRequestContainer;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddMemberMessagesAAQToBidderRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AddMemberMessagesAAQToBidderRequestContainer' =>
				array(
					'required' => false,
					'type' => 'AddMemberMessagesAAQToBidderRequestContainerType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return AddMemberMessagesAAQToBidderRequestContainerType
	 * @param integer $index 
	 **/
	function getAddMemberMessagesAAQToBidderRequestContainer($index = null)
	{
		if ($index !== null)
		{
			return $this->AddMemberMessagesAAQToBidderRequestContainer[$index];
		}
		else
		{
			return $this->AddMemberMessagesAAQToBidderRequestContainer;
		}
	}

	/**
	 * @return void
	 * @param AddMemberMessagesAAQToBidderRequestContainerType $value
	 * @param integer $index 
	 **/
	function setAddMemberMessagesAAQToBidderRequestContainer($value, $index = null)
	{
		if ($index !== null)
		{
			$this->AddMemberMessagesAAQToBidderRequestContainer[$index] = $value;
		}
		else
		{
			$this->AddMemberMessagesAAQToBidderRequestContainer= $value;
		}
	}

	/**
	 * @return void
	 * @param AddMemberMessagesAAQToBidderRequestContainerType $value
	 **/
	function addAddMemberMessagesAAQToBidderRequestContainer($value)
	{
		$this->AddMemberMessagesAAQToBidderRequestContainer[] = $value;
	}

}
?>
