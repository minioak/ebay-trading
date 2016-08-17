<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'PictureManagerPictureType.php';

/**
  * This type is deprecated.  
  * 
 **/

class PictureManagerFolderType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $FolderID;

	/**
	* @var string
	**/
	protected $Name;

	/**
	* @var PictureManagerPictureType
	**/
	protected $Picture;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PictureManagerFolderType', 'urn:ebay:apis:eBLBaseComponents');
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
				'Name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Picture' =>
				array(
					'required' => false,
					'type' => 'PictureManagerPictureType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
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
	 * @return PictureManagerPictureType
	 * @param integer $index 
	 **/
	function getPicture($index = null)
	{
		if ($index !== null)
		{
			return $this->Picture[$index];
		}
		else
		{
			return $this->Picture;
		}
	}

	/**
	 * @return void
	 * @param PictureManagerPictureType $value
	 * @param integer $index 
	 **/
	function setPicture($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Picture[$index] = $value;
		}
		else
		{
			$this->Picture= $value;
		}
	}

	/**
	 * @return void
	 * @param PictureManagerPictureType $value
	 **/
	function addPicture($value)
	{
		$this->Picture[] = $value;
	}

}
?>
