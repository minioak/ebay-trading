<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ListingTipType.php';

/** 
  *       (out) Contains a list of tips on improving a listing's details, if any. 
  * 
 **/

class ListingTipArrayType extends EbatNs_ComplexType
{
	/**
	* @var ListingTipType
	**/
	protected $ListingTip;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ListingTipArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ListingTip' =>
				array(
					'required' => false,
					'type' => 'ListingTipType',
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
	 * @return ListingTipType
	 * @param integer $index 
	 **/
	function getListingTip($index = null)
	{
		if ($index !== null)
		{
			return $this->ListingTip[$index];
		}
		else
		{
			return $this->ListingTip;
		}
	}

	/**
	 * @return void
	 * @param ListingTipType $value
	 * @param integer $index 
	 **/
	function setListingTip($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ListingTip[$index] = $value;
		}
		else
		{
			$this->ListingTip= $value;
		}
	}

	/**
	 * @return void
	 * @param ListingTipType $value
	 **/
	function addListingTip($value)
	{
		$this->ListingTip[] = $value;
	}

}
?>
