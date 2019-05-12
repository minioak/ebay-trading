<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>SellerShippingProfile</b> container, which is used in an 
  * Add/Revise/Relist Trading API call to reference a Business Policies shipping policy profile.
  * Business Policies shipping profiles contain detailed information on domestic and
  * international shipping, including shipping service options, handling time, package
  * handling costs, excluded ship-to locations, and shipping insurance information.
  * <br/><br/>
  * Business Policies shipping profiles are also returned in 
  * <b>GetItem</b>, <b>GetMyeBaySelling</b>, and other 
  * Trading calls that retrieve Item data.
  * 
 **/

class SellerShippingProfileType extends EbatNs_ComplexType
{
	/**
	* @var long
	**/
	protected $ShippingProfileID;

	/**
	* @var string
	**/
	protected $ShippingProfileName;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellerShippingProfileType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ShippingProfileID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShippingProfileName' =>
				array(
					'required' => false,
					'type' => 'string',
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
	 * @return long
	 **/
	function getShippingProfileID()
	{
		return $this->ShippingProfileID;
	}

	/**
	 * @return void
	 **/
	function setShippingProfileID($value)
	{
		$this->ShippingProfileID = $value;
	}

	/**
	 * @return string
	 **/
	function getShippingProfileName()
	{
		return $this->ShippingProfileName;
	}

	/**
	 * @return void
	 **/
	function setShippingProfileName($value)
	{
		$this->ShippingProfileName = $value;
	}

}
?>
