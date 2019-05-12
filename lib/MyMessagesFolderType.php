<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Details relating to a My Messages folder.
  * 
 **/

class MyMessagesFolderType extends EbatNs_ComplexType
{
	/**
	* @var long
	**/
	protected $FolderID;

	/**
	* @var string
	**/
	protected $FolderName;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MyMessagesFolderType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'FolderID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FolderName' =>
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
	 * @return long
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

}
?>
