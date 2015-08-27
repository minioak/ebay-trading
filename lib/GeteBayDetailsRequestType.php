<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'DetailNameCodeType.php';

/**
  * Retrieves eBay IDs and codes (e.g., site IDs and shipping service
  * codes), enumerated data (e.g., payment methods), and other common eBay
  * meta-data. This call enables you to keep certain data up to date in your
  * applications without referring to the schema, the documentation, or the
  * eBay online help. Other data is returned for your reference, but you may
  * need to refer to the schema or the documentation for information about
  * valid values and usage.
  * <br><br>
  * In some cases, the data returned in the response will vary according to
  * the site that you use for the request.
  * <br><br>
  * If you use GeteBayDetails in preparation for listing in the US Motors Parts
  * and Accessories categories, use site ID 0 (which is the site ID of the US
  * site) when you call GeteBayDetails.
  * <br><br>
  * Sellers who engage in cross-border trade on sites that require a recoupment agreement, must agree to the
  * recoupment terms before adding items to the site. This agreement allows eBay to reimburse
  * a buyer during a dispute and then recoup the cost from the seller. Information about whether a site
  *         is a recoupment site is returned in the GeteBayDetailsResponse.RecoupmentPolicyDetails container.
  * 
 **/

class GeteBayDetailsRequestType extends AbstractRequestType
{
	/**
	* @var DetailNameCodeType
	**/
	protected $DetailName;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GeteBayDetailsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DetailName' =>
				array(
					'required' => false,
					'type' => 'DetailNameCodeType',
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
	 * @return DetailNameCodeType
	 * @param integer $index 
	 **/
	function getDetailName($index = null)
	{
		if ($index !== null)
		{
			return $this->DetailName[$index];
		}
		else
		{
			return $this->DetailName;
		}
	}

	/**
	 * @return void
	 * @param DetailNameCodeType $value
	 * @param integer $index 
	 **/
	function setDetailName($value, $index = null)
	{
		if ($index !== null)
		{
			$this->DetailName[$index] = $value;
		}
		else
		{
			$this->DetailName= $value;
		}
	}

	/**
	 * @return void
	 * @param DetailNameCodeType $value
	 **/
	function addDetailName($value)
	{
		$this->DetailName[] = $value;
	}

}
?>
