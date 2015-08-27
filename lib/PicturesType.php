<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'VariationSpecificPictureSetType.php';

/**
  * Defines variation-specific pictures associated with one 
  * VariationSpecificName (e.g., Color) whose values differ across variations.
  * 
 **/

class PicturesType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $VariationSpecificName;

	/**
	* @var VariationSpecificPictureSetType
	**/
	protected $VariationSpecificPictureSet;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PicturesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'VariationSpecificName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VariationSpecificPictureSet' =>
				array(
					'required' => false,
					'type' => 'VariationSpecificPictureSetType',
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
	 * @return string
	 **/
	function getVariationSpecificName()
	{
		return $this->VariationSpecificName;
	}

	/**
	 * @return void
	 **/
	function setVariationSpecificName($value)
	{
		$this->VariationSpecificName = $value;
	}

	/**
	 * @return VariationSpecificPictureSetType
	 * @param integer $index 
	 **/
	function getVariationSpecificPictureSet($index = null)
	{
		if ($index !== null)
		{
			return $this->VariationSpecificPictureSet[$index];
		}
		else
		{
			return $this->VariationSpecificPictureSet;
		}
	}

	/**
	 * @return void
	 * @param VariationSpecificPictureSetType $value
	 * @param integer $index 
	 **/
	function setVariationSpecificPictureSet($value, $index = null)
	{
		if ($index !== null)
		{
			$this->VariationSpecificPictureSet[$index] = $value;
		}
		else
		{
			$this->VariationSpecificPictureSet= $value;
		}
	}

	/**
	 * @return void
	 * @param VariationSpecificPictureSetType $value
	 **/
	function addVariationSpecificPictureSet($value)
	{
		$this->VariationSpecificPictureSet[] = $value;
	}

}
?>
