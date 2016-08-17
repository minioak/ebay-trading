<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';
require_once 'SKUType.php';
require_once 'NameValueListArrayType.php';

/**
  * Retrieves item data such as title, description, price information, seller information, and so on, for the specified <b>ItemID</b>. &nbsp;<b>Also for Half.com</b>.
  * 
 **/

class GetItemRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var boolean
	**/
	protected $IncludeWatchCount;

	/**
	* @var boolean
	**/
	protected $IncludeCrossPromotion;

	/**
	* @var boolean
	**/
	protected $IncludeItemSpecifics;

	/**
	* @var boolean
	**/
	protected $IncludeTaxTable;

	/**
	* @var SKUType
	**/
	protected $SKU;

	/**
	* @var SKUType
	**/
	protected $VariationSKU;

	/**
	* @var NameValueListArrayType
	**/
	protected $VariationSpecifics;

	/**
	* @var string
	**/
	protected $TransactionID;

	/**
	* @var boolean
	**/
	protected $IncludeItemCompatibilityList;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
				'IncludeWatchCount' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeCrossPromotion' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeItemSpecifics' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeTaxTable' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SKU' =>
				array(
					'required' => false,
					'type' => 'SKUType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VariationSKU' =>
				array(
					'required' => false,
					'type' => 'SKUType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VariationSpecifics' =>
				array(
					'required' => false,
					'type' => 'NameValueListArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TransactionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeItemCompatibilityList' =>
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
	 * @return boolean
	 **/
	function getIncludeWatchCount()
	{
		return $this->IncludeWatchCount;
	}

	/**
	 * @return void
	 **/
	function setIncludeWatchCount($value)
	{
		$this->IncludeWatchCount = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeCrossPromotion()
	{
		return $this->IncludeCrossPromotion;
	}

	/**
	 * @return void
	 **/
	function setIncludeCrossPromotion($value)
	{
		$this->IncludeCrossPromotion = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeItemSpecifics()
	{
		return $this->IncludeItemSpecifics;
	}

	/**
	 * @return void
	 **/
	function setIncludeItemSpecifics($value)
	{
		$this->IncludeItemSpecifics = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeTaxTable()
	{
		return $this->IncludeTaxTable;
	}

	/**
	 * @return void
	 **/
	function setIncludeTaxTable($value)
	{
		$this->IncludeTaxTable = $value;
	}

	/**
	 * @return SKUType
	 **/
	function getSKU()
	{
		return $this->SKU;
	}

	/**
	 * @return void
	 **/
	function setSKU($value)
	{
		$this->SKU = $value;
	}

	/**
	 * @return SKUType
	 **/
	function getVariationSKU()
	{
		return $this->VariationSKU;
	}

	/**
	 * @return void
	 **/
	function setVariationSKU($value)
	{
		$this->VariationSKU = $value;
	}

	/**
	 * @return NameValueListArrayType
	 **/
	function getVariationSpecifics()
	{
		return $this->VariationSpecifics;
	}

	/**
	 * @return void
	 **/
	function setVariationSpecifics($value)
	{
		$this->VariationSpecifics = $value;
	}

	/**
	 * @return string
	 **/
	function getTransactionID()
	{
		return $this->TransactionID;
	}

	/**
	 * @return void
	 **/
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeItemCompatibilityList()
	{
		return $this->IncludeItemCompatibilityList;
	}

	/**
	 * @return void
	 **/
	function setIncludeItemCompatibilityList($value)
	{
		$this->IncludeItemCompatibilityList = $value;
	}

}
?>
