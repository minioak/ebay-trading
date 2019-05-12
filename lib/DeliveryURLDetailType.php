<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'EnableCodeType.php';

/**
  *   Defines settings for a notification URL (including the URL name in DeliveryURLName).
  * 
 **/

class DeliveryURLDetailType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $DeliveryURLName;

	/**
	* @var anyURI
	**/
	protected $DeliveryURL;

	/**
	* @var EnableCodeType
	**/
	protected $Status;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DeliveryURLDetailType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DeliveryURLName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeliveryURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Status' =>
				array(
					'required' => false,
					'type' => 'EnableCodeType',
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
	function getDeliveryURLName()
	{
		return $this->DeliveryURLName;
	}

	/**
	 * @return void
	 **/
	function setDeliveryURLName($value)
	{
		$this->DeliveryURLName = $value;
	}

	/**
	 * @return anyURI
	 **/
	function getDeliveryURL()
	{
		return $this->DeliveryURL;
	}

	/**
	 * @return void
	 **/
	function setDeliveryURL($value)
	{
		$this->DeliveryURL = $value;
	}

	/**
	 * @return EnableCodeType
	 **/
	function getStatus()
	{
		return $this->Status;
	}

	/**
	 * @return void
	 **/
	function setStatus($value)
	{
		$this->Status = $value;
	}

}
?>
