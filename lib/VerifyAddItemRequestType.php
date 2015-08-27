<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemType.php';
require_once 'ExternalProductIDType.php';

/**
  * Enables a seller to specify the definition of a new item and submit the definition to eBay without creating a listing.&nbsp;<b>Also for Half.com</b>.
  * <br><br>
  * Sellers who engage in cross-border trade on sites that require a recoupment agreement, must agree to the
  * recoupment terms before adding or verifying items. This agreement allows eBay to reimburse
  * a buyer during a dispute and then recoup the cost from the seller. The US site is a recoupment site, and
  *         the agreement is located <a href="https://scgi.ebay.com/ws/eBayISAPI.dll?CBTRecoupAgreement">here</a>.
  *         The list of the sites where a user has agreed to the recoupment terms is returned by the GetUser response.
  * 
 **/

class VerifyAddItemRequestType extends AbstractRequestType
{
	/**
	* @var ItemType
	**/
	protected $Item;

	/**
	* @var boolean
	**/
	protected $IncludeExpressRequirements;

	/**
	* @var ExternalProductIDType
	**/
	protected $ExternalProductID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('VerifyAddItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Item' =>
				array(
					'required' => false,
					'type' => 'ItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeExpressRequirements' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalProductID' =>
				array(
					'required' => false,
					'type' => 'ExternalProductIDType',
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
	 * @return ItemType
	 **/
	function getItem()
	{
		return $this->Item;
	}

	/**
	 * @return void
	 **/
	function setItem($value)
	{
		$this->Item = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeExpressRequirements()
	{
		return $this->IncludeExpressRequirements;
	}

	/**
	 * @return void
	 **/
	function setIncludeExpressRequirements($value)
	{
		$this->IncludeExpressRequirements = $value;
	}

	/**
	 * @return ExternalProductIDType
	 **/
	function getExternalProductID()
	{
		return $this->ExternalProductID;
	}

	/**
	 * @return void
	 **/
	function setExternalProductID($value)
	{
		$this->ExternalProductID = $value;
	}

}
?>
