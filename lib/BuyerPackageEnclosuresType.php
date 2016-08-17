<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'BuyerPackageEnclosureType.php';

/**
  * Type defining the <b>BuyerPackageEnclosures</b> container, which is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s). A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
  * 
 **/

class BuyerPackageEnclosuresType extends EbatNs_ComplexType
{
	/**
	* @var BuyerPackageEnclosureType
	**/
	protected $BuyerPackageEnclosure;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BuyerPackageEnclosuresType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BuyerPackageEnclosure' =>
				array(
					'required' => false,
					'type' => 'BuyerPackageEnclosureType',
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
	 * @return BuyerPackageEnclosureType
	 * @param integer $index 
	 **/
	function getBuyerPackageEnclosure($index = null)
	{
		if ($index !== null)
		{
			return $this->BuyerPackageEnclosure[$index];
		}
		else
		{
			return $this->BuyerPackageEnclosure;
		}
	}

	/**
	 * @return void
	 * @param BuyerPackageEnclosureType $value
	 * @param integer $index 
	 **/
	function setBuyerPackageEnclosure($value, $index = null)
	{
		if ($index !== null)
		{
			$this->BuyerPackageEnclosure[$index] = $value;
		}
		else
		{
			$this->BuyerPackageEnclosure= $value;
		}
	}

	/**
	 * @return void
	 * @param BuyerPackageEnclosureType $value
	 **/
	function addBuyerPackageEnclosure($value)
	{
		$this->BuyerPackageEnclosure[] = $value;
	}

}
?>
