<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'TokenStatusType.php';

/**
  * Returns token status.
  * 
 **/

class GetTokenStatusResponseType extends AbstractResponseType
{
	/**
	* @var TokenStatusType
	**/
	protected $TokenStatus;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetTokenStatusResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'TokenStatus' =>
				array(
					'required' => false,
					'type' => 'TokenStatusType',
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
	 * @return TokenStatusType
	 **/
	function getTokenStatus()
	{
		return $this->TokenStatus;
	}

	/**
	 * @return void
	 **/
	function setTokenStatus($value)
	{
		$this->TokenStatus = $value;
	}

}
?>
