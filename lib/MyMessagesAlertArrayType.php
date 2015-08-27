<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MyMessagesAlertType.php';

/**
  * This type is deprecated because <b>MyMessagesAlert*</b> are deprecated.
  * 
  * 
 **/

class MyMessagesAlertArrayType extends EbatNs_ComplexType
{
	/**
	* @var MyMessagesAlertType
	**/
	protected $Alert;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MyMessagesAlertArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Alert' =>
				array(
					'required' => false,
					'type' => 'MyMessagesAlertType',
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
	 * @return MyMessagesAlertType
	 * @param integer $index 
	 **/
	function getAlert($index = null)
	{
		if ($index !== null)
		{
			return $this->Alert[$index];
		}
		else
		{
			return $this->Alert;
		}
	}

	/**
	 * @return void
	 * @param MyMessagesAlertType $value
	 * @param integer $index 
	 **/
	function setAlert($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Alert[$index] = $value;
		}
		else
		{
			$this->Alert= $value;
		}
	}

	/**
	 * @return void
	 * @param MyMessagesAlertType $value
	 **/
	function addAlert($value)
	{
		$this->Alert[] = $value;
	}

}
?>
