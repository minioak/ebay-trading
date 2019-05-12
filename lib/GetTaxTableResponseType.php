<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'TaxTableType.php';

/**
  * Response to GetTaxTableRequest.
  * 
 **/

class GetTaxTableResponseType extends AbstractResponseType
{
	/**
	* @var dateTime
	**/
	protected $LastUpdateTime;

	/**
	* @var TaxTableType
	**/
	protected $TaxTable;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetTaxTableResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'LastUpdateTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
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
	 * @return dateTime
	 **/
	function getLastUpdateTime()
	{
		return $this->LastUpdateTime;
	}

	/**
	 * @return void
	 **/
	function setLastUpdateTime($value)
	{
		$this->LastUpdateTime = $value;
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
