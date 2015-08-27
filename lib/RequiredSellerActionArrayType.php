<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'RequiredSellerActionCodeType.php';

/**
  * This type defines the <b>RequiredSellerActionArray</b> container,
  * which may contain one or more <b>RequiredSellerAction</b> fields.
  * 
 **/

class RequiredSellerActionArrayType extends EbatNs_ComplexType
{
	/**
	* @var RequiredSellerActionCodeType
	**/
	protected $RequiredSellerAction;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RequiredSellerActionArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'RequiredSellerAction' =>
				array(
					'required' => false,
					'type' => 'RequiredSellerActionCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return RequiredSellerActionCodeType
	 * @param integer $index 
	 **/
	function getRequiredSellerAction($index = null)
	{
		if ($index !== null)
		{
			return $this->RequiredSellerAction[$index];
		}
		else
		{
			return $this->RequiredSellerAction;
		}
	}

	/**
	 * @return void
	 * @param RequiredSellerActionCodeType $value
	 * @param integer $index 
	 **/
	function setRequiredSellerAction($value, $index = null)
	{
		if ($index !== null)
		{
			$this->RequiredSellerAction[$index] = $value;
		}
		else
		{
			$this->RequiredSellerAction= $value;
		}
	}

	/**
	 * @return void
	 * @param RequiredSellerActionCodeType $value
	 **/
	function addRequiredSellerAction($value)
	{
		$this->RequiredSellerAction[] = $value;
	}

}
?>
