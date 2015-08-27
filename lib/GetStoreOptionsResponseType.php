<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'StoreThemeArrayType.php';
require_once 'StoreLogoArrayType.php';
require_once 'StoreSubscriptionArrayType.php';

/**
  * Contains the current list of options for Store configurations.
  * 
 **/

class GetStoreOptionsResponseType extends AbstractResponseType
{
	/**
	* @var StoreThemeArrayType
	**/
	protected $BasicThemeArray;

	/**
	* @var StoreThemeArrayType
	**/
	protected $AdvancedThemeArray;

	/**
	* @var StoreLogoArrayType
	**/
	protected $LogoArray;

	/**
	* @var StoreSubscriptionArrayType
	**/
	protected $SubscriptionArray;

	/**
	* @var int
	**/
	protected $MaxCategories;

	/**
	* @var int
	**/
	protected $MaxCategoryLevels;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetStoreOptionsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BasicThemeArray' =>
				array(
					'required' => false,
					'type' => 'StoreThemeArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AdvancedThemeArray' =>
				array(
					'required' => false,
					'type' => 'StoreThemeArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LogoArray' =>
				array(
					'required' => false,
					'type' => 'StoreLogoArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SubscriptionArray' =>
				array(
					'required' => false,
					'type' => 'StoreSubscriptionArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxCategories' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxCategoryLevels' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return StoreThemeArrayType
	 **/
	function getBasicThemeArray()
	{
		return $this->BasicThemeArray;
	}

	/**
	 * @return void
	 **/
	function setBasicThemeArray($value)
	{
		$this->BasicThemeArray = $value;
	}

	/**
	 * @return StoreThemeArrayType
	 **/
	function getAdvancedThemeArray()
	{
		return $this->AdvancedThemeArray;
	}

	/**
	 * @return void
	 **/
	function setAdvancedThemeArray($value)
	{
		$this->AdvancedThemeArray = $value;
	}

	/**
	 * @return StoreLogoArrayType
	 **/
	function getLogoArray()
	{
		return $this->LogoArray;
	}

	/**
	 * @return void
	 **/
	function setLogoArray($value)
	{
		$this->LogoArray = $value;
	}

	/**
	 * @return StoreSubscriptionArrayType
	 **/
	function getSubscriptionArray()
	{
		return $this->SubscriptionArray;
	}

	/**
	 * @return void
	 **/
	function setSubscriptionArray($value)
	{
		$this->SubscriptionArray = $value;
	}

	/**
	 * @return int
	 **/
	function getMaxCategories()
	{
		return $this->MaxCategories;
	}

	/**
	 * @return void
	 **/
	function setMaxCategories($value)
	{
		$this->MaxCategories = $value;
	}

	/**
	 * @return int
	 **/
	function getMaxCategoryLevels()
	{
		return $this->MaxCategoryLevels;
	}

	/**
	 * @return void
	 **/
	function setMaxCategoryLevels($value)
	{
		$this->MaxCategoryLevels = $value;
	}

}
?>
