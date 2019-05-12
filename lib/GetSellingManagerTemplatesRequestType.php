<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  *  Retrieves Selling Manager templates.
  * This call is subject to change without notice; the
  * deprecation process is inapplicable to this call.
  * 
 **/

class GetSellingManagerTemplatesRequestType extends AbstractRequestType
{
	/**
	* @var long
	**/
	protected $SaleTemplateID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetSellingManagerTemplatesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SaleTemplateID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return long
	 * @param integer $index 
	 **/
	function getSaleTemplateID($index = null)
	{
		if ($index !== null)
		{
			return $this->SaleTemplateID[$index];
		}
		else
		{
			return $this->SaleTemplateID;
		}
	}

	/**
	 * @return void
	 * @param long $value
	 * @param integer $index 
	 **/
	function setSaleTemplateID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SaleTemplateID[$index] = $value;
		}
		else
		{
			$this->SaleTemplateID= $value;
		}
	}

	/**
	 * @return void
	 * @param long $value
	 **/
	function addSaleTemplateID($value)
	{
		$this->SaleTemplateID[] = $value;
	}

}
?>
