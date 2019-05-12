<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'SiteHostedPictureDetailsType.php';

/**
  * Contains information about a picture upload (i.e., information about a picture
  * upload containing a binary attachment of an image).
  * 
 **/

class UploadSiteHostedPicturesResponseType extends AbstractResponseType
{
	/**
	* @var int
	**/
	protected $PictureSystemVersion;

	/**
	* @var SiteHostedPictureDetailsType
	**/
	protected $SiteHostedPictureDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('UploadSiteHostedPicturesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PictureSystemVersion' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SiteHostedPictureDetails' =>
				array(
					'required' => false,
					'type' => 'SiteHostedPictureDetailsType',
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
	 * @return SiteHostedPictureDetailsType
	 **/
	function getSiteHostedPictureDetails()
	{
		return $this->SiteHostedPictureDetails;
	}

	/**
	 * @return void
	 **/
	function setSiteHostedPictureDetails($value)
	{
		$this->SiteHostedPictureDetails = $value;
	}

}
?>
