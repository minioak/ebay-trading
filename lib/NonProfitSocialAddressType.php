<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SocialAddressTypeCodeType.php';

/**
  * Type defining the <b>NonProfitSocialAddress</b> container, which identifies the
  * nonprofit organization's social networking site account ID. A <b>NonProfitSocialAddress</b>
  * container will exist for each social networking site that the charity organization is
  * associated with.
  * 
 **/

class NonProfitSocialAddressType extends EbatNs_ComplexType
{
	/**
	* @var SocialAddressTypeCodeType
	**/
	protected $SocialAddressType;

	/**
	* @var string
	**/
	protected $SocialAddressId;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('NonProfitSocialAddressType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SocialAddressType' =>
				array(
					'required' => false,
					'type' => 'SocialAddressTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SocialAddressId' =>
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
	 * @return SocialAddressTypeCodeType
	 **/
	function getSocialAddressType()
	{
		return $this->SocialAddressType;
	}

	/**
	 * @return void
	 **/
	function setSocialAddressType($value)
	{
		$this->SocialAddressType = $value;
	}

	/**
	 * @return string
	 **/
	function getSocialAddressId()
	{
		return $this->SocialAddressId;
	}

	/**
	 * @return void
	 **/
	function setSocialAddressId($value)
	{
		$this->SocialAddressId = $value;
	}

}
?>
