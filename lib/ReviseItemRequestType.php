<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemType.php';

/**
  * Enables a seller to change the properties of a currently active listing.&nbsp;<b>Also for Half.com</b>.
  * <br>
  * <br>
  * After one item in a multi-quantity fixed-price listing has been sold, you can not
  * the values in the Title, Primary Category, Secondary Category, Listing Duration,
  * and Listing Type fields for that listing. However, all other fields in the
  * multi-quantity, fixed-price listing are editable.
  * <br>
  * <br>
  * Inputs are the Item ID of the listing you are revising, and the field or fields
  * that you are updating.
  * 
 **/

class ReviseItemRequestType extends AbstractRequestType
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
	* @var boolean
	**/
	protected $VerifyOnly;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReviseItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
				),
				'VerifyOnly' =>
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

	/**
	 * @return boolean
	 **/
	function getVerifyOnly()
	{
		return $this->VerifyOnly;
	}

	/**
	 * @return void
	 **/
	function setVerifyOnly($value)
	{
		$this->VerifyOnly = $value;
	}

}
?>
