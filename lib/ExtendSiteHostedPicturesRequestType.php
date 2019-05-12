<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  * Gives approved sellers the ability to extend the default and
  * ongoing lifetime of pictures uploaded to eBay.
  * 
 **/

class ExtendSiteHostedPicturesRequestType extends AbstractRequestType
{
	/**
	* @var anyURI
	**/
	protected $PictureURL;

	/**
	* @var int
	**/
	protected $ExtensionInDays;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ExtendSiteHostedPicturesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PictureURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
