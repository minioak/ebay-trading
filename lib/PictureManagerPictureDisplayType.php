<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'PictureManagerPictureDisplayTypeCodeType.php';

/**
  * This type is deprecated.  
  * 
 **/

class PictureManagerPictureDisplayType extends EbatNs_ComplexType
{
	/**
	* @var PictureManagerPictureDisplayTypeCodeType
	**/
	protected $DisplayType;

	/**
	* @var anyURI
	**/
	protected $URL;

	/**
	* @var int
	**/
	protected $Size;

	/**
	* @var int
	**/
	protected $Height;

	/**
	* @var int
	**/
	protected $Width;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PictureManagerPictureDisplayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DisplayType' =>
				array(
					'required' => false,
					'type' => 'PictureManagerPictureDisplayTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				'Size' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Height' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Width' =>
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
	 * @return PictureManagerPictureDisplayTypeCodeType
	 **/
	function getDisplayType()
	{
		return $this->DisplayType;
	}

	/**
	 * @return void
	 **/
	function setDisplayType($value)
	{
		$this->DisplayType = $value;
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
	 * @return int
	 **/
	function getSize()
	{
		return $this->Size;
	}

	/**
	 * @return void
	 **/
	function setSize($value)
	{
		$this->Size = $value;
	}

	/**
	 * @return int
	 **/
	function getHeight()
	{
		return $this->Height;
	}

	/**
	 * @return void
	 **/
	function setHeight($value)
	{
		$this->Height = $value;
	}

	/**
	 * @return int
	 **/
	function getWidth()
	{
		return $this->Width;
	}

	/**
	 * @return void
	 **/
	function setWidth($value)
	{
		$this->Width = $value;
	}

}
?>
