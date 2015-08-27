<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'BuyingGuideType.php';

/**
  * Information about zero or more buying guides and the site's buying guide hub.
  * Buying guides contain content about particular product areas, categories, or subjects
  * to help buyers decide which type of item to purchase based on their particular interests.
  * Multiple buying guides can be returned. See the <a href="http://developer.ebay.com/Devzone/guides/ebayfeatures/Development/Items-Searching.html">eBay Features Guide</a> for additional information.
  * 
 **/

class BuyingGuideDetailsType extends EbatNs_ComplexType
{
	/**
	* @var BuyingGuideType
	**/
	protected $BuyingGuide;

	/**
	* @var anyURI
	**/
	protected $BuyingGuideHub;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BuyingGuideDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BuyingGuide' =>
				array(
					'required' => false,
					'type' => 'BuyingGuideType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'BuyingGuideHub' =>
				array(
					'required' => false,
					'type' => 'anyURI',
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
	 * @return BuyingGuideType
	 * @param integer $index 
	 **/
	function getBuyingGuide($index = null)
	{
		if ($index !== null)
		{
			return $this->BuyingGuide[$index];
		}
		else
		{
			return $this->BuyingGuide;
		}
	}

	/**
	 * @return void
	 * @param BuyingGuideType $value
	 * @param integer $index 
	 **/
	function setBuyingGuide($value, $index = null)
	{
		if ($index !== null)
		{
			$this->BuyingGuide[$index] = $value;
		}
		else
		{
			$this->BuyingGuide= $value;
		}
	}

	/**
	 * @return void
	 * @param BuyingGuideType $value
	 **/
	function addBuyingGuide($value)
	{
		$this->BuyingGuide[] = $value;
	}

	/**
	 * @return anyURI
	 **/
	function getBuyingGuideHub()
	{
		return $this->BuyingGuideHub;
	}

	/**
	 * @return void
	 **/
	function setBuyingGuideHub($value)
	{
		$this->BuyingGuideHub = $value;
	}

}
?>
