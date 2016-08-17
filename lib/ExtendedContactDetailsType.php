<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ContactHoursDetailsType.php';

/**
  * This type is used to provide contact hours for a seller of a Classified Ad listing, including motor vehicles. There is also a boolean field in this type that indicates whether or not potential buyer can contact the seller by email.
  * 
 **/

class ExtendedContactDetailsType extends EbatNs_ComplexType
{
	/**
	* @var ContactHoursDetailsType
	**/
	protected $ContactHoursDetails;

	/**
	* @var boolean
	**/
	protected $ClassifiedAdContactByEmailEnabled;

	/**
	* @var string
	**/
	protected $PayPerLeadPhoneNumber;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ExtendedContactDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ContactHoursDetails' =>
				array(
					'required' => false,
					'type' => 'ContactHoursDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ClassifiedAdContactByEmailEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PayPerLeadPhoneNumber' =>
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
	 * @return ContactHoursDetailsType
	 **/
	function getContactHoursDetails()
	{
		return $this->ContactHoursDetails;
	}

	/**
	 * @return void
	 **/
	function setContactHoursDetails($value)
	{
		$this->ContactHoursDetails = $value;
	}

	/**
	 * @return boolean
	 **/
	function getClassifiedAdContactByEmailEnabled()
	{
		return $this->ClassifiedAdContactByEmailEnabled;
	}

	/**
	 * @return void
	 **/
	function setClassifiedAdContactByEmailEnabled($value)
	{
		$this->ClassifiedAdContactByEmailEnabled = $value;
	}

	/**
	 * @return string
	 **/
	function getPayPerLeadPhoneNumber()
	{
		return $this->PayPerLeadPhoneNumber;
	}

	/**
	 * @return void
	 **/
	function setPayPerLeadPhoneNumber($value)
	{
		$this->PayPerLeadPhoneNumber = $value;
	}

}
?>
