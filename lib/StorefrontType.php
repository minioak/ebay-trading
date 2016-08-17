<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type defines the <b>Storefront</b> container, which can be used by eBay Stores sellers to list an item under two primary custom categories either by category ID or category name. A custom category is a category that was created by a seller in their eBay store. This container is used by Add/Revise/Relist calls.
  * <br/><br/>
  * The <b>Storefront</b> container is also returned in <b>GetItem</b> and other Trading calls that retrieve Item data.
  * <br/><br/>
  * <span class="tablenote"><b>Note: </b>
  * This type is applicable only for eBay Store sellers.
  * </span>  <br/><br/>
  *  
 **/

class StorefrontType extends EbatNs_ComplexType
{
	/**
	* @var long
	**/
	protected $StoreCategoryID;

	/**
	* @var long
	**/
	protected $StoreCategory2ID;

	/**
	* @var string
	**/
	protected $StoreCategoryName;

	/**
	* @var string
	**/
	protected $StoreCategory2Name;

	/**
	* @var anyURI
	**/
	protected $StoreURL;

	/**
	* @var string
	**/
	protected $StoreName;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('StorefrontType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'StoreCategoryID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreCategory2ID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreCategoryName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreCategory2Name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreName' =>
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
	 * @return long
	 **/
	function getStoreCategoryID()
	{
		return $this->StoreCategoryID;
	}

	/**
	 * @return void
	 **/
	function setStoreCategoryID($value)
	{
		$this->StoreCategoryID = $value;
	}

	/**
	 * @return long
	 **/
	function getStoreCategory2ID()
	{
		return $this->StoreCategory2ID;
	}

	/**
	 * @return void
	 **/
	function setStoreCategory2ID($value)
	{
		$this->StoreCategory2ID = $value;
	}

	/**
	 * @return string
	 **/
	function getStoreCategoryName()
	{
		return $this->StoreCategoryName;
	}

	/**
	 * @return void
	 **/
	function setStoreCategoryName($value)
	{
		$this->StoreCategoryName = $value;
	}

	/**
	 * @return string
	 **/
	function getStoreCategory2Name()
	{
		return $this->StoreCategory2Name;
	}

	/**
	 * @return void
	 **/
	function setStoreCategory2Name($value)
	{
		$this->StoreCategory2Name = $value;
	}

	/**
	 * @return anyURI
	 **/
	function getStoreURL()
	{
		return $this->StoreURL;
	}

	/**
	 * @return void
	 **/
	function setStoreURL($value)
	{
		$this->StoreURL = $value;
	}

	/**
	 * @return string
	 **/
	function getStoreName()
	{
		return $this->StoreName;
	}

	/**
	 * @return void
	 **/
	function setStoreName($value)
	{
		$this->StoreName = $value;
	}

}
?>
