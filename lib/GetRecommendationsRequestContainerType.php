<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ListingFlowCodeType.php';
require_once 'ItemType.php';
require_once 'RecommendationEngineCodeType.php';

/**
  * Specifies the data for a single item and configures the recommendation engines to use
  * when processing the item with GetItemRecommendations.
  * 
 **/

class GetRecommendationsRequestContainerType extends EbatNs_ComplexType
{
	/**
	* @var ListingFlowCodeType
	**/
	protected $ListingFlow;

	/**
	* @var ItemType
	**/
	protected $Item;

	/**
	* @var RecommendationEngineCodeType
	**/
	protected $RecommendationEngine;

	/**
	* @var string
	**/
	protected $Query;

	/**
	* @var string
	**/
	protected $CorrelationID;

	/**
	* @var string
	**/
	protected $DeletedField;

	/**
	* @var boolean
	**/
	protected $ExcludeRelationships;

	/**
	* @var boolean
	**/
	protected $IncludeConfidence;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetRecommendationsRequestContainerType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ListingFlow' =>
				array(
					'required' => false,
					'type' => 'ListingFlowCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Item' =>
				array(
					'required' => false,
					'type' => 'ItemType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RecommendationEngine' =>
				array(
					'required' => false,
					'type' => 'RecommendationEngineCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'Query' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CorrelationID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DeletedField' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ExcludeRelationships' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeConfidence' =>
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
	 * @return ListingFlowCodeType
	 **/
	function getListingFlow()
	{
		return $this->ListingFlow;
	}

	/**
	 * @return void
	 **/
	function setListingFlow($value)
	{
		$this->ListingFlow = $value;
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
	 * @return RecommendationEngineCodeType
	 * @param integer $index 
	 **/
	function getRecommendationEngine($index = null)
	{
		if ($index !== null)
		{
			return $this->RecommendationEngine[$index];
		}
		else
		{
			return $this->RecommendationEngine;
		}
	}

	/**
	 * @return void
	 * @param RecommendationEngineCodeType $value
	 * @param integer $index 
	 **/
	function setRecommendationEngine($value, $index = null)
	{
		if ($index !== null)
		{
			$this->RecommendationEngine[$index] = $value;
		}
		else
		{
			$this->RecommendationEngine= $value;
		}
	}

	/**
	 * @return void
	 * @param RecommendationEngineCodeType $value
	 **/
	function addRecommendationEngine($value)
	{
		$this->RecommendationEngine[] = $value;
	}

	/**
	 * @return string
	 **/
	function getQuery()
	{
		return $this->Query;
	}

	/**
	 * @return void
	 **/
	function setQuery($value)
	{
		$this->Query = $value;
	}

	/**
	 * @return string
	 **/
	function getCorrelationID()
	{
		return $this->CorrelationID;
	}

	/**
	 * @return void
	 **/
	function setCorrelationID($value)
	{
		$this->CorrelationID = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getDeletedField($index = null)
	{
		if ($index !== null)
		{
			return $this->DeletedField[$index];
		}
		else
		{
			return $this->DeletedField;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setDeletedField($value, $index = null)
	{
		if ($index !== null)
		{
			$this->DeletedField[$index] = $value;
		}
		else
		{
			$this->DeletedField= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addDeletedField($value)
	{
		$this->DeletedField[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getExcludeRelationships()
	{
		return $this->ExcludeRelationships;
	}

	/**
	 * @return void
	 **/
	function setExcludeRelationships($value)
	{
		$this->ExcludeRelationships = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeConfidence()
	{
		return $this->IncludeConfidence;
	}

	/**
	 * @return void
	 **/
	function setIncludeConfidence($value)
	{
		$this->IncludeConfidence = $value;
	}

}
?>
