<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Specifies the details of policy violations if the item was administratively canceled.
  * The details are the policy ID and the policy text.
  * 
 **/

class ItemPolicyViolationType extends EbatNs_ComplexType
{
	/**
	* @var long
	**/
	protected $PolicyID;

	/**
	* @var string
	**/
	protected $PolicyText;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ItemPolicyViolationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PolicyID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PolicyText' =>
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
	 * @return long
	 **/
	function getPolicyID()
	{
		return $this->PolicyID;
	}

	/**
	 * @return void
	 **/
	function setPolicyID($value)
	{
		$this->PolicyID = $value;
	}

	/**
	 * @return string
	 **/
	function getPolicyText()
	{
		return $this->PolicyText;
	}

	/**
	 * @return void
	 **/
	function setPolicyText($value)
	{
		$this->PolicyText = $value;
	}

}
?>
