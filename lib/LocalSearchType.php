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

class LocalSearchType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $MaxDistance;

	/**
	* @var string
	**/
	protected $PostalCode;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('LocalSearchType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MaxDistance' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PostalCode' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return int
	 **/
	function getMaxDistance()
	{
		return $this->MaxDistance;
	}

	/**
	 * @return void
	 **/
	function setMaxDistance($value)
	{
		$this->MaxDistance = $value;
	}

	/**
	 * @return string
	 **/
	function getPostalCode()
	{
		return $this->PostalCode;
	}

	/**
	 * @return void
	 **/
	function setPostalCode($value)
	{
		$this->PostalCode = $value;
	}

}
?>
