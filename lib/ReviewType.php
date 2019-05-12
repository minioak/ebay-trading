<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'UserIDType.php';

/**
  * This type is deprecated.
  *  
 **/

class ReviewType extends EbatNs_ComplexType
{
	/**
	* @var anyURI
	**/
	protected $URL;

	/**
	* @var string
	**/
	protected $Title;

	/**
	* @var int
	**/
	protected $Rating;

	/**
	* @var string
	**/
	protected $Text;

	/**
	* @var UserIDType
	**/
	protected $UserID;

	/**
	* @var dateTime
	**/
	protected $CreationTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReviewType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'URL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
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
				'Rating' =>
				array(
					'required' => false,
					'type' => 'int',
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
				'UserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
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
	 * @return int
	 **/
	function getRating()
	{
		return $this->Rating;
	}

	/**
	 * @return void
	 **/
	function setRating($value)
	{
		$this->Rating = $value;
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

}
?>
