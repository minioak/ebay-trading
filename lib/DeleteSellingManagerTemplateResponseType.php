<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';

/**
  * Response for deleting a Selling Manager template.
  * 
 **/

class DeleteSellingManagerTemplateResponseType extends AbstractResponseType
{
	/**
	* @var string
	**/
	protected $DeletedSaleTemplateID;

	/**
	* @var string
	**/
	protected $DeletedSaleTemplateName;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DeleteSellingManagerTemplateResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DeletedSaleTemplateID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeletedSaleTemplateName' =>
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
	 * @return string
	 **/
	function getDeletedSaleTemplateID()
	{
		return $this->DeletedSaleTemplateID;
	}

	/**
	 * @return void
	 **/
	function setDeletedSaleTemplateID($value)
	{
		$this->DeletedSaleTemplateID = $value;
	}

	/**
	 * @return string
	 **/
	function getDeletedSaleTemplateName()
	{
		return $this->DeletedSaleTemplateName;
	}

	/**
	 * @return void
	 **/
	function setDeletedSaleTemplateName($value)
	{
		$this->DeletedSaleTemplateName = $value;
	}

}
?>
