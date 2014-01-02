<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'TaxJurisdictionType.php';

/**
 * Sales tax details for zero or more jurisdictions (states,provinces, etc). 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/TaxTableType.html
 *
 */
class TaxTableType extends EbatNs_ComplexType
{
	/**
	 * @var TaxJurisdictionType
	 */
	protected $TaxJurisdiction;

	/**
	 * @return TaxJurisdictionType
	 * @param integer $index 
	 */
	function getTaxJurisdiction($index = null)
	{
		if ($index !== null) {
			return $this->TaxJurisdiction[$index];
		} else {
			return $this->TaxJurisdiction;
		}
	}
	/**
	 * @return void
	 * @param TaxJurisdictionType $value 
	 * @param  $index 
	 */
	function setTaxJurisdiction($value, $index = null)
	{
		if ($index !== null) {
			$this->TaxJurisdiction[$index] = $value;
		} else {
			$this->TaxJurisdiction = $value;
		}
	}
	/**
	 * @return void
	 * @param TaxJurisdictionType $value 
	 */
	function addTaxJurisdiction($value)
	{
		$this->TaxJurisdiction[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('TaxTableType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'TaxJurisdiction' =>
					array(
						'required' => false,
						'type' => 'TaxJurisdictionType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
