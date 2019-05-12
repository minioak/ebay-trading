<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  * Retrieves a map of old category IDs and corresponding active
  * category IDs defined for the site to which the request is sent.
  * 
 **/

class GetCategoryMappingsRequestType extends AbstractRequestType
{
	/**
	* @var string
	**/
	protected $CategoryVersion;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetCategoryMappingsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CategoryVersion' =>
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
	function getCategoryVersion()
	{
		return $this->CategoryVersion;
	}

	/**
	 * @return void
	 **/
	function setCategoryVersion($value)
	{
		$this->CategoryVersion = $value;
	}

}
?>
