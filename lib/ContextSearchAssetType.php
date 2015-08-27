<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CategoryType.php';

/**
  * Type defining the <b>ContextSearchAsset</b> container that is returned in the <b>GetContextualKeywords</b> response for each keyword that is found. 
  * 
 **/

class ContextSearchAssetType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Keyword;

	/**
	* @var CategoryType
	**/
	protected $Category;

	/**
	* @var int
	**/
	protected $Ranking;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ContextSearchAssetType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Keyword' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Category' =>
				array(
					'required' => false,
					'type' => 'CategoryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Ranking' =>
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
	 * @return string
	 **/
	function getKeyword()
	{
		return $this->Keyword;
	}

	/**
	 * @return void
	 **/
	function setKeyword($value)
	{
		$this->Keyword = $value;
	}

	/**
	 * @return CategoryType
	 **/
	function getCategory()
	{
		return $this->Category;
	}

	/**
	 * @return void
	 **/
	function setCategory($value)
	{
		$this->Category = $value;
	}

	/**
	 * @return int
	 **/
	function getRanking()
	{
		return $this->Ranking;
	}

	/**
	 * @return void
	 **/
	function setRanking($value)
	{
		$this->Ranking = $value;
	}

}
?>
