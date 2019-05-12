<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ErrorType.php';

/**
  * Includes the acknowledgement of date and time the auction was
  * ended due to the call to EndItem.
  * 
 **/

class EndItemResponseContainerType extends EbatNs_ComplexType
{
	/**
	* @var dateTime
	**/
	protected $EndTime;

	/**
	* @var string
	**/
	protected $CorrelationID;

	/**
	* @var ErrorType
	**/
	protected $Errors;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('EndItemResponseContainerType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'EndTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CorrelationID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Errors' =>
				array(
					'required' => false,
					'type' => 'ErrorType',
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
	 * @return dateTime
	 **/
	function getEndTime()
	{
		return $this->EndTime;
	}

	/**
	 * @return void
	 **/
	function setEndTime($value)
	{
		$this->EndTime = $value;
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
	 * @return ErrorType
	 * @param integer $index 
	 **/
	function getErrors($index = null)
	{
		if ($index !== null)
		{
			return $this->Errors[$index];
		}
		else
		{
			return $this->Errors;
		}
	}

	/**
	 * @return void
	 * @param ErrorType $value
	 * @param integer $index 
	 **/
	function setErrors($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Errors[$index] = $value;
		}
		else
		{
			$this->Errors= $value;
		}
	}

	/**
	 * @return void
	 * @param ErrorType $value
	 **/
	function addErrors($value)
	{
		$this->Errors[] = $value;
	}

}
?>
