<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CategoryGroupType.php';

/**
  *   Type defining the <b>SupportedSellerProfile</b> container, which contains
  * summary information related to specific Business Policies payment, return policy, and shipping 
  * profiles. The profile type is found in the <b>ProfileType</b> field.
  * 
 **/

class SupportedSellerProfileType extends EbatNs_ComplexType
{
	/**
	* @var long
	**/
	protected $ProfileID;

	/**
	* @var string
	**/
	protected $ProfileType;

	/**
	* @var string
	**/
	protected $ProfileName;

	/**
	* @var string
	**/
	protected $ShortSummary;

	/**
	* @var CategoryGroupType
	**/
	protected $CategoryGroup;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SupportedSellerProfileType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ProfileID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProfileType' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProfileName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShortSummary' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryGroup' =>
				array(
					'required' => false,
					'type' => 'CategoryGroupType',
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
	 * @return long
	 **/
	function getProfileID()
	{
		return $this->ProfileID;
	}

	/**
	 * @return void
	 **/
	function setProfileID($value)
	{
		$this->ProfileID = $value;
	}

	/**
	 * @return string
	 **/
	function getProfileType()
	{
		return $this->ProfileType;
	}

	/**
	 * @return void
	 **/
	function setProfileType($value)
	{
		$this->ProfileType = $value;
	}

	/**
	 * @return string
	 **/
	function getProfileName()
	{
		return $this->ProfileName;
	}

	/**
	 * @return void
	 **/
	function setProfileName($value)
	{
		$this->ProfileName = $value;
	}

	/**
	 * @return string
	 **/
	function getShortSummary()
	{
		return $this->ShortSummary;
	}

	/**
	 * @return void
	 **/
	function setShortSummary($value)
	{
		$this->ShortSummary = $value;
	}

	/**
	 * @return CategoryGroupType
	 **/
	function getCategoryGroup()
	{
		return $this->CategoryGroup;
	}

	/**
	 * @return void
	 **/
	function setCategoryGroup($value)
	{
		$this->CategoryGroup = $value;
	}

}
?>
