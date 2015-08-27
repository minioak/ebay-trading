<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ListingTipMessageType.php';
require_once 'ListingTipFieldType.php';

/**
  * A tip on improving a listing's details. Tips are returned from the Listing Analyzer engine.
  * 
 **/

class ListingTipType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $ListingTipID;

	/**
	* @var int
	**/
	protected $Priority;

	/**
	* @var ListingTipMessageType
	**/
	protected $Message;

	/**
	* @var ListingTipFieldType
	**/
	protected $Field;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ListingTipType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ListingTipID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Priority' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Message' =>
				array(
					'required' => false,
					'type' => 'ListingTipMessageType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Field' =>
				array(
					'required' => false,
					'type' => 'ListingTipFieldType',
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
	 * @return string
	 **/
	function getListingTipID()
	{
		return $this->ListingTipID;
	}

	/**
	 * @return void
	 **/
	function setListingTipID($value)
	{
		$this->ListingTipID = $value;
	}

	/**
	 * @return int
	 **/
	function getPriority()
	{
		return $this->Priority;
	}

	/**
	 * @return void
	 **/
	function setPriority($value)
	{
		$this->Priority = $value;
	}

	/**
	 * @return ListingTipMessageType
	 **/
	function getMessage()
	{
		return $this->Message;
	}

	/**
	 * @return void
	 **/
	function setMessage($value)
	{
		$this->Message = $value;
	}

	/**
	 * @return ListingTipFieldType
	 **/
	function getField()
	{
		return $this->Field;
	}

	/**
	 * @return void
	 **/
	function setField($value)
	{
		$this->Field = $value;
	}

}
?>
