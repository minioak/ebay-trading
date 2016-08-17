<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ListingTipArrayType.php';

/**
  * This type is deprecated.
  * 
 **/

class ListingAnalyzerRecommendationsType extends EbatNs_ComplexType
{
	/**
	* @var ListingTipArrayType
	**/
	protected $ListingTipArray;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ListingAnalyzerRecommendationsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ListingTipArray' =>
				array(
					'required' => false,
					'type' => 'ListingTipArrayType',
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
	 * @return ListingTipArrayType
	 **/
	function getListingTipArray()
	{
		return $this->ListingTipArray;
	}

	/**
	 * @return void
	 **/
	function setListingTipArray($value)
	{
		$this->ListingTipArray = $value;
	}

}
?>
