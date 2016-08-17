<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'DiscountNameCodeType.php';
require_once 'DiscountProfileType.php';

/**
  * Type used by the <b>CalculatedShippingDiscount</b> container, which is used in the <b>SetShippingDiscountProfiles</b> call to create one or more discounted calculated shipping rules. The <b>CalculatedShippingDiscount</b> container is returned in the response of all other calls that use this type.
  * 
 **/

class CalculatedShippingDiscountType extends EbatNs_ComplexType
{
	/**
	* @var DiscountNameCodeType
	**/
	protected $DiscountName;

	/**
	* @var DiscountProfileType
	**/
	protected $DiscountProfile;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CalculatedShippingDiscountType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DiscountName' =>
				array(
					'required' => false,
					'type' => 'DiscountNameCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DiscountProfile' =>
				array(
					'required' => false,
					'type' => 'DiscountProfileType',
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
	 * @return DiscountNameCodeType
	 **/
	function getDiscountName()
	{
		return $this->DiscountName;
	}

	/**
	 * @return void
	 **/
	function setDiscountName($value)
	{
		$this->DiscountName = $value;
	}

	/**
	 * @return DiscountProfileType
	 * @param integer $index 
	 **/
	function getDiscountProfile($index = null)
	{
		if ($index !== null)
		{
			return $this->DiscountProfile[$index];
		}
		else
		{
			return $this->DiscountProfile;
		}
	}

	/**
	 * @return void
	 * @param DiscountProfileType $value
	 * @param integer $index 
	 **/
	function setDiscountProfile($value, $index = null)
	{
		if ($index !== null)
		{
			$this->DiscountProfile[$index] = $value;
		}
		else
		{
			$this->DiscountProfile= $value;
		}
	}

	/**
	 * @return void
	 * @param DiscountProfileType $value
	 **/
	function addDiscountProfile($value)
	{
		$this->DiscountProfile[] = $value;
	}

}
?>
