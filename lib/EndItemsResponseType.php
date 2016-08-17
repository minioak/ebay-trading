<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'EndItemResponseContainerType.php';

/**
  * Contains a response of the resulting status of ending each item.
  * 
 **/

class EndItemsResponseType extends AbstractResponseType
{
	/**
	* @var EndItemResponseContainerType
	**/
	protected $EndItemResponseContainer;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('EndItemsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'EndItemResponseContainer' =>
				array(
					'required' => false,
					'type' => 'EndItemResponseContainerType',
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
	 * @return EndItemResponseContainerType
	 * @param integer $index 
	 **/
	function getEndItemResponseContainer($index = null)
	{
		if ($index !== null)
		{
			return $this->EndItemResponseContainer[$index];
		}
		else
		{
			return $this->EndItemResponseContainer;
		}
	}

	/**
	 * @return void
	 * @param EndItemResponseContainerType $value
	 * @param integer $index 
	 **/
	function setEndItemResponseContainer($value, $index = null)
	{
		if ($index !== null)
		{
			$this->EndItemResponseContainer[$index] = $value;
		}
		else
		{
			$this->EndItemResponseContainer= $value;
		}
	}

	/**
	 * @return void
	 * @param EndItemResponseContainerType $value
	 **/
	function addEndItemResponseContainer($value)
	{
		$this->EndItemResponseContainer[] = $value;
	}

}
?>
