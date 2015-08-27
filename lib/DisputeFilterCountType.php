<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'DisputeFilterTypeCodeType.php';

/**
  * The number of disputes that match a given filter.
  * 
 **/

class DisputeFilterCountType extends EbatNs_ComplexType
{
	/**
	* @var DisputeFilterTypeCodeType
	**/
	protected $DisputeFilterType;

	/**
	* @var int
	**/
	protected $TotalAvailable;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DisputeFilterCountType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DisputeFilterType' =>
				array(
					'required' => false,
					'type' => 'DisputeFilterTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalAvailable' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return DisputeFilterTypeCodeType
	 **/
	function getDisputeFilterType()
	{
		return $this->DisputeFilterType;
	}

	/**
	 * @return void
	 **/
	function setDisputeFilterType($value)
	{
		$this->DisputeFilterType = $value;
	}

	/**
	 * @return int
	 **/
	function getTotalAvailable()
	{
		return $this->TotalAvailable;
	}

	/**
	 * @return void
	 **/
	function setTotalAvailable($value)
	{
		$this->TotalAvailable = $value;
	}

}
?>
