<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * 
 **/

class WarrantyDurationDetailsType extends EbatNs_ComplexType
{
	/**
	* @var token
	**/
	protected $WarrantyDurationOption;

	/**
	* @var string
	**/
	protected $Description;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('WarrantyDurationDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'WarrantyDurationOption' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Description' =>
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
	 * @return token
	 **/
	function getWarrantyDurationOption()
	{
		return $this->WarrantyDurationOption;
	}

	/**
	 * @return void
	 **/
	function setWarrantyDurationOption($value)
	{
		$this->WarrantyDurationOption = $value;
	}

	/**
	 * @return string
	 **/
	function getDescription()
	{
		return $this->Description;
	}

	/**
	 * @return void
	 **/
	function setDescription($value)
	{
		$this->Description = $value;
	}

}
?>
