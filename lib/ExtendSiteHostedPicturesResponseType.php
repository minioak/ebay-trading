<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';

/**
  * Returns the URL of an eBay Picture Services image whose expiration date was
  * extended.
  * 
 **/

class ExtendSiteHostedPicturesResponseType extends AbstractResponseType
{
	/**
	* @var anyURI
	**/
	protected $PictureURL;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ExtendSiteHostedPicturesResponseType', 'urn:ebay:apis:eBLBaseComponents');
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

}
?>
