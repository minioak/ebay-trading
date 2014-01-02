<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'PictureManagerPictureDisplayType.php';

/**
 * This type is deprecated as Pictures Manager was retired. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PictureManagerPictureType.html
 *
 */
class PictureManagerPictureType extends EbatNs_ComplexType
{
	/**
	 * @var anyURI
	 */
	protected $PictureURL;
	/**
	 * @var string
	 */
	protected $Name;
	/**
	 * @var dateTime
	 */
	protected $Date;
	/**
	 * @var PictureManagerPictureDisplayType
	 */
	protected $DisplayFormat;

	/**
	 * @return anyURI
	 */
	function getPictureURL()
	{
		return $this->PictureURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setPictureURL($value)
	{
		$this->PictureURL = $value;
	}
	/**
	 * @return string
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return dateTime
	 */
	function getDate()
	{
		return $this->Date;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setDate($value)
	{
		$this->Date = $value;
	}
	/**
	 * @return PictureManagerPictureDisplayType
	 * @param integer $index 
	 */
	function getDisplayFormat($index = null)
	{
		if ($index !== null) {
			return $this->DisplayFormat[$index];
		} else {
			return $this->DisplayFormat;
		}
	}
	/**
	 * @return void
	 * @param PictureManagerPictureDisplayType $value 
	 * @param  $index 
	 */
	function setDisplayFormat($value, $index = null)
	{
		if ($index !== null) {
			$this->DisplayFormat[$index] = $value;
		} else {
			$this->DisplayFormat = $value;
		}
	}
	/**
	 * @return void
	 * @param PictureManagerPictureDisplayType $value 
	 */
	function addDisplayFormat($value)
	{
		$this->DisplayFormat[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PictureManagerPictureType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PictureURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
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
					'Date' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisplayFormat' =>
					array(
						'required' => false,
						'type' => 'PictureManagerPictureDisplayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
