<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Summary information about notifications delivered, failed, errors, queued for
  * a given application ID and time period.
  * 
 **/

class NotificationStatisticsType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $DeliveredCount;

	/**
	* @var int
	**/
	protected $QueuedNewCount;

	/**
	* @var int
	**/
	protected $QueuedPendingCount;

	/**
	* @var int
	**/
	protected $ExpiredCount;

	/**
	* @var int
	**/
	protected $ErrorCount;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('NotificationStatisticsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DeliveredCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QueuedNewCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QueuedPendingCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpiredCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ErrorCount' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return int
	 **/
	function getDeliveredCount()
	{
		return $this->DeliveredCount;
	}

	/**
	 * @return void
	 **/
	function setDeliveredCount($value)
	{
		$this->DeliveredCount = $value;
	}

	/**
	 * @return int
	 **/
	function getQueuedNewCount()
	{
		return $this->QueuedNewCount;
	}

	/**
	 * @return void
	 **/
	function setQueuedNewCount($value)
	{
		$this->QueuedNewCount = $value;
	}

	/**
	 * @return int
	 **/
	function getQueuedPendingCount()
	{
		return $this->QueuedPendingCount;
	}

	/**
	 * @return void
	 **/
	function setQueuedPendingCount($value)
	{
		$this->QueuedPendingCount = $value;
	}

	/**
	 * @return int
	 **/
	function getExpiredCount()
	{
		return $this->ExpiredCount;
	}

	/**
	 * @return void
	 **/
	function setExpiredCount($value)
	{
		$this->ExpiredCount = $value;
	}

	/**
	 * @return int
	 **/
	function getErrorCount()
	{
		return $this->ErrorCount;
	}

	/**
	 * @return void
	 **/
	function setErrorCount($value)
	{
		$this->ErrorCount = $value;
	}

}
?>
