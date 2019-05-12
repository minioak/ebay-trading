<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'GalleryTypeCodeType.php';
require_once 'PhotoDisplayCodeType.php';
require_once 'PictureSourceCodeType.php';
require_once 'GalleryStatusCodeType.php';
require_once 'ExtendedPictureDetailsType.php';

/**
  * Contains the data for the pictures associated with an item.
  *  Not applicable to Half.com.
  * 
 **/

class PictureDetailsType extends EbatNs_ComplexType
{
	/**
	* @var GalleryTypeCodeType
	**/
	protected $GalleryType;

	/**
	* @var anyURI
	**/
	protected $GalleryURL;

	/**
	* @var PhotoDisplayCodeType
	**/
	protected $PhotoDisplay;

	/**
	* @var anyURI
	**/
	protected $PictureURL;

	/**
	* @var PictureSourceCodeType
	**/
	protected $PictureSource;

	/**
	* @var token
	**/
	protected $GalleryDuration;

	/**
	* @var GalleryStatusCodeType
	**/
	protected $GalleryStatus;

	/**
	* @var string
	**/
	protected $GalleryErrorInfo;

	/**
	* @var anyURI
	**/
	protected $ExternalPictureURL;

	/**
	* @var ExtendedPictureDetailsType
	**/
	protected $ExtendedPictureDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PictureDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'GalleryType' =>
				array(
					'required' => false,
					'type' => 'GalleryTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GalleryURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PhotoDisplay' =>
				array(
					'required' => false,
					'type' => 'PhotoDisplayCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PictureURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'PictureSource' =>
				array(
					'required' => false,
					'type' => 'PictureSourceCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GalleryDuration' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GalleryStatus' =>
				array(
					'required' => false,
					'type' => 'GalleryStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GalleryErrorInfo' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				'ExtendedPictureDetails' =>
				array(
					'required' => false,
					'type' => 'ExtendedPictureDetailsType',
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
	 * @return GalleryTypeCodeType
	 **/
	function getGalleryType()
	{
		return $this->GalleryType;
	}

	/**
	 * @return void
	 **/
	function setGalleryType($value)
	{
		$this->GalleryType = $value;
	}

	/**
	 * @return anyURI
	 **/
	function getGalleryURL()
	{
		return $this->GalleryURL;
	}

	/**
	 * @return void
	 **/
	function setGalleryURL($value)
	{
		$this->GalleryURL = $value;
	}

	/**
	 * @return PhotoDisplayCodeType
	 **/
	function getPhotoDisplay()
	{
		return $this->PhotoDisplay;
	}

	/**
	 * @return void
	 **/
	function setPhotoDisplay($value)
	{
		$this->PhotoDisplay = $value;
	}

	/**
	 * @return anyURI
	 * @param integer $index 
	 **/
	function getPictureURL($index = null)
	{
		if ($index !== null)
		{
			return $this->PictureURL[$index];
		}
		else
		{
			return $this->PictureURL;
		}
	}

	/**
	 * @return void
	 * @param anyURI $value
	 * @param integer $index 
	 **/
	function setPictureURL($value, $index = null)
	{
		if ($index !== null)
		{
			$this->PictureURL[$index] = $value;
		}
		else
		{
			$this->PictureURL= $value;
		}
	}

	/**
	 * @return void
	 * @param anyURI $value
	 **/
	function addPictureURL($value)
	{
		$this->PictureURL[] = $value;
	}

	/**
	 * @return PictureSourceCodeType
	 **/
	function getPictureSource()
	{
		return $this->PictureSource;
	}

	/**
	 * @return void
	 **/
	function setPictureSource($value)
	{
		$this->PictureSource = $value;
	}

	/**
	 * @return token
	 **/
	function getGalleryDuration()
	{
		return $this->GalleryDuration;
	}

	/**
	 * @return void
	 **/
	function setGalleryDuration($value)
	{
		$this->GalleryDuration = $value;
	}

	/**
	 * @return GalleryStatusCodeType
	 **/
	function getGalleryStatus()
	{
		return $this->GalleryStatus;
	}

	/**
	 * @return void
	 **/
	function setGalleryStatus($value)
	{
		$this->GalleryStatus = $value;
	}

	/**
	 * @return string
	 **/
	function getGalleryErrorInfo()
	{
		return $this->GalleryErrorInfo;
	}

	/**
	 * @return void
	 **/
	function setGalleryErrorInfo($value)
	{
		$this->GalleryErrorInfo = $value;
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
	 * @return ExtendedPictureDetailsType
	 **/
	function getExtendedPictureDetails()
	{
		return $this->ExtendedPictureDetails;
	}

	/**
	 * @return void
	 **/
	function setExtendedPictureDetails($value)
	{
		$this->ExtendedPictureDetails = $value;
	}

}
?>
