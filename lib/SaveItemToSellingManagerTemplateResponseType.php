<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';

/**
  * Returns the status of save to template operation.
  * 
 **/

class SaveItemToSellingManagerTemplateResponseType extends AbstractResponseType
{
	/**
	* @var long
	**/
	protected $TemplateID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SaveItemToSellingManagerTemplateResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'TemplateID' =>
				array(
					'required' => false,
					'type' => 'long',
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
	function getTemplateID()
	{
		return $this->TemplateID;
	}

	/**
	 * @return void
	 **/
	function setTemplateID($value)
	{
		$this->TemplateID = $value;
	}

}
?>
