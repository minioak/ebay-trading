<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Contains data indicating whether an item has been revised since the
  * listing became active and, if so, which among a subset of properties
  * have been changed by the revision.
  * 
 **/

class ReviseStatusType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $ItemRevised;

	/**
	* @var boolean
	**/
	protected $BuyItNowAdded;

	/**
	* @var boolean
	**/
	protected $BuyItNowLowered;

	/**
	* @var boolean
	**/
	protected $ReserveLowered;

	/**
	* @var boolean
	**/
	protected $ReserveRemoved;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReviseStatusType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemRevised' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyItNowAdded' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyItNowLowered' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReserveLowered' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReserveRemoved' =>
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
	 * @return boolean
	 **/
	function getItemRevised()
	{
		return $this->ItemRevised;
	}

	/**
	 * @return void
	 **/
	function setItemRevised($value)
	{
		$this->ItemRevised = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBuyItNowAdded()
	{
		return $this->BuyItNowAdded;
	}

	/**
	 * @return void
	 **/
	function setBuyItNowAdded($value)
	{
		$this->BuyItNowAdded = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBuyItNowLowered()
	{
		return $this->BuyItNowLowered;
	}

	/**
	 * @return void
	 **/
	function setBuyItNowLowered($value)
	{
		$this->BuyItNowLowered = $value;
	}

	/**
	 * @return boolean
	 **/
	function getReserveLowered()
	{
		return $this->ReserveLowered;
	}

	/**
	 * @return void
	 **/
	function setReserveLowered($value)
	{
		$this->ReserveLowered = $value;
	}

	/**
	 * @return boolean
	 **/
	function getReserveRemoved()
	{
		return $this->ReserveRemoved;
	}

	/**
	 * @return void
	 **/
	function setReserveRemoved($value)
	{
		$this->ReserveRemoved = $value;
	}

}
?>
