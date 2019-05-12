<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'UserType.php';

/**
  * Contains the data retrieved by the call. User data is returned in a User object.
  * 
 **/

class GetUserResponseType extends AbstractResponseType
{
	/**
	* @var UserType
	**/
	protected $User;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetUserResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'User' =>
				array(
					'required' => false,
					'type' => 'UserType',
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
	 * @return UserType
	 **/
	function getUser()
	{
		return $this->User;
	}

	/**
	 * @return void
	 **/
	function setUser($value)
	{
		$this->User = $value;
	}

}
?>
