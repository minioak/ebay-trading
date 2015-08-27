<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MarkUpMarkDownEventType.php';

/**
  * List of objects representing markup or markdown events for a given application
  * and time period. If no time period is specified in the request, the information
  * for only one day (24 hours before the time the call is made to the time the call
  * is made) is included. The maximum time period is allowed is 3 days (72 hours
  * before the call is made to the time the call is made).
  * 
 **/

class MarkUpMarkDownHistoryType extends EbatNs_ComplexType
{
	/**
	* @var MarkUpMarkDownEventType
	**/
	protected $MarkUpMarkDownEvent;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MarkUpMarkDownHistoryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MarkUpMarkDownEvent' =>
				array(
					'required' => false,
					'type' => 'MarkUpMarkDownEventType',
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
	 * @return MarkUpMarkDownEventType
	 * @param integer $index 
	 **/
	function getMarkUpMarkDownEvent($index = null)
	{
		if ($index !== null)
		{
			return $this->MarkUpMarkDownEvent[$index];
		}
		else
		{
			return $this->MarkUpMarkDownEvent;
		}
	}

	/**
	 * @return void
	 * @param MarkUpMarkDownEventType $value
	 * @param integer $index 
	 **/
	function setMarkUpMarkDownEvent($value, $index = null)
	{
		if ($index !== null)
		{
			$this->MarkUpMarkDownEvent[$index] = $value;
		}
		else
		{
			$this->MarkUpMarkDownEvent= $value;
		}
	}

	/**
	 * @return void
	 * @param MarkUpMarkDownEventType $value
	 **/
	function addMarkUpMarkDownEvent($value)
	{
		$this->MarkUpMarkDownEvent[] = $value;
	}

}
?>
