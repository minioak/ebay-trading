<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MyMessagesMessageIDType.php';

/**
  * Contains a list of up to 10 MessageID values.
  * 
 **/

class MyMessagesMessageIDArrayType extends EbatNs_ComplexType
{
	/**
	* @var MyMessagesMessageIDType
	**/
	protected $MessageID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MyMessagesMessageIDArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MessageID' =>
				array(
					'required' => false,
					'type' => 'MyMessagesMessageIDType',
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
	 * @return MyMessagesMessageIDType
	 * @param integer $index 
	 **/
	function getMessageID($index = null)
	{
		if ($index !== null)
		{
			return $this->MessageID[$index];
		}
		else
		{
			return $this->MessageID;
		}
	}

	/**
	 * @return void
	 * @param MyMessagesMessageIDType $value
	 * @param integer $index 
	 **/
	function setMessageID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->MessageID[$index] = $value;
		}
		else
		{
			$this->MessageID= $value;
		}
	}

	/**
	 * @return void
	 * @param MyMessagesMessageIDType $value
	 **/
	function addMessageID($value)
	{
		$this->MessageID[] = $value;
	}

}
?>
