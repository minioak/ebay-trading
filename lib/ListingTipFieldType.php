<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * (out) Identifies the item field that the tip relates to.
  * 
 **/

class ListingTipFieldType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $ListingTipFieldID;

	/**
	* @var string
	**/
	protected $FieldTip;

	/**
	* @var string
	**/
	protected $CurrentFieldText;

	/**
	* @var string
	**/
	protected $CurrentFieldValue;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ListingTipFieldType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ListingTipFieldID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FieldTip' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CurrentFieldText' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CurrentFieldValue' =>
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
	 * @return string
	 **/
	function getListingTipFieldID()
	{
		return $this->ListingTipFieldID;
	}

	/**
	 * @return void
	 **/
	function setListingTipFieldID($value)
	{
		$this->ListingTipFieldID = $value;
	}

	/**
	 * @return string
	 **/
	function getFieldTip()
	{
		return $this->FieldTip;
	}

	/**
	 * @return void
	 **/
	function setFieldTip($value)
	{
		$this->FieldTip = $value;
	}

	/**
	 * @return string
	 **/
	function getCurrentFieldText()
	{
		return $this->CurrentFieldText;
	}

	/**
	 * @return void
	 **/
	function setCurrentFieldText($value)
	{
		$this->CurrentFieldText = $value;
	}

	/**
	 * @return string
	 **/
	function getCurrentFieldValue()
	{
		return $this->CurrentFieldValue;
	}

	/**
	 * @return void
	 **/
	function setCurrentFieldValue($value)
	{
		$this->CurrentFieldValue = $value;
	}

}
?>
