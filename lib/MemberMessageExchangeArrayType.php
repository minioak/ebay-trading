<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MemberMessageExchangeType.php';

/**
  * Container for messages. Returned for GetMemberMessages if messages that meet the request criteria exist.
  * 
 **/

class MemberMessageExchangeArrayType extends EbatNs_ComplexType
{
	/**
	* @var MemberMessageExchangeType
	**/
	protected $MemberMessageExchange;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MemberMessageExchangeArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MemberMessageExchange' =>
				array(
					'required' => false,
					'type' => 'MemberMessageExchangeType',
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
	 * @return MemberMessageExchangeType
	 * @param integer $index 
	 **/
	function getMemberMessageExchange($index = null)
	{
		if ($index !== null)
		{
			return $this->MemberMessageExchange[$index];
		}
		else
		{
			return $this->MemberMessageExchange;
		}
	}

	/**
	 * @return void
	 * @param MemberMessageExchangeType $value
	 * @param integer $index 
	 **/
	function setMemberMessageExchange($value, $index = null)
	{
		if ($index !== null)
		{
			$this->MemberMessageExchange[$index] = $value;
		}
		else
		{
			$this->MemberMessageExchange= $value;
		}
	}

	/**
	 * @return void
	 * @param MemberMessageExchangeType $value
	 **/
	function addMemberMessageExchange($value)
	{
		$this->MemberMessageExchange[] = $value;
	}

}
?>
