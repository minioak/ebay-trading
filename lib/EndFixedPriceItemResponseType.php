<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'SKUType.php';

/**
  * Acknowledgement that includes SKU, as well as the date and time the auction was
  * ended due to the call to EndFixedPriceItem.
  * 
 **/

class EndFixedPriceItemResponseType extends AbstractResponseType
{
	/**
	* @var dateTime
	**/
	protected $EndTime;

	/**
	* @var SKUType
	**/
	protected $SKU;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('EndFixedPriceItemResponseType', 'urn:ebay:apis:eBLBaseComponents');
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
				'SKU' =>
				array(
					'required' => false,
					'type' => 'SKUType',
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
	 * @return SKUType
	 **/
	function getSKU()
	{
		return $this->SKU;
	}

	/**
	 * @return void
	 **/
	function setSKU($value)
	{
		$this->SKU = $value;
	}

}
?>
