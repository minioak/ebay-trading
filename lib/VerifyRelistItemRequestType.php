<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemType.php';

/**
  * Enable the seller to verify that the data they plan to pass into a <b>RelistItem</b> call will produce the results that you are expecting, including a successful call with no errors.
  * 
 **/

class VerifyRelistItemRequestType extends AbstractRequestType
{
	/**
	* @var ItemType
	**/
	protected $Item;

	/**
	* @var string
	**/
	protected $DeletedField;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('VerifyRelistItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Item' =>
				array(
					'required' => false,
					'type' => 'ItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeletedField' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return ItemType
	 **/
	function getItem()
	{
		return $this->Item;
	}

	/**
	 * @return void
	 **/
	function setItem($value)
	{
		$this->Item = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getDeletedField($index = null)
	{
		if ($index !== null)
		{
			return $this->DeletedField[$index];
		}
		else
		{
			return $this->DeletedField;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setDeletedField($value, $index = null)
	{
		if ($index !== null)
		{
			$this->DeletedField[$index] = $value;
		}
		else
		{
			$this->DeletedField= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addDeletedField($value)
	{
		$this->DeletedField[] = $value;
	}

}
?>
