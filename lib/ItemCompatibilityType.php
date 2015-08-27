<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'NameValueListType.php';

/**
  * All information corresponding to an individual compatibility by application.
  * 
 **/

class ItemCompatibilityType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $Delete;

	/**
	* @var NameValueListType
	**/
	protected $NameValueList;

	/**
	* @var string
	**/
	protected $CompatibilityNotes;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ItemCompatibilityType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Delete' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NameValueList' =>
				array(
					'required' => false,
					'type' => 'NameValueListType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'CompatibilityNotes' =>
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
	 * @return boolean
	 **/
	function getDelete()
	{
		return $this->Delete;
	}

	/**
	 * @return void
	 **/
	function setDelete($value)
	{
		$this->Delete = $value;
	}

	/**
	 * @return NameValueListType
	 * @param integer $index 
	 **/
	function getNameValueList($index = null)
	{
		if ($index !== null)
		{
			return $this->NameValueList[$index];
		}
		else
		{
			return $this->NameValueList;
		}
	}

	/**
	 * @return void
	 * @param NameValueListType $value
	 * @param integer $index 
	 **/
	function setNameValueList($value, $index = null)
	{
		if ($index !== null)
		{
			$this->NameValueList[$index] = $value;
		}
		else
		{
			$this->NameValueList= $value;
		}
	}

	/**
	 * @return void
	 * @param NameValueListType $value
	 **/
	function addNameValueList($value)
	{
		$this->NameValueList[] = $value;
	}

	/**
	 * @return string
	 **/
	function getCompatibilityNotes()
	{
		return $this->CompatibilityNotes;
	}

	/**
	 * @return void
	 **/
	function setCompatibilityNotes($value)
	{
		$this->CompatibilityNotes = $value;
	}

}
?>
