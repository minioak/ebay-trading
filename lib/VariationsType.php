<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'VariationType.php';
require_once 'PicturesType.php';
require_once 'NameValueListArrayType.php';
require_once 'ModifyNameArrayType.php';

/**
  * Variations are multiple similar (but not identical) items in a
  * single fixed-price listing.
  * For example, a single listing could contain multiple items of the
  * same brand and model that vary by color and size (like "Blue, Large" and "Black, Medium"). Each variation can have its own quantity and
  * price. For example, a listing could include 10 "Blue, Large"
  * variations and 20 "Black, Medium" variations.
  * 
 **/

class VariationsType extends EbatNs_ComplexType
{
	/**
	* @var VariationType
	**/
	protected $Variation;

	/**
	* @var PicturesType
	**/
	protected $Pictures;

	/**
	* @var NameValueListArrayType
	**/
	protected $VariationSpecificsSet;

	/**
	* @var ModifyNameArrayType
	**/
	protected $ModifyNameList;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('VariationsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Variation' =>
				array(
					'required' => false,
					'type' => 'VariationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'Pictures' =>
				array(
					'required' => false,
					'type' => 'PicturesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'VariationSpecificsSet' =>
				array(
					'required' => false,
					'type' => 'NameValueListArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ModifyNameList' =>
				array(
					'required' => false,
					'type' => 'ModifyNameArrayType',
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
	 * @return VariationType
	 * @param integer $index 
	 **/
	function getVariation($index = null)
	{
		if ($index !== null)
		{
			return $this->Variation[$index];
		}
		else
		{
			return $this->Variation;
		}
	}

	/**
	 * @return void
	 * @param VariationType $value
	 * @param integer $index 
	 **/
	function setVariation($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Variation[$index] = $value;
		}
		else
		{
			$this->Variation= $value;
		}
	}

	/**
	 * @return void
	 * @param VariationType $value
	 **/
	function addVariation($value)
	{
		$this->Variation[] = $value;
	}

	/**
	 * @return PicturesType
	 * @param integer $index 
	 **/
	function getPictures($index = null)
	{
		if ($index !== null)
		{
			return $this->Pictures[$index];
		}
		else
		{
			return $this->Pictures;
		}
	}

	/**
	 * @return void
	 * @param PicturesType $value
	 * @param integer $index 
	 **/
	function setPictures($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Pictures[$index] = $value;
		}
		else
		{
			$this->Pictures= $value;
		}
	}

	/**
	 * @return void
	 * @param PicturesType $value
	 **/
	function addPictures($value)
	{
		$this->Pictures[] = $value;
	}

	/**
	 * @return NameValueListArrayType
	 **/
	function getVariationSpecificsSet()
	{
		return $this->VariationSpecificsSet;
	}

	/**
	 * @return void
	 **/
	function setVariationSpecificsSet($value)
	{
		$this->VariationSpecificsSet = $value;
	}

	/**
	 * @return ModifyNameArrayType
	 **/
	function getModifyNameList()
	{
		return $this->ModifyNameList;
	}

	/**
	 * @return void
	 **/
	function setModifyNameList($value)
	{
		$this->ModifyNameList = $value;
	}

}
?>
