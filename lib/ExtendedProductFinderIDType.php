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

class ExtendedProductFinderIDType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $ProductFinderID;

	/**
	* @var boolean
	**/
	protected $ProductFinderBuySide;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ExtendedProductFinderIDType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ProductFinderID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductFinderBuySide' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	function getProductFinderID()
	{
		return $this->ProductFinderID;
	}

	/**
	 * @return void
	 **/
	function setProductFinderID($value)
	{
		$this->ProductFinderID = $value;
	}

	/**
	 * @return boolean
	 **/
	function getProductFinderBuySide()
	{
		return $this->ProductFinderBuySide;
	}

	/**
	 * @return void
	 **/
	function setProductFinderBuySide($value)
	{
		$this->ProductFinderBuySide = $value;
	}

}
?>
