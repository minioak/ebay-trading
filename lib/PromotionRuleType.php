<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ItemIDType.php';
require_once 'PromotionSchemeCodeType.php';
require_once 'PromotionMethodCodeType.php';

/**
  * This type is deprecated.
  * 
 **/

class PromotionRuleType extends EbatNs_ComplexType
{
	/**
	* @var long
	**/
	protected $PromotedStoreCategoryID;

	/**
	* @var string
	**/
	protected $PromotedeBayCategoryID;

	/**
	* @var string
	**/
	protected $PromotedKeywords;

	/**
	* @var ItemIDType
	**/
	protected $ReferringItemID;

	/**
	* @var long
	**/
	protected $ReferringStoreCategoryID;

	/**
	* @var string
	**/
	protected $ReferringeBayCategoryID;

	/**
	* @var string
	**/
	protected $ReferringKeywords;

	/**
	* @var PromotionSchemeCodeType
	**/
	protected $PromotionScheme;

	/**
	* @var PromotionMethodCodeType
	**/
	protected $PromotionMethod;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PromotionRuleType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PromotedStoreCategoryID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotedeBayCategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotedKeywords' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReferringItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReferringStoreCategoryID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReferringeBayCategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReferringKeywords' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionScheme' =>
				array(
					'required' => false,
					'type' => 'PromotionSchemeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PromotionMethod' =>
				array(
					'required' => false,
					'type' => 'PromotionMethodCodeType',
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
	function getPromotedStoreCategoryID()
	{
		return $this->PromotedStoreCategoryID;
	}

	/**
	 * @return void
	 **/
	function setPromotedStoreCategoryID($value)
	{
		$this->PromotedStoreCategoryID = $value;
	}

	/**
	 * @return string
	 **/
	function getPromotedeBayCategoryID()
	{
		return $this->PromotedeBayCategoryID;
	}

	/**
	 * @return void
	 **/
	function setPromotedeBayCategoryID($value)
	{
		$this->PromotedeBayCategoryID = $value;
	}

	/**
	 * @return string
	 **/
	function getPromotedKeywords()
	{
		return $this->PromotedKeywords;
	}

	/**
	 * @return void
	 **/
	function setPromotedKeywords($value)
	{
		$this->PromotedKeywords = $value;
	}

	/**
	 * @return ItemIDType
	 **/
	function getReferringItemID()
	{
		return $this->ReferringItemID;
	}

	/**
	 * @return void
	 **/
	function setReferringItemID($value)
	{
		$this->ReferringItemID = $value;
	}

	/**
	 * @return long
	 **/
	function getReferringStoreCategoryID()
	{
		return $this->ReferringStoreCategoryID;
	}

	/**
	 * @return void
	 **/
	function setReferringStoreCategoryID($value)
	{
		$this->ReferringStoreCategoryID = $value;
	}

	/**
	 * @return string
	 **/
	function getReferringeBayCategoryID()
	{
		return $this->ReferringeBayCategoryID;
	}

	/**
	 * @return void
	 **/
	function setReferringeBayCategoryID($value)
	{
		$this->ReferringeBayCategoryID = $value;
	}

	/**
	 * @return string
	 **/
	function getReferringKeywords()
	{
		return $this->ReferringKeywords;
	}

	/**
	 * @return void
	 **/
	function setReferringKeywords($value)
	{
		$this->ReferringKeywords = $value;
	}

	/**
	 * @return PromotionSchemeCodeType
	 **/
	function getPromotionScheme()
	{
		return $this->PromotionScheme;
	}

	/**
	 * @return void
	 **/
	function setPromotionScheme($value)
	{
		$this->PromotionScheme = $value;
	}

	/**
	 * @return PromotionMethodCodeType
	 **/
	function getPromotionMethod()
	{
		return $this->PromotionMethod;
	}

	/**
	 * @return void
	 **/
	function setPromotionMethod($value)
	{
		$this->PromotionMethod = $value;
	}

}
?>
