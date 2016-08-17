<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'UUIDType.php';
require_once 'InvocationStatusType.php';

/**
  * This type is used by the <b>DuplicateInvocationDetails</b> container that is returned in some calls if a duplicate <b>InvocationID</b> or <b>InvocationTrackingID</b> is used in the call request.
  * 
 **/

class DuplicateInvocationDetailsType extends EbatNs_ComplexType
{
	/**
	* @var UUIDType
	**/
	protected $DuplicateInvocationID;

	/**
	* @var InvocationStatusType
	**/
	protected $Status;

	/**
	* @var string
	**/
	protected $InvocationTrackingID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DuplicateInvocationDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DuplicateInvocationID' =>
				array(
					'required' => false,
					'type' => 'UUIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Status' =>
				array(
					'required' => false,
					'type' => 'InvocationStatusType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'InvocationTrackingID' =>
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
	 * @return UUIDType
	 **/
	function getDuplicateInvocationID()
	{
		return $this->DuplicateInvocationID;
	}

	/**
	 * @return void
	 **/
	function setDuplicateInvocationID($value)
	{
		$this->DuplicateInvocationID = $value;
	}

	/**
	 * @return InvocationStatusType
	 **/
	function getStatus()
	{
		return $this->Status;
	}

	/**
	 * @return void
	 **/
	function setStatus($value)
	{
		$this->Status = $value;
	}

	/**
	 * @return string
	 **/
	function getInvocationTrackingID()
	{
		return $this->InvocationTrackingID;
	}

	/**
	 * @return void
	 **/
	function setInvocationTrackingID($value)
	{
		$this->InvocationTrackingID = $value;
	}

}
?>
