<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SellerShippingProfileType.php';
require_once 'SellerReturnProfileType.php';
require_once 'SellerPaymentProfileType.php';

/**
  * Type defining the <b>SellerProfiles</b> container, which consists of references
  * to a seller's payment, shipping, and/or return policy profiles.
  * 
 **/

class SellerProfilesType extends EbatNs_ComplexType
{
	/**
	* @var SellerShippingProfileType
	**/
	protected $SellerShippingProfile;

	/**
	* @var SellerReturnProfileType
	**/
	protected $SellerReturnProfile;

	/**
	* @var SellerPaymentProfileType
	**/
	protected $SellerPaymentProfile;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellerProfilesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SellerShippingProfile' =>
				array(
					'required' => false,
					'type' => 'SellerShippingProfileType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerReturnProfile' =>
				array(
					'required' => false,
					'type' => 'SellerReturnProfileType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerPaymentProfile' =>
				array(
					'required' => false,
					'type' => 'SellerPaymentProfileType',
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
	 * @return SellerShippingProfileType
	 **/
	function getSellerShippingProfile()
	{
		return $this->SellerShippingProfile;
	}

	/**
	 * @return void
	 **/
	function setSellerShippingProfile($value)
	{
		$this->SellerShippingProfile = $value;
	}

	/**
	 * @return SellerReturnProfileType
	 **/
	function getSellerReturnProfile()
	{
		return $this->SellerReturnProfile;
	}

	/**
	 * @return void
	 **/
	function setSellerReturnProfile($value)
	{
		$this->SellerReturnProfile = $value;
	}

	/**
	 * @return SellerPaymentProfileType
	 **/
	function getSellerPaymentProfile()
	{
		return $this->SellerPaymentProfile;
	}

	/**
	 * @return void
	 **/
	function setSellerPaymentProfile($value)
	{
		$this->SellerPaymentProfile = $value;
	}

}
?>
