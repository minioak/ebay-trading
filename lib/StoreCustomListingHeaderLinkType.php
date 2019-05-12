<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'StoreCustomListingHeaderLinkCodeType.php';

/**
  * Custom listing header link.
  * 
 **/

class StoreCustomListingHeaderLinkType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $LinkID;

	/**
	* @var int
	**/
	protected $Order;

	/**
	* @var StoreCustomListingHeaderLinkCodeType
	**/
	protected $LinkType;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('StoreCustomListingHeaderLinkType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'LinkID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Order' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LinkType' =>
				array(
					'required' => false,
					'type' => 'StoreCustomListingHeaderLinkCodeType',
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
	 * @return int
	 **/
	function getLinkID()
	{
		return $this->LinkID;
	}

	/**
	 * @return void
	 **/
	function setLinkID($value)
	{
		$this->LinkID = $value;
	}

	/**
	 * @return int
	 **/
	function getOrder()
	{
		return $this->Order;
	}

	/**
	 * @return void
	 **/
	function setOrder($value)
	{
		$this->Order = $value;
	}

	/**
	 * @return StoreCustomListingHeaderLinkCodeType
	 **/
	function getLinkType()
	{
		return $this->LinkType;
	}

	/**
	 * @return void
	 **/
	function setLinkType($value)
	{
		$this->LinkType = $value;
	}

}
?>
