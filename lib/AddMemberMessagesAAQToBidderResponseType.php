<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'AddMemberMessagesAAQToBidderResponseContainerType.php';

/**
  * Type defining the <b>AddMemberMessagesAAQToBidderResponseContainer</b> container, which consists 
  * of the <b>Ack</b> field (indicating the result of the send message operation) and the <b>CorrelationID</b> 
  * field (used to track multiple send message operations performed in one call).
  * 
 **/

class AddMemberMessagesAAQToBidderResponseType extends AbstractResponseType
{
	/**
	* @var AddMemberMessagesAAQToBidderResponseContainerType
	**/
	protected $AddMemberMessagesAAQToBidderResponseContainer;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddMemberMessagesAAQToBidderResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AddMemberMessagesAAQToBidderResponseContainer' =>
				array(
					'required' => false,
					'type' => 'AddMemberMessagesAAQToBidderResponseContainerType',
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
	 * @return AddMemberMessagesAAQToBidderResponseContainerType
	 * @param integer $index 
	 **/
	function getAddMemberMessagesAAQToBidderResponseContainer($index = null)
	{
		if ($index !== null)
		{
			return $this->AddMemberMessagesAAQToBidderResponseContainer[$index];
		}
		else
		{
			return $this->AddMemberMessagesAAQToBidderResponseContainer;
		}
	}

	/**
	 * @return void
	 * @param AddMemberMessagesAAQToBidderResponseContainerType $value
	 * @param integer $index 
	 **/
	function setAddMemberMessagesAAQToBidderResponseContainer($value, $index = null)
	{
		if ($index !== null)
		{
			$this->AddMemberMessagesAAQToBidderResponseContainer[$index] = $value;
		}
		else
		{
			$this->AddMemberMessagesAAQToBidderResponseContainer= $value;
		}
	}

	/**
	 * @return void
	 * @param AddMemberMessagesAAQToBidderResponseContainerType $value
	 **/
	function addAddMemberMessagesAAQToBidderResponseContainer($value)
	{
		$this->AddMemberMessagesAAQToBidderResponseContainer[] = $value;
	}

}
?>
