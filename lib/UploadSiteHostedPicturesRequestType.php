<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'PictureSetCodeType.php';
require_once 'Base64BinaryType.php';
require_once 'PictureUploadPolicyCodeType.php';
require_once 'PictureWatermarkCodeType.php';

/**
  * Uploads a picture to the eBay Picture Service and returns a URL of the picture. 
  * You will use this URL when creating the listing using one of the <b>AddItem</b> calls. 
  * 
 **/

class UploadSiteHostedPicturesRequestType extends AbstractRequestType
{
	/**
	* @var string
	**/
	protected $PictureName;

	/**
	* @var int
	**/
	protected $PictureSystemVersion;

	/**
	* @var PictureSetCodeType
	**/
	protected $PictureSet;

	/**
	* @var Base64BinaryType
	**/
	protected $PictureData;

	/**
	* @var PictureUploadPolicyCodeType
	**/
	protected $PictureUploadPolicy;

	/**
	* @var anyURI
	**/
	protected $ExternalPictureURL;

	/**
	* @var PictureWatermarkCodeType
	**/
	protected $PictureWatermark;

	/**
	* @var int
	**/
	protected $ExtensionInDays;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('UploadSiteHostedPicturesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PictureName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PictureSystemVersion' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PictureSet' =>
				array(
					'required' => false,
					'type' => 'PictureSetCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PictureData' =>
				array(
					'required' => false,
					'type' => 'Base64BinaryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PictureUploadPolicy' =>
				array(
					'required' => false,
					'type' => 'PictureUploadPolicyCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalPictureURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'PictureWatermark' =>
				array(
					'required' => false,
					'type' => 'PictureWatermarkCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ExtensionInDays' =>
				array(
					'required' => false,
					'type' => 'int',
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
	function getPictureName()
	{
		return $this->PictureName;
	}

	/**
	 * @return void
	 **/
	function setPictureName($value)
	{
		$this->PictureName = $value;
	}

	/**
	 * @return int
	 **/
	function getPictureSystemVersion()
	{
		return $this->PictureSystemVersion;
	}

	/**
	 * @return void
	 **/
	function setPictureSystemVersion($value)
	{
		$this->PictureSystemVersion = $value;
	}

	/**
	 * @return PictureSetCodeType
	 **/
	function getPictureSet()
	{
		return $this->PictureSet;
	}

	/**
	 * @return void
	 **/
	function setPictureSet($value)
	{
		$this->PictureSet = $value;
	}

	/**
	 * @return Base64BinaryType
	 **/
	function getPictureData()
	{
		return $this->PictureData;
	}

	/**
	 * @return void
	 **/
	function setPictureData($value)
	{
		$this->PictureData = $value;
	}

	/**
	 * @return PictureUploadPolicyCodeType
	 **/
	function getPictureUploadPolicy()
	{
		return $this->PictureUploadPolicy;
	}

	/**
	 * @return void
	 **/
	function setPictureUploadPolicy($value)
	{
		$this->PictureUploadPolicy = $value;
	}

	/**
	 * @return anyURI
	 * @param integer $index 
	 **/
	function getExternalPictureURL($index = null)
	{
		if ($index !== null)
		{
			return $this->ExternalPictureURL[$index];
		}
		else
		{
			return $this->ExternalPictureURL;
		}
	}

	/**
	 * @return void
	 * @param anyURI $value
	 * @param integer $index 
	 **/
	function setExternalPictureURL($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ExternalPictureURL[$index] = $value;
		}
		else
		{
			$this->ExternalPictureURL= $value;
		}
	}

	/**
	 * @return void
	 * @param anyURI $value
	 **/
	function addExternalPictureURL($value)
	{
		$this->ExternalPictureURL[] = $value;
	}

	/**
	 * @return PictureWatermarkCodeType
	 * @param integer $index 
	 **/
	function getPictureWatermark($index = null)
	{
		if ($index !== null)
		{
			return $this->PictureWatermark[$index];
		}
		else
		{
			return $this->PictureWatermark;
		}
	}

	/**
	 * @return void
	 * @param PictureWatermarkCodeType $value
	 * @param integer $index 
	 **/
	function setPictureWatermark($value, $index = null)
	{
		if ($index !== null)
		{
			$this->PictureWatermark[$index] = $value;
		}
		else
		{
			$this->PictureWatermark= $value;
		}
	}

	/**
	 * @return void
	 * @param PictureWatermarkCodeType $value
	 **/
	function addPictureWatermark($value)
	{
		$this->PictureWatermark[] = $value;
	}

	/**
	 * @return int
	 **/
	function getExtensionInDays()
	{
		return $this->ExtensionInDays;
	}

	/**
	 * @return void
	 **/
	function setExtensionInDays($value)
	{
		$this->ExtensionInDays = $value;
	}

}
?>
