<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>ReturnPolicyDetails.ReturnsWithin</b> container that
  * is returned in <b>GeteBayDetails</b>. This container contains the values
  * that may be used in the <b>ReturnPolicy.ReturnsWithinOption</b> field of
  * Add/Revise/Relist API calls.
  * 
 **/

class ReturnsWithinDetailsType extends EbatNs_ComplexType
{
	/**
	* @var token
	**/
	protected $ReturnsWithinOption;

	/**
	* @var string
	**/
	protected $Description;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReturnsWithinDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ReturnsWithinOption' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Description' =>
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
	 * @return token
	 **/
	function getReturnsWithinOption()
	{
		return $this->ReturnsWithinOption;
	}

	/**
	 * @return void
	 **/
	function setReturnsWithinOption($value)
	{
		$this->ReturnsWithinOption = $value;
	}

	/**
	 * @return string
	 **/
	function getDescription()
	{
		return $this->Description;
	}

	/**
	 * @return void
	 **/
	function setDescription($value)
	{
		$this->Description = $value;
	}

}
?>
