<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AckCodeType.php';

/**
  * Contains the response information.
  * 
 **/

class AddMemberMessagesAAQToBidderResponseContainerType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $CorrelationID;

	/**
	* @var AckCodeType
	**/
	protected $Ack;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddMemberMessagesAAQToBidderResponseContainerType', 'urn:ebay:apis:eBLBaseComponents');
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
				'Ack' =>
				array(
					'required' => false,
					'type' => 'AckCodeType',
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
	 * @return AckCodeType
	 **/
	function getAck()
	{
		return $this->Ack;
	}

	/**
	 * @return void
	 **/
	function setAck($value)
	{
		$this->Ack = $value;
	}

}
?>
