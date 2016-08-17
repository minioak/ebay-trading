<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'SellingManagerAlertType.php';

/**
  * Type defining the call-specific response fields for the <b>GetSellingManagerAlerts</b> 
  * call.
  * 
 **/

class GetSellingManagerAlertsResponseType extends AbstractResponseType
{
	/**
	* @var SellingManagerAlertType
	**/
	protected $Alert;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetSellingManagerAlertsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Alert' =>
				array(
					'required' => false,
					'type' => 'SellingManagerAlertType',
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
	 * @return SellingManagerAlertType
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
	 * @param SellingManagerAlertType $value
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
	 * @param SellingManagerAlertType $value
	 **/
	function addAlert($value)
	{
		$this->Alert[] = $value;
	}

}
?>
