<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MyMessagesMessageType.php';

/**
  * Contains a list of message data.
  * 
 **/

class MyMessagesMessageArrayType extends EbatNs_ComplexType
{
	/**
	* @var MyMessagesMessageType
	**/
	protected $Message;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MyMessagesMessageArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Message' =>
				array(
					'required' => false,
					'type' => 'MyMessagesMessageType',
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
	 * @return MyMessagesMessageType
	 * @param integer $index 
	 **/
	function getMessage($index = null)
	{
		if ($index !== null)
		{
			return $this->Message[$index];
		}
		else
		{
			return $this->Message;
		}
	}

	/**
	 * @return void
	 * @param MyMessagesMessageType $value
	 * @param integer $index 
	 **/
	function setMessage($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Message[$index] = $value;
		}
		else
		{
			$this->Message= $value;
		}
	}

	/**
	 * @return void
	 * @param MyMessagesMessageType $value
	 **/
	function addMessage($value)
	{
		$this->Message[] = $value;
	}

}
?>
