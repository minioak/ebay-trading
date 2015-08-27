<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Container for the image file that is to be sent in a message, which lets sellers share photos in messages using the API. 
  * The photo must be uploaded by the seller or buyer to 
  * <a href="http://developer.ebay.com/devzone/xml/docs/reference/ebay/uploadsitehostedpictures.html">EPS (eBay Picture Services)</a>
  * using a separate API call or the web flow. After the image is on the eBay server, you can 
  * use <b>AddMemberMessage</b> calls to pass the URL of the image in a message. The 
  * uploaded images will be available as part of the email as a thumbnail image. 
  * Clicking on the thumbnail, opens a larger version of the image in a filmstrip. 
  * The image name will be displayed on the title of the filmstrip component. 
  * These uploaded images will also be returned as <b>MessageMediaType</b> arrays in the 
  * <b>GetMemberMessages</b> and <b>GetMyMessages</b> API response. It doesn't matter if an image was uploaded using the web flow or using the API, it can be accessed using either the web flow or the API and web.
  * 
 **/

class MessageMediaType extends EbatNs_ComplexType
{
	/**
	* @var anyURI
	**/
	protected $MediaURL;

	/**
	* @var string
	**/
	protected $MediaName;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MessageMediaType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MediaURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MediaName' =>
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
	 * @return anyURI
	 **/
	function getMediaURL()
	{
		return $this->MediaURL;
	}

	/**
	 * @return void
	 **/
	function setMediaURL($value)
	{
		$this->MediaURL = $value;
	}

	/**
	 * @return string
	 **/
	function getMediaName()
	{
		return $this->MediaName;
	}

	/**
	 * @return void
	 **/
	function setMediaName($value)
	{
		$this->MediaName = $value;
	}

}
?>
