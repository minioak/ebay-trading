<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Specifies the Date range.
  * 
 **/

class TimeRangeType extends EbatNs_ComplexType
{
	/**
	* @var dateTime
	**/
	protected $TimeFrom;

	/**
	* @var dateTime
	**/
	protected $TimeTo;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('TimeRangeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'TimeFrom' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TimeTo' =>
				array(
					'required' => false,
					'type' => 'dateTime',
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
	 * @return dateTime
	 **/
	function getTimeFrom()
	{
		return $this->TimeFrom;
	}

	/**
	 * @return void
	 **/
	function setTimeFrom($value)
	{
		$this->TimeFrom = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getTimeTo()
	{
		return $this->TimeTo;
	}

	/**
	 * @return void
	 **/
	function setTimeTo($value)
	{
		$this->TimeTo = $value;
	}

}
?>
