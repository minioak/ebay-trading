<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'PictureManagerSubscriptionLevelCodeType.php';
require_once 'PictureManagerFolderType.php';

/**
 **/

class PictureManagerDetailsType extends EbatNs_ComplexType
{
	/**
	* @var PictureManagerSubscriptionLevelCodeType
	**/
	protected $SubscriptionLevel;

	/**
	* @var int
	**/
	protected $StorageUsed;

	/**
	* @var int
	**/
	protected $TotalStorageAvailable;

	/**
	* @var boolean
	**/
	protected $KeepOriginal;

	/**
	* @var boolean
	**/
	protected $WatermarkEPS;

	/**
	* @var boolean
	**/
	protected $WatermarkUserID;

	/**
	* @var PictureManagerFolderType
	**/
	protected $Folder;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PictureManagerDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SubscriptionLevel' =>
				array(
					'required' => false,
					'type' => 'PictureManagerSubscriptionLevelCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StorageUsed' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalStorageAvailable' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'KeepOriginal' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WatermarkEPS' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WatermarkUserID' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Folder' =>
				array(
					'required' => false,
					'type' => 'PictureManagerFolderType',
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
	 * @return PictureManagerSubscriptionLevelCodeType
	 **/
	function getSubscriptionLevel()
	{
		return $this->SubscriptionLevel;
	}

	/**
	 * @return void
	 **/
	function setSubscriptionLevel($value)
	{
		$this->SubscriptionLevel = $value;
	}

	/**
	 * @return int
	 **/
	function getStorageUsed()
	{
		return $this->StorageUsed;
	}

	/**
	 * @return void
	 **/
	function setStorageUsed($value)
	{
		$this->StorageUsed = $value;
	}

	/**
	 * @return int
	 **/
	function getTotalStorageAvailable()
	{
		return $this->TotalStorageAvailable;
	}

	/**
	 * @return void
	 **/
	function setTotalStorageAvailable($value)
	{
		$this->TotalStorageAvailable = $value;
	}

	/**
	 * @return boolean
	 **/
	function getKeepOriginal()
	{
		return $this->KeepOriginal;
	}

	/**
	 * @return void
	 **/
	function setKeepOriginal($value)
	{
		$this->KeepOriginal = $value;
	}

	/**
	 * @return boolean
	 **/
	function getWatermarkEPS()
	{
		return $this->WatermarkEPS;
	}

	/**
	 * @return void
	 **/
	function setWatermarkEPS($value)
	{
		$this->WatermarkEPS = $value;
	}

	/**
	 * @return boolean
	 **/
	function getWatermarkUserID()
	{
		return $this->WatermarkUserID;
	}

	/**
	 * @return void
	 **/
	function setWatermarkUserID($value)
	{
		$this->WatermarkUserID = $value;
	}

	/**
	 * @return PictureManagerFolderType
	 * @param integer $index 
	 **/
	function getFolder($index = null)
	{
		if ($index !== null)
		{
			return $this->Folder[$index];
		}
		else
		{
			return $this->Folder;
		}
	}

	/**
	 * @return void
	 * @param PictureManagerFolderType $value
	 * @param integer $index 
	 **/
	function setFolder($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Folder[$index] = $value;
		}
		else
		{
			$this->Folder= $value;
		}
	}

	/**
	 * @return void
	 * @param PictureManagerFolderType $value
	 **/
	function addFolder($value)
	{
		$this->Folder[] = $value;
	}

}
?>
