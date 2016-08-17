<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'BuyingGuideType.php';

/**
  * This type is not used by any Trading API calls.
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
