<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SearchStandingStatusCodeType.php';

/**
  * Provides information about the visibility level you've earned for your eBay listings. 
  * When you have a better search standing, your listings may receive higher 
  * placement in Best Match search results.
  * 
 **/

class SearchStandingDashboardType extends EbatNs_ComplexType
{
	/**
	* @var SearchStandingStatusCodeType
	**/
	protected $Status;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SearchStandingDashboardType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Status' =>
				array(
					'required' => false,
					'type' => 'SearchStandingStatusCodeType',
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
	 * @return SearchStandingStatusCodeType
	 **/
	function getStatus()
	{
		return $this->Status;
	}

	/**
	 * @return void
	 **/
	function setStatus($value)
	{
		$this->Status = $value;
	}

}
?>
