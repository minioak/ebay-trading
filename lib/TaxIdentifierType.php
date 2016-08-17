<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ValueTypeCodeType.php';
require_once 'TaxIdentifierAttributeType.php';

/**
  * This type defines the <b>BuyerTaxIdentifier</b> container that is returned in order management calls. This container consists of taxpayer identification information for the buyer and it is currently used by sellers selling on the Italy or Spain site to retrieve the taxpayer ID of buyers registered on the Italy or Spain sites.
  * 
 **/

class TaxIdentifierType extends EbatNs_ComplexType
{
	/**
	* @var ValueTypeCodeType
	**/
	protected $Type;

	/**
	* @var string
	**/
	protected $ID;

	/**
	* @var TaxIdentifierAttributeType
	**/
	protected $Attribute;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('TaxIdentifierType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Type' =>
				array(
					'required' => false,
					'type' => 'ValueTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Attribute' =>
				array(
					'required' => false,
					'type' => 'TaxIdentifierAttributeType',
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
	 * @return ValueTypeCodeType
	 **/
	function getType()
	{
		return $this->Type;
	}

	/**
	 * @return void
	 **/
	function setType($value)
	{
		$this->Type = $value;
	}

	/**
	 * @return string
	 **/
	function getID()
	{
		return $this->ID;
	}

	/**
	 * @return void
	 **/
	function setID($value)
	{
		$this->ID = $value;
	}

	/**
	 * @return TaxIdentifierAttributeType
	 * @param integer $index 
	 **/
	function getAttribute($index = null)
	{
		if ($index !== null)
		{
			return $this->Attribute[$index];
		}
		else
		{
			return $this->Attribute;
		}
	}

	/**
	 * @return void
	 * @param TaxIdentifierAttributeType $value
	 * @param integer $index 
	 **/
	function setAttribute($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Attribute[$index] = $value;
		}
		else
		{
			$this->Attribute= $value;
		}
	}

	/**
	 * @return void
	 * @param TaxIdentifierAttributeType $value
	 **/
	function addAttribute($value)
	{
		$this->Attribute[] = $value;
	}

}
?>
