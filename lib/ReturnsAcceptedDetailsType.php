<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>ReturnPolicyDetails.ReturnsAccepted</b> container that 
  * is returned in <b>GeteBayDetails</b>. This container contains the values 
  * that may be used in the <b>ReturnPolicy.ReturnsAcceptedOption</b> field of Add/Revise/Relist 
  * API calls.
  * 
 **/

class ReturnsAcceptedDetailsType extends EbatNs_ComplexType
{
	/**
	* @var token
	**/
	protected $ReturnsAcceptedOption;

	/**
	* @var string
	**/
	protected $Description;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReturnsAcceptedDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ReturnsAcceptedOption' =>
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
	function getReturnsAcceptedOption()
	{
		return $this->ReturnsAcceptedOption;
	}

	/**
	 * @return void
	 **/
	function setReturnsAcceptedOption($value)
	{
		$this->ReturnsAcceptedOption = $value;
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
