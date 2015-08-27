<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'AddressType.php';

/**
  * Returns contact information to a seller for both bidders
  * and users who have made offers (via Best Offer) during
  * an active listing.
  * 
 **/

class GetUserContactDetailsResponseType extends AbstractResponseType
{
	/**
	* @var string
	**/
	protected $UserID;

	/**
	* @var AddressType
	**/
	protected $ContactAddress;

	/**
	* @var dateTime
	**/
	protected $RegistrationDate;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetUserContactDetailsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'UserID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ContactAddress' =>
				array(
					'required' => false,
					'type' => 'AddressType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RegistrationDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
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
	 * @return string
	 **/
	function getUserID()
	{
		return $this->UserID;
	}

	/**
	 * @return void
	 **/
	function setUserID($value)
	{
		$this->UserID = $value;
	}

	/**
	 * @return AddressType
	 **/
	function getContactAddress()
	{
		return $this->ContactAddress;
	}

	/**
	 * @return void
	 **/
	function setContactAddress($value)
	{
		$this->ContactAddress = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getRegistrationDate()
	{
		return $this->RegistrationDate;
	}

	/**
	 * @return void
	 **/
	function setRegistrationDate($value)
	{
		$this->RegistrationDate = $value;
	}

}
?>
