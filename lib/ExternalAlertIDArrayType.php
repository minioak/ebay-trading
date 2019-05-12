<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is deprecated.
  * 
 **/

class ExternalAlertIDArrayType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $ExternalAlertID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ExternalAlertIDArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ExternalAlertID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getExternalAlertID($index = null)
	{
		if ($index !== null)
		{
			return $this->ExternalAlertID[$index];
		}
		else
		{
			return $this->ExternalAlertID;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setExternalAlertID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ExternalAlertID[$index] = $value;
		}
		else
		{
			$this->ExternalAlertID= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addExternalAlertID($value)
	{
		$this->ExternalAlertID[] = $value;
	}

}
?>
