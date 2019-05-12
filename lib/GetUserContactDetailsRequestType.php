<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  * Returns contact information for a specified user, given that a bidding relationship
  * (as either a buyer or seller) exists between the caller and the user.
  * 
 **/

class GetUserContactDetailsRequestType extends AbstractRequestType
{
	/**
	* @var string
	**/
	protected $ItemID;

	/**
	* @var string
	**/
	protected $ContactID;

	/**
	* @var string
	**/
	protected $RequesterID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetUserContactDetailsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ContactID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RequesterID' =>
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
	 * @return string
	 **/
	function getItemID()
	{
		return $this->ItemID;
	}

	/**
	 * @return void
	 **/
	function setItemID($value)
	{
		$this->ItemID = $value;
	}

	/**
	 * @return string
	 **/
	function getContactID()
	{
		return $this->ContactID;
	}

	/**
	 * @return void
	 **/
	function setContactID($value)
	{
		$this->ContactID = $value;
	}

	/**
	 * @return string
	 **/
	function getRequesterID()
	{
		return $this->RequesterID;
	}

	/**
	 * @return void
	 **/
	function setRequesterID($value)
	{
		$this->RequesterID = $value;
	}

}
?>
