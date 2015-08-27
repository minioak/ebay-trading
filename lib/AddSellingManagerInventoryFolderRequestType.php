<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  *   Adds a new product folder to a user's Selling Manager account.
  * 
 **/

class AddSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
	/**
	* @var string
	**/
	protected $FolderName;

	/**
	* @var long
	**/
	protected $ParentFolderID;

	/**
	* @var string
	**/
	protected $Comment;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AddSellingManagerInventoryFolderRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'FolderName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ParentFolderID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Comment' =>
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
	function getFolderName()
	{
		return $this->FolderName;
	}

	/**
	 * @return void
	 **/
	function setFolderName($value)
	{
		$this->FolderName = $value;
	}

	/**
	 * @return long
	 **/
	function getParentFolderID()
	{
		return $this->ParentFolderID;
	}

	/**
	 * @return void
	 **/
	function setParentFolderID($value)
	{
		$this->ParentFolderID = $value;
	}

	/**
	 * @return string
	 **/
	function getComment()
	{
		return $this->Comment;
	}

	/**
	 * @return void
	 **/
	function setComment($value)
	{
		$this->Comment = $value;
	}

}
?>
