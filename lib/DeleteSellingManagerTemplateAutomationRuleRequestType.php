<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  * Removes the association of Selling Manager automation rules
  * to a template. Returns the remaining rules in the response.
  * This call is subject to change without notice; the
  * deprecation process is inapplicable to this call.
  * 
 **/

class DeleteSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{
	/**
	* @var long
	**/
	protected $SaleTemplateID;

	/**
	* @var boolean
	**/
	protected $DeleteAutomatedListingRule;

	/**
	* @var boolean
	**/
	protected $DeleteAutomatedRelistingRule;

	/**
	* @var boolean
	**/
	protected $DeleteAutomatedSecondChanceOfferRule;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DeleteSellingManagerTemplateAutomationRuleRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SaleTemplateID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeleteAutomatedListingRule' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeleteAutomatedRelistingRule' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeleteAutomatedSecondChanceOfferRule' =>
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
	 * @return long
	 **/
	function getSaleTemplateID()
	{
		return $this->SaleTemplateID;
	}

	/**
	 * @return void
	 **/
	function setSaleTemplateID($value)
	{
		$this->SaleTemplateID = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDeleteAutomatedListingRule()
	{
		return $this->DeleteAutomatedListingRule;
	}

	/**
	 * @return void
	 **/
	function setDeleteAutomatedListingRule($value)
	{
		$this->DeleteAutomatedListingRule = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDeleteAutomatedRelistingRule()
	{
		return $this->DeleteAutomatedRelistingRule;
	}

	/**
	 * @return void
	 **/
	function setDeleteAutomatedRelistingRule($value)
	{
		$this->DeleteAutomatedRelistingRule = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDeleteAutomatedSecondChanceOfferRule()
	{
		return $this->DeleteAutomatedSecondChanceOfferRule;
	}

	/**
	 * @return void
	 **/
	function setDeleteAutomatedSecondChanceOfferRule($value)
	{
		$this->DeleteAutomatedSecondChanceOfferRule = $value;
	}

}
?>
