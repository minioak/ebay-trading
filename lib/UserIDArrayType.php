<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'UserIDType.php';

/**
  * Contains an array of eBay UserID entries. 
  * 
 **/

class UserIDArrayType extends EbatNs_ComplexType
{
	/**
	* @var UserIDType
	**/
	protected $UserID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('UserIDArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'UserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return UserIDType
	 * @param integer $index 
	 **/
	function getUserID($index = null)
	{
		if ($index !== null)
		{
			return $this->UserID[$index];
		}
		else
		{
			return $this->UserID;
		}
	}

	/**
	 * @return void
	 * @param UserIDType $value
	 * @param integer $index 
	 **/
	function setUserID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->UserID[$index] = $value;
		}
		else
		{
			$this->UserID= $value;
		}
	}

	/**
	 * @return void
	 * @param UserIDType $value
	 **/
	function addUserID($value)
	{
		$this->UserID[] = $value;
	}

}
?>
