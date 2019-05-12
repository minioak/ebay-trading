<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SearchAttributesType.php';
require_once 'PaginationType.php';
require_once 'CharacteristicSetIDsType.php';
require_once 'ExternalProductIDType.php';

/**
  * This type is deprecated.
  * 
 **/

class ProductSearchType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $ProductSearchID;

	/**
	* @var int
	**/
	protected $AttributeSetID;

	/**
	* @var int
	**/
	protected $ProductFinderID;

	/**
	* @var string
	**/
	protected $ProductID;

	/**
	* @var int
	**/
	protected $SortAttributeID;

	/**
	* @var int
	**/
	protected $MaxChildrenPerFamily;

	/**
	* @var SearchAttributesType
	**/
	protected $SearchAttributes;

	/**
	* @var PaginationType
	**/
	protected $Pagination;

	/**
	* @var boolean
	**/
	protected $AvailableItemsOnly;

	/**
	* @var string
	**/
	protected $QueryKeywords;

	/**
	* @var CharacteristicSetIDsType
	**/
	protected $CharacteristicSetIDs;

	/**
	* @var string
	**/
	protected $ProductReferenceID;

	/**
	* @var ExternalProductIDType
	**/
	protected $ExternalProductID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProductSearchType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ProductSearchID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AttributeSetID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductFinderID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SortAttributeID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaxChildrenPerFamily' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SearchAttributes' =>
				array(
					'required' => false,
					'type' => 'SearchAttributesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'Pagination' =>
				array(
					'required' => false,
					'type' => 'PaginationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AvailableItemsOnly' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QueryKeywords' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CharacteristicSetIDs' =>
				array(
					'required' => false,
					'type' => 'CharacteristicSetIDsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductReferenceID' =>
				array(
					'required' => false,
					'type' => 'string',
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
	 * @return string
	 **/
	function getProductSearchID()
	{
		return $this->ProductSearchID;
	}

	/**
	 * @return void
	 **/
	function setProductSearchID($value)
	{
		$this->ProductSearchID = $value;
	}

	/**
	 * @return int
	 **/
	function getAttributeSetID()
	{
		return $this->AttributeSetID;
	}

	/**
	 * @return void
	 **/
	function setAttributeSetID($value)
	{
		$this->AttributeSetID = $value;
	}

	/**
	 * @return int
	 **/
	function getProductFinderID()
	{
		return $this->ProductFinderID;
	}

	/**
	 * @return void
	 **/
	function setProductFinderID($value)
	{
		$this->ProductFinderID = $value;
	}

	/**
	 * @return string
	 **/
	function getProductID()
	{
		return $this->ProductID;
	}

	/**
	 * @return void
	 **/
	function setProductID($value)
	{
		$this->ProductID = $value;
	}

	/**
	 * @return int
	 **/
	function getSortAttributeID()
	{
		return $this->SortAttributeID;
	}

	/**
	 * @return void
	 **/
	function setSortAttributeID($value)
	{
		$this->SortAttributeID = $value;
	}

	/**
	 * @return int
	 **/
	function getMaxChildrenPerFamily()
	{
		return $this->MaxChildrenPerFamily;
	}

	/**
	 * @return void
	 **/
	function setMaxChildrenPerFamily($value)
	{
		$this->MaxChildrenPerFamily = $value;
	}

	/**
	 * @return SearchAttributesType
	 * @param integer $index 
	 **/
	function getSearchAttributes($index = null)
	{
		if ($index !== null)
		{
			return $this->SearchAttributes[$index];
		}
		else
		{
			return $this->SearchAttributes;
		}
	}

	/**
	 * @return void
	 * @param SearchAttributesType $value
	 * @param integer $index 
	 **/
	function setSearchAttributes($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SearchAttributes[$index] = $value;
		}
		else
		{
			$this->SearchAttributes= $value;
		}
	}

	/**
	 * @return void
	 * @param SearchAttributesType $value
	 **/
	function addSearchAttributes($value)
	{
		$this->SearchAttributes[] = $value;
	}

	/**
	 * @return PaginationType
	 **/
	function getPagination()
	{
		return $this->Pagination;
	}

	/**
	 * @return void
	 **/
	function setPagination($value)
	{
		$this->Pagination = $value;
	}

	/**
	 * @return boolean
	 **/
	function getAvailableItemsOnly()
	{
		return $this->AvailableItemsOnly;
	}

	/**
	 * @return void
	 **/
	function setAvailableItemsOnly($value)
	{
		$this->AvailableItemsOnly = $value;
	}

	/**
	 * @return string
	 **/
	function getQueryKeywords()
	{
		return $this->QueryKeywords;
	}

	/**
	 * @return void
	 **/
	function setQueryKeywords($value)
	{
		$this->QueryKeywords = $value;
	}

	/**
	 * @return CharacteristicSetIDsType
	 **/
	function getCharacteristicSetIDs()
	{
		return $this->CharacteristicSetIDs;
	}

	/**
	 * @return void
	 **/
	function setCharacteristicSetIDs($value)
	{
		$this->CharacteristicSetIDs = $value;
	}

	/**
	 * @return string
	 **/
	function getProductReferenceID()
	{
		return $this->ProductReferenceID;
	}

	/**
	 * @return void
	 **/
	function setProductReferenceID($value)
	{
		$this->ProductReferenceID = $value;
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
