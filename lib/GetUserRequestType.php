<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Retrieves data pertaining to a single eBay user. Callers can use this call 
 * toreturn their own user data or the data of another eBay user. Unless the 
 * callerpasses in an ItemID that identifies a current or past common order, not 
 * alldata (like email addresses) will be returned in the User object. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetUserRequestType.html
 *
 */
class GetUserRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $UserID;
	/**
	 * @var boolean
	 */
	protected $IncludeExpressRequirements;
	/**
	 * @var boolean
	 */
	protected $IncludeFeatureEligibility;

	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return string
	 */
	function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setUserID($value)
	{
		$this->UserID = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeExpressRequirements()
	{
		return $this->IncludeExpressRequirements;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeExpressRequirements($value)
	{
		$this->IncludeExpressRequirements = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeFeatureEligibility()
	{
		return $this->IncludeFeatureEligibility;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeFeatureEligibility($value)
	{
		$this->IncludeFeatureEligibility = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetUserRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UserID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
					'IncludeFeatureEligibility' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
