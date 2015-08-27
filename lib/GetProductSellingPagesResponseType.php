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

class GetProductSellingPagesResponseType extends AbstractResponseType
{
	/**
	* @var string
	**/
	protected $ProductSellingPagesData;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetProductSellingPagesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ProductSellingPagesData' =>
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
	function getProductSellingPagesData()
	{
		return $this->ProductSellingPagesData;
	}

	/**
	 * @return void
	 **/
	function setProductSellingPagesData($value)
	{
		$this->ProductSellingPagesData = $value;
	}

}
?>
