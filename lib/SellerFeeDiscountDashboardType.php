<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * PowerSeller discount information (e.g., to show in a Seller Dashboard). As a
  * PowerSeller, you can earn discounts on your monthly invoice Final Value Fees based
  * on how well you're doing as a seller.
  * 
 **/

class SellerFeeDiscountDashboardType extends EbatNs_ComplexType
{
	/**
	* @var float
	**/
	protected $Percent;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellerFeeDiscountDashboardType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Percent' =>
				array(
					'required' => false,
					'type' => 'float',
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
	 * @return float
	 **/
	function getPercent()
	{
		return $this->Percent;
	}

	/**
	 * @return void
	 **/
	function setPercent($value)
	{
		$this->Percent = $value;
	}

}
?>
