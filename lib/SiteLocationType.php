<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SiteIDFilterCodeType.php';

/**
  * Contains the data that defines a site-based filter (used when searching for 
  * items and filtering the search result set).
  * 
 **/

class SiteLocationType extends EbatNs_ComplexType
{
	/**
	* @var SiteIDFilterCodeType
	**/
	protected $SiteID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SiteLocationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SiteID' =>
				array(
					'required' => false,
					'type' => 'SiteIDFilterCodeType',
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
	 * @return SiteIDFilterCodeType
	 **/
	function getSiteID()
	{
		return $this->SiteID;
	}

	/**
	 * @return void
	 **/
	function setSiteID($value)
	{
		$this->SiteID = $value;
	}

}
?>
