<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
  * Retrieves data pertaining to a single eBay user. Callers can use this call to
  * return their own user data or the data of another eBay user. Unless the caller
  * passes in an ItemID that identifies a current or past common order, not all
  * data (like email addresses) will be returned in the User object.
  * 
 **/

class GetUserRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var string
	**/
	protected $UserID;

	/**
	* @var boolean
	**/
	protected $IncludeExpressRequirements;

	/**
	* @var boolean
	**/
	protected $IncludeFeatureEligibility;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetUserRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
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
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return ItemIDType
	 **/
	function getItemID()
	{
		return $this->ItemID;
	}

	/**
	 * @return void
	 **/
	function setItemID($value)
	{
		$this->ItemID = $value;
	}

	/**
	 * @return string
	 **/
	function getUserID()
	{
		return $this->UserID;
	}

	/**
	 * @return void
	 **/
	function setUserID($value)
	{
		$this->UserID = $value;
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
	 * @return boolean
	 **/
	function getIncludeFeatureEligibility()
	{
		return $this->IncludeFeatureEligibility;
	}

	/**
	 * @return void
	 **/
	function setIncludeFeatureEligibility($value)
	{
		$this->IncludeFeatureEligibility = $value;
	}

}
?>
