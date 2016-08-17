<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'UserIDType.php';

/**
  * Retrieves configuration information for the eBay store owned by the specified
  * UserID, or by the caller.
  * 
 **/

class GetStoreRequestType extends AbstractRequestType
{
	/**
	* @var boolean
	**/
	protected $CategoryStructureOnly;

	/**
	* @var long
	**/
	protected $RootCategoryID;

	/**
	* @var int
	**/
	protected $LevelLimit;

	/**
	* @var UserIDType
	**/
	protected $UserID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetStoreRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CategoryStructureOnly' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RootCategoryID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LevelLimit' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return boolean
	 **/
	function getCategoryStructureOnly()
	{
		return $this->CategoryStructureOnly;
	}

	/**
	 * @return void
	 **/
	function setCategoryStructureOnly($value)
	{
		$this->CategoryStructureOnly = $value;
	}

	/**
	 * @return long
	 **/
	function getRootCategoryID()
	{
		return $this->RootCategoryID;
	}

	/**
	 * @return void
	 **/
	function setRootCategoryID($value)
	{
		$this->RootCategoryID = $value;
	}

	/**
	 * @return int
	 **/
	function getLevelLimit()
	{
		return $this->LevelLimit;
	}

	/**
	 * @return void
	 **/
	function setLevelLimit($value)
	{
		$this->LevelLimit = $value;
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
