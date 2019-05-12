<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'ItemIDArrayType.php';
require_once 'UserIDType.php';

/**
  * This type is deprecated.
  * 
 **/

class ItemsCanceledEventType extends AbstractResponseType
{
	/**
	* @var ItemIDArrayType
	**/
	protected $CanceledItemIDArray;

	/**
	* @var boolean
	**/
	protected $EligibleForRelist;

	/**
	* @var UserIDType
	**/
	protected $SellerID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ItemsCanceledEventType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CanceledItemIDArray' =>
				array(
					'required' => false,
					'type' => 'ItemIDArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EligibleForRelist' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
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
	 * @return ItemIDArrayType
	 **/
	function getCanceledItemIDArray()
	{
		return $this->CanceledItemIDArray;
	}

	/**
	 * @return void
	 **/
	function setCanceledItemIDArray($value)
	{
		$this->CanceledItemIDArray = $value;
	}

	/**
	 * @return boolean
	 **/
	function getEligibleForRelist()
	{
		return $this->EligibleForRelist;
	}

	/**
	 * @return void
	 **/
	function setEligibleForRelist($value)
	{
		$this->EligibleForRelist = $value;
	}

	/**
	 * @return UserIDType
	 **/
	function getSellerID()
	{
		return $this->SellerID;
	}

	/**
	 * @return void
	 **/
	function setSellerID($value)
	{
		$this->SellerID = $value;
	}

}
?>
