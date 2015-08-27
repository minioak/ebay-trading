<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'PictureManagerDetailLevelCodeType.php';

/**
  * Requests information about folders or pictures in a Picture Manager account
  * or the account settings.
  *     
 **/

class GetPictureManagerDetailsRequestType extends AbstractRequestType
{
	/**
	* @var int
	**/
	protected $FolderID;

	/**
	* @var string
	**/
	protected $PictureURL;

	/**
	* @var PictureManagerDetailLevelCodeType
	**/
	protected $PictureManagerDetailLevel;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetPictureManagerDetailsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'FolderID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PictureURL' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PictureManagerDetailLevel' =>
				array(
					'required' => false,
					'type' => 'PictureManagerDetailLevelCodeType',
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
	function getFolderID()
	{
		return $this->FolderID;
	}

	/**
	 * @return void
	 **/
	function setFolderID($value)
	{
		$this->FolderID = $value;
	}

	/**
	 * @return string
	 **/
	function getPictureURL()
	{
		return $this->PictureURL;
	}

	/**
	 * @return void
	 **/
	function setPictureURL($value)
	{
		$this->PictureURL = $value;
	}

	/**
	 * @return PictureManagerDetailLevelCodeType
	 **/
	function getPictureManagerDetailLevel()
	{
		return $this->PictureManagerDetailLevel;
	}

	/**
	 * @return void
	 **/
	function setPictureManagerDetailLevel($value)
	{
		$this->PictureManagerDetailLevel = $value;
	}

}
?>
