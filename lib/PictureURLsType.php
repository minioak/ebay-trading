<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay Picture Services (EPS), that was generated when the picture was uploaded.
  * 
 **/

class PictureURLsType extends EbatNs_ComplexType
{
	/**
	* @var anyURI
	**/
	protected $eBayPictureURL;

	/**
	* @var anyURI
	**/
	protected $ExternalPictureURL;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PictureURLsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'eBayPictureURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalPictureURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
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
	 * @return anyURI
	 **/
	function geteBayPictureURL()
	{
		return $this->eBayPictureURL;
	}

	/**
	 * @return void
	 **/
	function seteBayPictureURL($value)
	{
		$this->eBayPictureURL = $value;
	}

	/**
	 * @return anyURI
	 **/
	function getExternalPictureURL()
	{
		return $this->ExternalPictureURL;
	}

	/**
	 * @return void
	 **/
	function setExternalPictureURL($value)
	{
		$this->ExternalPictureURL = $value;
	}

}
?>
