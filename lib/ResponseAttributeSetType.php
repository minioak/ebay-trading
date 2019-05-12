<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ProductFamilyType.php';
require_once 'ProductFinderConstraintType.php';

/**
  * This type is deprecated.
  * 
 **/

class ResponseAttributeSetType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $ApproximatePages;

	/**
	* @var int
	**/
	protected $AttributeSetID;

	/**
	* @var boolean
	**/
	protected $HasMore;

	/**
	* @var ProductFamilyType
	**/
	protected $ProductFamilies;

	/**
	* @var ProductFinderConstraintType
	**/
	protected $ProductFinderConstraints;

	/**
	* @var boolean
	**/
	protected $TooManyMatchesFound;

	/**
	* @var int
	**/
	protected $TotalProducts;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ResponseAttributeSetType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ApproximatePages' =>
				array(
					'required' => false,
					'type' => 'int',
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
				'HasMore' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductFamilies' =>
				array(
					'required' => false,
					'type' => 'ProductFamilyType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ProductFinderConstraints' =>
				array(
					'required' => false,
					'type' => 'ProductFinderConstraintType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'TooManyMatchesFound' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalProducts' =>
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
	 * @return int
	 **/
	function getApproximatePages()
	{
		return $this->ApproximatePages;
	}

	/**
	 * @return void
	 **/
	function setApproximatePages($value)
	{
		$this->ApproximatePages = $value;
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
	 * @return boolean
	 **/
	function getHasMore()
	{
		return $this->HasMore;
	}

	/**
	 * @return void
	 **/
	function setHasMore($value)
	{
		$this->HasMore = $value;
	}

	/**
	 * @return ProductFamilyType
	 * @param integer $index 
	 **/
	function getProductFamilies($index = null)
	{
		if ($index !== null)
		{
			return $this->ProductFamilies[$index];
		}
		else
		{
			return $this->ProductFamilies;
		}
	}

	/**
	 * @return void
	 * @param ProductFamilyType $value
	 * @param integer $index 
	 **/
	function setProductFamilies($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ProductFamilies[$index] = $value;
		}
		else
		{
			$this->ProductFamilies= $value;
		}
	}

	/**
	 * @return void
	 * @param ProductFamilyType $value
	 **/
	function addProductFamilies($value)
	{
		$this->ProductFamilies[] = $value;
	}

	/**
	 * @return ProductFinderConstraintType
	 * @param integer $index 
	 **/
	function getProductFinderConstraints($index = null)
	{
		if ($index !== null)
		{
			return $this->ProductFinderConstraints[$index];
		}
		else
		{
			return $this->ProductFinderConstraints;
		}
	}

	/**
	 * @return void
	 * @param ProductFinderConstraintType $value
	 * @param integer $index 
	 **/
	function setProductFinderConstraints($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ProductFinderConstraints[$index] = $value;
		}
		else
		{
			$this->ProductFinderConstraints= $value;
		}
	}

	/**
	 * @return void
	 * @param ProductFinderConstraintType $value
	 **/
	function addProductFinderConstraints($value)
	{
		$this->ProductFinderConstraints[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getTooManyMatchesFound()
	{
		return $this->TooManyMatchesFound;
	}

	/**
	 * @return void
	 **/
	function setTooManyMatchesFound($value)
	{
		$this->TooManyMatchesFound = $value;
	}

	/**
	 * @return int
	 **/
	function getTotalProducts()
	{
		return $this->TotalProducts;
	}

	/**
	 * @return void
	 **/
	function setTotalProducts($value)
	{
		$this->TotalProducts = $value;
	}

}
?>
