<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'UserIDType.php';

/**
  * This type is not used by any Trading API calls.
  * 
 **/

class BuyingGuideType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Name;

	/**
	* @var anyURI
	**/
	protected $URL;

	/**
	* @var string
	**/
	protected $CategoryID;

	/**
	* @var int
	**/
	protected $ProductFinderID;

	/**
	* @var string
	**/
	protected $Title;

	/**
	* @var string
	**/
	protected $Text;

	/**
	* @var dateTime
	**/
	protected $CreationTime;

	/**
	* @var UserIDType
	**/
	protected $UserID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BuyingGuideType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'URL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductFinderID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Title' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Text' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CreationTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
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
	function getName()
	{
		return $this->Name;
	}

	/**
	 * @return void
	 **/
	function setName($value)
	{
		$this->Name = $value;
	}

	/**
	 * @return anyURI
	 **/
	function getURL()
	{
		return $this->URL;
	}

	/**
	 * @return void
	 **/
	function setURL($value)
	{
		$this->URL = $value;
	}

	/**
	 * @return string
	 **/
	function getCategoryID()
	{
		return $this->CategoryID;
	}

	/**
	 * @return void
	 **/
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}

	/**
	 * @return int
	 **/
	function getProductFinderID()
	{
		return $this->ProductFinderID;
	}

	/**
	 * @return void
	 **/
	function setProductFinderID($value)
	{
		$this->ProductFinderID = $value;
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
	function getText()
	{
		return $this->Text;
	}

	/**
	 * @return void
	 **/
	function setText($value)
	{
		$this->Text = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getCreationTime()
	{
		return $this->CreationTime;
	}

	/**
	 * @return void
	 **/
	function setCreationTime($value)
	{
		$this->CreationTime = $value;
	}

	/**
	 * @return UserIDType
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

}
?>
