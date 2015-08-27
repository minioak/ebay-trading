<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SiteCodeType.php';

/**
  * Indicates the sites on which a seller is eligible to offer IMCC as a payment method.
  * 
 **/

class IntegratedMerchantCreditCardInfoType extends EbatNs_ComplexType
{
	/**
	* @var SiteCodeType
	**/
	protected $SupportedSite;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('IntegratedMerchantCreditCardInfoType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SupportedSite' =>
				array(
					'required' => false,
					'type' => 'SiteCodeType',
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
	 * @return SiteCodeType
	 * @param integer $index 
	 **/
	function getSupportedSite($index = null)
	{
		if ($index !== null)
		{
			return $this->SupportedSite[$index];
		}
		else
		{
			return $this->SupportedSite;
		}
	}

	/**
	 * @return void
	 * @param SiteCodeType $value
	 * @param integer $index 
	 **/
	function setSupportedSite($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SupportedSite[$index] = $value;
		}
		else
		{
			$this->SupportedSite= $value;
		}
	}

	/**
	 * @return void
	 * @param SiteCodeType $value
	 **/
	function addSupportedSite($value)
	{
		$this->SupportedSite[] = $value;
	}

}
?>
