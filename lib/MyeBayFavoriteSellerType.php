<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  *  Characteristics of the My eBay Favorite Seller.
  * 
 **/

class MyeBayFavoriteSellerType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $UserID;

	/**
	* @var string
	**/
	protected $StoreName;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MyeBayFavoriteSellerType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'UserID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StoreName' =>
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
	function getUserID()
	{
		return $this->UserID;
	}

	/**
	 * @return void
	 **/
	function setUserID($value)
	{
		$this->UserID = $value;
	}

	/**
	 * @return string
	 **/
	function getStoreName()
	{
		return $this->StoreName;
	}

	/**
	 * @return void
	 **/
	function setStoreName($value)
	{
		$this->StoreName = $value;
	}

}
?>
