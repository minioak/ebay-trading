<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'ItemArrayType.php';

/**
  * Contains the items returned by the call. Items for which a seller event has
  * occurred (and that meet any filters specified as input) are returned in an
  * ItemArrayType object, within which are zero, one, or multiple ItemType objects.
  * Each ItemType object contains the detail data for one item listing.
  * 
 **/

class GetSellerEventsResponseType extends AbstractResponseType
{
	/**
	* @var dateTime
	**/
	protected $TimeTo;

	/**
	* @var ItemArrayType
	**/
	protected $ItemArray;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetSellerEventsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'TimeTo' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemArray' =>
				array(
					'required' => false,
					'type' => 'ItemArrayType',
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
	function getTimeTo()
	{
		return $this->TimeTo;
	}

	/**
	 * @return void
	 **/
	function setTimeTo($value)
	{
		$this->TimeTo = $value;
	}

	/**
	 * @return ItemArrayType
	 **/
	function getItemArray()
	{
		return $this->ItemArray;
	}

	/**
	 * @return void
	 **/
	function setItemArray($value)
	{
		$this->ItemArray = $value;
	}

}
?>
