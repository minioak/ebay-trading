<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'UnpaidItemCaseStatusTypeCodeType.php';
require_once 'UnpaidItemCaseOpenTypeCodeType.php';

/**
  * Type defining the <strong>UnpaidItem</strong> container, which consists of
  * details related to the type and status of an Unpaid Item case.
  * 
 **/

class UnpaidItemType extends EbatNs_ComplexType
{
	/**
	* @var UnpaidItemCaseStatusTypeCodeType
	**/
	protected $Status;

	/**
	* @var UnpaidItemCaseOpenTypeCodeType
	**/
	protected $Type;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('UnpaidItemType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Status' =>
				array(
					'required' => false,
					'type' => 'UnpaidItemCaseStatusTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Type' =>
				array(
					'required' => false,
					'type' => 'UnpaidItemCaseOpenTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return UnpaidItemCaseStatusTypeCodeType
	 **/
	function getStatus()
	{
		return $this->Status;
	}

	/**
	 * @return void
	 **/
	function setStatus($value)
	{
		$this->Status = $value;
	}

	/**
	 * @return UnpaidItemCaseOpenTypeCodeType
	 **/
	function getType()
	{
		return $this->Type;
	}

	/**
	 * @return void
	 **/
	function setType($value)
	{
		$this->Type = $value;
	}

}
?>
