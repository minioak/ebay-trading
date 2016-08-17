<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Store color set.
  * 
 **/

class StoreColorType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Primary;

	/**
	* @var string
	**/
	protected $Secondary;

	/**
	* @var string
	**/
	protected $Accent;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('StoreColorType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Primary' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Secondary' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Accent' =>
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
	 * @return string
	 **/
	function getPrimary()
	{
		return $this->Primary;
	}

	/**
	 * @return void
	 **/
	function setPrimary($value)
	{
		$this->Primary = $value;
	}

	/**
	 * @return string
	 **/
	function getSecondary()
	{
		return $this->Secondary;
	}

	/**
	 * @return void
	 **/
	function setSecondary($value)
	{
		$this->Secondary = $value;
	}

	/**
	 * @return string
	 **/
	function getAccent()
	{
		return $this->Accent;
	}

	/**
	 * @return void
	 **/
	function setAccent($value)
	{
		$this->Accent = $value;
	}

}
?>
