<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Identifies an individual product suggestion. The product details include the EPID, Title, Stock photo url and if it is 
  * an exact match.
  * 
 **/

class ProductSuggestionType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Title;

	/**
	* @var string
	**/
	protected $EPID;

	/**
	* @var string
	**/
	protected $StockPhoto;

	/**
	* @var boolean
	**/
	protected $Recommended;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProductSuggestionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Title' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EPID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StockPhoto' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Recommended' =>
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
	 * @return string
	 **/
	function getTitle()
	{
		return $this->Title;
	}

	/**
	 * @return void
	 **/
	function setTitle($value)
	{
		$this->Title = $value;
	}

	/**
	 * @return string
	 **/
	function getEPID()
	{
		return $this->EPID;
	}

	/**
	 * @return void
	 **/
	function setEPID($value)
	{
		$this->EPID = $value;
	}

	/**
	 * @return string
	 **/
	function getStockPhoto()
	{
		return $this->StockPhoto;
	}

	/**
	 * @return void
	 **/
	function setStockPhoto($value)
	{
		$this->StockPhoto = $value;
	}

	/**
	 * @return boolean
	 **/
	function getRecommended()
	{
		return $this->Recommended;
	}

	/**
	 * @return void
	 **/
	function setRecommended($value)
	{
		$this->Recommended = $value;
	}

}
?>
