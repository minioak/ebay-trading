<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'EndItemRequestContainerType.php';

/**
  * Ends up to 10 specified item listings before the date and time at which it would normally end per the listing duration.&nbsp;<b>Also for Half.com</b>.
  * 
 **/

class EndItemsRequestType extends AbstractRequestType
{
	/**
	* @var EndItemRequestContainerType
	**/
	protected $EndItemRequestContainer;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('EndItemsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'EndItemRequestContainer' =>
				array(
					'required' => false,
					'type' => 'EndItemRequestContainerType',
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
	 * @return EndItemRequestContainerType
	 * @param integer $index 
	 **/
	function getEndItemRequestContainer($index = null)
	{
		if ($index !== null)
		{
			return $this->EndItemRequestContainer[$index];
		}
		else
		{
			return $this->EndItemRequestContainer;
		}
	}

	/**
	 * @return void
	 * @param EndItemRequestContainerType $value
	 * @param integer $index 
	 **/
	function setEndItemRequestContainer($value, $index = null)
	{
		if ($index !== null)
		{
			$this->EndItemRequestContainer[$index] = $value;
		}
		else
		{
			$this->EndItemRequestContainer= $value;
		}
	}

	/**
	 * @return void
	 * @param EndItemRequestContainerType $value
	 **/
	function addEndItemRequestContainer($value)
	{
		$this->EndItemRequestContainer[] = $value;
	}

}
?>
