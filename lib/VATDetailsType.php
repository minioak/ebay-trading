<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Container for eBay's Business User features. A business seller can choose
  * to offer an item exclusively to bidders and buyers that also represent businesses.
  * Only applicable when the item is listed in a B2B-enabled category.
  * Currently, the eBay Germany (DE), Austria (AT), and Switzerland (CH) sites support
  * B2B business features.
  * 
 **/

class VATDetailsType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $BusinessSeller;

	/**
	* @var boolean
	**/
	protected $RestrictedToBusiness;

	/**
	* @var float
	**/
	protected $VATPercent;

	/**
	* @var string
	**/
	protected $VATSite;

	/**
	* @var string
	**/
	protected $VATID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('VATDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BusinessSeller' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RestrictedToBusiness' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VATPercent' =>
				array(
					'required' => false,
					'type' => 'float',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VATSite' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VATID' =>
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
	 * @return boolean
	 **/
	function getBusinessSeller()
	{
		return $this->BusinessSeller;
	}

	/**
	 * @return void
	 **/
	function setBusinessSeller($value)
	{
		$this->BusinessSeller = $value;
	}

	/**
	 * @return boolean
	 **/
	function getRestrictedToBusiness()
	{
		return $this->RestrictedToBusiness;
	}

	/**
	 * @return void
	 **/
	function setRestrictedToBusiness($value)
	{
		$this->RestrictedToBusiness = $value;
	}

	/**
	 * @return float
	 **/
	function getVATPercent()
	{
		return $this->VATPercent;
	}

	/**
	 * @return void
	 **/
	function setVATPercent($value)
	{
		$this->VATPercent = $value;
	}

	/**
	 * @return string
	 **/
	function getVATSite()
	{
		return $this->VATSite;
	}

	/**
	 * @return void
	 **/
	function setVATSite($value)
	{
		$this->VATSite = $value;
	}

	/**
	 * @return string
	 **/
	function getVATID()
	{
		return $this->VATID;
	}

	/**
	 * @return void
	 **/
	function setVATID($value)
	{
		$this->VATID = $value;
	}

}
?>
