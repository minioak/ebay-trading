<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';

/**
  * This type is deprecated as the call is no longer available.
  * 
  * 
 **/

class GetProductFinderResponseType extends AbstractResponseType
{
	/**
	* @var string
	**/
	protected $AttributeSystemVersion;

	/**
	* @var string
	**/
	protected $ProductFinderData;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetProductFinderResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AttributeSystemVersion' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductFinderData' =>
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
	function getAttributeSystemVersion()
	{
		return $this->AttributeSystemVersion;
	}

	/**
	 * @return void
	 **/
	function setAttributeSystemVersion($value)
	{
		$this->AttributeSystemVersion = $value;
	}

	/**
	 * @return string
	 **/
	function getProductFinderData()
	{
		return $this->ProductFinderData;
	}

	/**
	 * @return void
	 **/
	function setProductFinderData($value)
	{
		$this->ProductFinderData = $value;
	}

}
?>
