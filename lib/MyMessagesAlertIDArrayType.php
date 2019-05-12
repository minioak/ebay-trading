<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MyMessagesAlertIDType.php';

/**
  * This type is deprecated.
  * 
 **/

class MyMessagesAlertIDArrayType extends EbatNs_ComplexType
{
	/**
	* @var MyMessagesAlertIDType
	**/
	protected $AlertID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MyMessagesAlertIDArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AlertID' =>
				array(
					'required' => false,
					'type' => 'MyMessagesAlertIDType',
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
	 * @return MyMessagesAlertIDType
	 * @param integer $index 
	 **/
	function getAlertID($index = null)
	{
		if ($index !== null)
		{
			return $this->AlertID[$index];
		}
		else
		{
			return $this->AlertID;
		}
	}

	/**
	 * @return void
	 * @param MyMessagesAlertIDType $value
	 * @param integer $index 
	 **/
	function setAlertID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->AlertID[$index] = $value;
		}
		else
		{
			$this->AlertID= $value;
		}
	}

	/**
	 * @return void
	 * @param MyMessagesAlertIDType $value
	 **/
	function addAlertID($value)
	{
		$this->AlertID[] = $value;
	}

}
?>
