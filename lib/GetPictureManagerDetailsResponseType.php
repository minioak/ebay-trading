<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'PictureManagerDetailsType.php';

/**
  * Responds with information about content in a Picture Manager album
  * or the account settings.
  * 
 **/

class GetPictureManagerDetailsResponseType extends AbstractResponseType
{
	/**
	* @var PictureManagerDetailsType
	**/
	protected $PictureManagerDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetPictureManagerDetailsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PictureManagerDetails' =>
				array(
					'required' => false,
					'type' => 'PictureManagerDetailsType',
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
	 * @return PictureManagerDetailsType
	 **/
	function getPictureManagerDetails()
	{
		return $this->PictureManagerDetails;
	}

	/**
	 * @return void
	 **/
	function setPictureManagerDetails($value)
	{
		$this->PictureManagerDetails = $value;
	}

}
?>
