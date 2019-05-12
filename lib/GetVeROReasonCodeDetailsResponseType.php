<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'VeROReasonCodeDetailsType.php';

/**
  * Contains the reason codes for all sites. 
  * 
 **/

class GetVeROReasonCodeDetailsResponseType extends AbstractResponseType
{
	/**
	* @var VeROReasonCodeDetailsType
	**/
	protected $VeROReasonCodeDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetVeROReasonCodeDetailsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'VeROReasonCodeDetails' =>
				array(
					'required' => false,
					'type' => 'VeROReasonCodeDetailsType',
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
	 * @return VeROReasonCodeDetailsType
	 **/
	function getVeROReasonCodeDetails()
	{
		return $this->VeROReasonCodeDetails;
	}

	/**
	 * @return void
	 **/
	function setVeROReasonCodeDetails($value)
	{
		$this->VeROReasonCodeDetails = $value;
	}

}
?>
