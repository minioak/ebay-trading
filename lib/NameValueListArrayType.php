<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'NameValueListType.php';

/**
  * A list of one or more valid names and corresponding values. Currently
  * used for Item Specifics and Variations.
  * 
 **/

class NameValueListArrayType extends EbatNs_ComplexType
{
	/**
	* @var NameValueListType
	**/
	protected $NameValueList;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('NameValueListArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'NameValueList' =>
				array(
					'required' => false,
					'type' => 'NameValueListType',
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

}
?>
