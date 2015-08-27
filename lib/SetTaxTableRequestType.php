<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'TaxTableType.php';

/**
  * Sets the tax table for a seller on a given site.
  * 
 **/

class SetTaxTableRequestType extends AbstractRequestType
{
	/**
	* @var TaxTableType
	**/
	protected $TaxTable;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SetTaxTableRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'TaxTable' =>
				array(
					'required' => false,
					'type' => 'TaxTableType',
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
	 * @return TaxTableType
	 **/
	function getTaxTable()
	{
		return $this->TaxTable;
	}

	/**
	 * @return void
	 **/
	function setTaxTable($value)
	{
		$this->TaxTable = $value;
	}

}
?>
