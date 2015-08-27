<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ExtendedProductFinderIDType.php';
require_once 'CharacteristicsSetType.php';

/**
  *         Container for data on one listing category. Many <b>CategoryType</b> fields are only returned in the <b>GetCategories</b> response. Add/Revise/Relist calls only use the <b>CategoryID</b> field to specify which eBay category in which to list the item.
  * 
 **/

class CategoryType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $BestOfferEnabled;

	/**
	* @var boolean
	**/
	protected $AutoPayEnabled;

	/**
	* @var boolean
	**/
	protected $B2BVATEnabled;

	/**
	* @var boolean
	**/
	protected $CatalogEnabled;

	/**
	* @var string
	**/
	protected $CategoryID;

	/**
	* @var int
	**/
	protected $CategoryLevel;

	/**
	* @var string
	**/
	protected $CategoryName;

	/**
	* @var string
	**/
	protected $CategoryParentID;

	/**
	* @var string
	**/
	protected $CategoryParentName;

	/**
	* @var boolean
	**/
	protected $ProductSearchPageAvailable;

	/**
	* @var ExtendedProductFinderIDType
	**/
	protected $ProductFinderIDs;

	/**
	* @var CharacteristicsSetType
	**/
	protected $CharacteristicsSets;

	/**
	* @var boolean
	**/
	protected $Expired;

	/**
	* @var boolean
	**/
	protected $IntlAutosFixedCat;

	/**
	* @var boolean
	**/
	protected $LeafCategory;

	/**
	* @var boolean
	**/
	protected $Virtual;

	/**
	* @var int
	**/
	protected $NumOfItems;

	/**
	* @var boolean
	**/
	protected $SellerGuaranteeEligible;

	/**
	* @var boolean
	**/
	protected $ORPA;

	/**
	* @var boolean
	**/
	protected $ORRA;

	/**
	* @var boolean
	**/
	protected $LSD;

	/**
	* @var string
	**/
	protected $Keywords;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CategoryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BestOfferEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AutoPayEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'B2BVATEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CatalogEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryLevel' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryParentID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'CategoryParentName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ProductSearchPageAvailable' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductFinderIDs' =>
				array(
					'required' => false,
					'type' => 'ExtendedProductFinderIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'CharacteristicsSets' =>
				array(
					'required' => false,
					'type' => 'CharacteristicsSetType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'Expired' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IntlAutosFixedCat' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LeafCategory' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Virtual' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NumOfItems' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerGuaranteeEligible' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ORPA' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ORRA' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LSD' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Keywords' =>
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
	 * @return boolean
	 **/
	function getBestOfferEnabled()
	{
		return $this->BestOfferEnabled;
	}

	/**
	 * @return void
	 **/
	function setBestOfferEnabled($value)
	{
		$this->BestOfferEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getAutoPayEnabled()
	{
		return $this->AutoPayEnabled;
	}

	/**
	 * @return void
	 **/
	function setAutoPayEnabled($value)
	{
		$this->AutoPayEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getB2BVATEnabled()
	{
		return $this->B2BVATEnabled;
	}

	/**
	 * @return void
	 **/
	function setB2BVATEnabled($value)
	{
		$this->B2BVATEnabled = $value;
	}

	/**
	 * @return boolean
	 **/
	function getCatalogEnabled()
	{
		return $this->CatalogEnabled;
	}

	/**
	 * @return void
	 **/
	function setCatalogEnabled($value)
	{
		$this->CatalogEnabled = $value;
	}

	/**
	 * @return string
	 **/
	function getCategoryID()
	{
		return $this->CategoryID;
	}

	/**
	 * @return void
	 **/
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}

	/**
	 * @return int
	 **/
	function getCategoryLevel()
	{
		return $this->CategoryLevel;
	}

	/**
	 * @return void
	 **/
	function setCategoryLevel($value)
	{
		$this->CategoryLevel = $value;
	}

	/**
	 * @return string
	 **/
	function getCategoryName()
	{
		return $this->CategoryName;
	}

	/**
	 * @return void
	 **/
	function setCategoryName($value)
	{
		$this->CategoryName = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getCategoryParentID($index = null)
	{
		if ($index !== null)
		{
			return $this->CategoryParentID[$index];
		}
		else
		{
			return $this->CategoryParentID;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setCategoryParentID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->CategoryParentID[$index] = $value;
		}
		else
		{
			$this->CategoryParentID= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addCategoryParentID($value)
	{
		$this->CategoryParentID[] = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getCategoryParentName($index = null)
	{
		if ($index !== null)
		{
			return $this->CategoryParentName[$index];
		}
		else
		{
			return $this->CategoryParentName;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setCategoryParentName($value, $index = null)
	{
		if ($index !== null)
		{
			$this->CategoryParentName[$index] = $value;
		}
		else
		{
			$this->CategoryParentName= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addCategoryParentName($value)
	{
		$this->CategoryParentName[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getProductSearchPageAvailable()
	{
		return $this->ProductSearchPageAvailable;
	}

	/**
	 * @return void
	 **/
	function setProductSearchPageAvailable($value)
	{
		$this->ProductSearchPageAvailable = $value;
	}

	/**
	 * @return ExtendedProductFinderIDType
	 * @param integer $index 
	 **/
	function getProductFinderIDs($index = null)
	{
		if ($index !== null)
		{
			return $this->ProductFinderIDs[$index];
		}
		else
		{
			return $this->ProductFinderIDs;
		}
	}

	/**
	 * @return void
	 * @param ExtendedProductFinderIDType $value
	 * @param integer $index 
	 **/
	function setProductFinderIDs($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ProductFinderIDs[$index] = $value;
		}
		else
		{
			$this->ProductFinderIDs= $value;
		}
	}

	/**
	 * @return void
	 * @param ExtendedProductFinderIDType $value
	 **/
	function addProductFinderIDs($value)
	{
		$this->ProductFinderIDs[] = $value;
	}

	/**
	 * @return CharacteristicsSetType
	 * @param integer $index 
	 **/
	function getCharacteristicsSets($index = null)
	{
		if ($index !== null)
		{
			return $this->CharacteristicsSets[$index];
		}
		else
		{
			return $this->CharacteristicsSets;
		}
	}

	/**
	 * @return void
	 * @param CharacteristicsSetType $value
	 * @param integer $index 
	 **/
	function setCharacteristicsSets($value, $index = null)
	{
		if ($index !== null)
		{
			$this->CharacteristicsSets[$index] = $value;
		}
		else
		{
			$this->CharacteristicsSets= $value;
		}
	}

	/**
	 * @return void
	 * @param CharacteristicsSetType $value
	 **/
	function addCharacteristicsSets($value)
	{
		$this->CharacteristicsSets[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getExpired()
	{
		return $this->Expired;
	}

	/**
	 * @return void
	 **/
	function setExpired($value)
	{
		$this->Expired = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIntlAutosFixedCat()
	{
		return $this->IntlAutosFixedCat;
	}

	/**
	 * @return void
	 **/
	function setIntlAutosFixedCat($value)
	{
		$this->IntlAutosFixedCat = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLeafCategory()
	{
		return $this->LeafCategory;
	}

	/**
	 * @return void
	 **/
	function setLeafCategory($value)
	{
		$this->LeafCategory = $value;
	}

	/**
	 * @return boolean
	 **/
	function getVirtual()
	{
		return $this->Virtual;
	}

	/**
	 * @return void
	 **/
	function setVirtual($value)
	{
		$this->Virtual = $value;
	}

	/**
	 * @return int
	 **/
	function getNumOfItems()
	{
		return $this->NumOfItems;
	}

	/**
	 * @return void
	 **/
	function setNumOfItems($value)
	{
		$this->NumOfItems = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSellerGuaranteeEligible()
	{
		return $this->SellerGuaranteeEligible;
	}

	/**
	 * @return void
	 **/
	function setSellerGuaranteeEligible($value)
	{
		$this->SellerGuaranteeEligible = $value;
	}

	/**
	 * @return boolean
	 **/
	function getORPA()
	{
		return $this->ORPA;
	}

	/**
	 * @return void
	 **/
	function setORPA($value)
	{
		$this->ORPA = $value;
	}

	/**
	 * @return boolean
	 **/
	function getORRA()
	{
		return $this->ORRA;
	}

	/**
	 * @return void
	 **/
	function setORRA($value)
	{
		$this->ORRA = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLSD()
	{
		return $this->LSD;
	}

	/**
	 * @return void
	 **/
	function setLSD($value)
	{
		$this->LSD = $value;
	}

	/**
	 * @return string
	 **/
	function getKeywords()
	{
		return $this->Keywords;
	}

	/**
	 * @return void
	 **/
	function setKeywords($value)
	{
		$this->Keywords = $value;
	}

}
?>
