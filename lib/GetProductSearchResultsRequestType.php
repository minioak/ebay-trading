<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'ProductSearchType.php';

/**
  * This type is deprecated as the call is no longer available.
  * 
  * 
 **/

class GetProductSearchResultsRequestType extends AbstractRequestType
{
	/**
	* @var ProductSearchType
	**/
	protected $ProductSearch;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetProductSearchResultsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ProductSearch' =>
				array(
					'required' => false,
					'type' => 'ProductSearchType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return ProductSearchType
	 * @param integer $index 
	 **/
	function getProductSearch($index = null)
	{
		if ($index !== null)
		{
			return $this->ProductSearch[$index];
		}
		else
		{
			return $this->ProductSearch;
		}
	}

	/**
	 * @return void
	 * @param ProductSearchType $value
	 * @param integer $index 
	 **/
	function setProductSearch($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ProductSearch[$index] = $value;
		}
		else
		{
			$this->ProductSearch= $value;
		}
	}

	/**
	 * @return void
	 * @param ProductSearchType $value
	 **/
	function addProductSearch($value)
	{
		$this->ProductSearch[] = $value;
	}

}
?>
