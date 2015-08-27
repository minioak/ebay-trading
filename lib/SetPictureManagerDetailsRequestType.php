<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'PictureManagerDetailsType.php';
require_once 'PictureManagerActionCodeType.php';

/**
  *       Creates, updates, or deletes Picture Manager account settings, folders, or pictures.
  *     
 **/

class SetPictureManagerDetailsRequestType extends AbstractRequestType
{
	/**
	* @var PictureManagerDetailsType
	**/
	protected $PictureManagerDetails;

	/**
	* @var PictureManagerActionCodeType
	**/
	protected $Action;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SetPictureManagerDetailsRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
				),
				'Action' =>
				array(
					'required' => false,
					'type' => 'PictureManagerActionCodeType',
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

	/**
	 * @return PictureManagerActionCodeType
	 **/
	function getAction()
	{
		return $this->Action;
	}

	/**
	 * @return void
	 **/
	function setAction($value)
	{
		$this->Action = $value;
	}

}
?>
