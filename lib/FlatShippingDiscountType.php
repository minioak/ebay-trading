<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'DiscountNameCodeType.php';
require_once 'DiscountProfileType.php';

/**
  * Details of an individual discount profile defined by the
  * user for flat rate shipping.
  * 
 **/

class FlatShippingDiscountType extends EbatNs_ComplexType
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
		parent::__construct('FlatShippingDiscountType', 'urn:ebay:apis:eBLBaseComponents');
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
