<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SuggestedCategoryType.php';

/**
  * Contains an array of categories that contain listings with
  * specified keywords in their titles or descriptions. The array
  * can contain up to 10 categories.
  * 
 **/

class SuggestedCategoryArrayType extends EbatNs_ComplexType
{
	/**
	* @var SuggestedCategoryType
	**/
	protected $SuggestedCategory;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SuggestedCategoryArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SuggestedCategory' =>
				array(
					'required' => false,
					'type' => 'SuggestedCategoryType',
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
	 * @return SuggestedCategoryType
	 * @param integer $index 
	 **/
	function getSuggestedCategory($index = null)
	{
		if ($index !== null)
		{
			return $this->SuggestedCategory[$index];
		}
		else
		{
			return $this->SuggestedCategory;
		}
	}

	/**
	 * @return void
	 * @param SuggestedCategoryType $value
	 * @param integer $index 
	 **/
	function setSuggestedCategory($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SuggestedCategory[$index] = $value;
		}
		else
		{
			$this->SuggestedCategory= $value;
		}
	}

	/**
	 * @return void
	 * @param SuggestedCategoryType $value
	 **/
	function addSuggestedCategory($value)
	{
		$this->SuggestedCategory[] = $value;
	}

}
?>
