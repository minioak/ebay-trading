<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AccessRuleCurrentStatusCodeType.php';
require_once 'AccessRuleStatusCodeType.php';

/**
  * Contains the definition of a rule that governs the number of times your
  * application can access the eBay API (invoke a call) on an hourly, daily, or
  * periodic basis.
  * 
 **/

class ApiAccessRuleType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $CallName;

	/**
	* @var boolean
	**/
	protected $CountsTowardAggregate;

	/**
	* @var long
	**/
	protected $DailyHardLimit;

	/**
	* @var long
	**/
	protected $DailySoftLimit;

	/**
	* @var long
	**/
	protected $DailyUsage;

	/**
	* @var long
	**/
	protected $HourlyHardLimit;

	/**
	* @var long
	**/
	protected $HourlySoftLimit;

	/**
	* @var long
	**/
	protected $HourlyUsage;

	/**
	* @var int
	**/
	protected $Period;

	/**
	* @var long
	**/
	protected $PeriodicHardLimit;

	/**
	* @var long
	**/
	protected $PeriodicSoftLimit;

	/**
	* @var long
	**/
	protected $PeriodicUsage;

	/**
	* @var dateTime
	**/
	protected $PeriodicStartDate;

	/**
	* @var dateTime
	**/
	protected $ModTime;

	/**
	* @var AccessRuleCurrentStatusCodeType
	**/
	protected $RuleCurrentStatus;

	/**
	* @var AccessRuleStatusCodeType
	**/
	protected $RuleStatus;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ApiAccessRuleType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CallName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CountsTowardAggregate' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DailyHardLimit' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DailySoftLimit' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DailyUsage' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HourlyHardLimit' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HourlySoftLimit' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HourlyUsage' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Period' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PeriodicHardLimit' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PeriodicSoftLimit' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PeriodicUsage' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PeriodicStartDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ModTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RuleCurrentStatus' =>
				array(
					'required' => false,
					'type' => 'AccessRuleCurrentStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RuleStatus' =>
				array(
					'required' => false,
					'type' => 'AccessRuleStatusCodeType',
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
	 * @return string
	 **/
	function getCallName()
	{
		return $this->CallName;
	}

	/**
	 * @return void
	 **/
	function setCallName($value)
	{
		$this->CallName = $value;
	}

	/**
	 * @return boolean
	 **/
	function getCountsTowardAggregate()
	{
		return $this->CountsTowardAggregate;
	}

	/**
	 * @return void
	 **/
	function setCountsTowardAggregate($value)
	{
		$this->CountsTowardAggregate = $value;
	}

	/**
	 * @return long
	 **/
	function getDailyHardLimit()
	{
		return $this->DailyHardLimit;
	}

	/**
	 * @return void
	 **/
	function setDailyHardLimit($value)
	{
		$this->DailyHardLimit = $value;
	}

	/**
	 * @return long
	 **/
	function getDailySoftLimit()
	{
		return $this->DailySoftLimit;
	}

	/**
	 * @return void
	 **/
	function setDailySoftLimit($value)
	{
		$this->DailySoftLimit = $value;
	}

	/**
	 * @return long
	 **/
	function getDailyUsage()
	{
		return $this->DailyUsage;
	}

	/**
	 * @return void
	 **/
	function setDailyUsage($value)
	{
		$this->DailyUsage = $value;
	}

	/**
	 * @return long
	 **/
	function getHourlyHardLimit()
	{
		return $this->HourlyHardLimit;
	}

	/**
	 * @return void
	 **/
	function setHourlyHardLimit($value)
	{
		$this->HourlyHardLimit = $value;
	}

	/**
	 * @return long
	 **/
	function getHourlySoftLimit()
	{
		return $this->HourlySoftLimit;
	}

	/**
	 * @return void
	 **/
	function setHourlySoftLimit($value)
	{
		$this->HourlySoftLimit = $value;
	}

	/**
	 * @return long
	 **/
	function getHourlyUsage()
	{
		return $this->HourlyUsage;
	}

	/**
	 * @return void
	 **/
	function setHourlyUsage($value)
	{
		$this->HourlyUsage = $value;
	}

	/**
	 * @return int
	 **/
	function getPeriod()
	{
		return $this->Period;
	}

	/**
	 * @return void
	 **/
	function setPeriod($value)
	{
		$this->Period = $value;
	}

	/**
	 * @return long
	 **/
	function getPeriodicHardLimit()
	{
		return $this->PeriodicHardLimit;
	}

	/**
	 * @return void
	 **/
	function setPeriodicHardLimit($value)
	{
		$this->PeriodicHardLimit = $value;
	}

	/**
	 * @return long
	 **/
	function getPeriodicSoftLimit()
	{
		return $this->PeriodicSoftLimit;
	}

	/**
	 * @return void
	 **/
	function setPeriodicSoftLimit($value)
	{
		$this->PeriodicSoftLimit = $value;
	}

	/**
	 * @return long
	 **/
	function getPeriodicUsage()
	{
		return $this->PeriodicUsage;
	}

	/**
	 * @return void
	 **/
	function setPeriodicUsage($value)
	{
		$this->PeriodicUsage = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getPeriodicStartDate()
	{
		return $this->PeriodicStartDate;
	}

	/**
	 * @return void
	 **/
	function setPeriodicStartDate($value)
	{
		$this->PeriodicStartDate = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getModTime()
	{
		return $this->ModTime;
	}

	/**
	 * @return void
	 **/
	function setModTime($value)
	{
		$this->ModTime = $value;
	}

	/**
	 * @return AccessRuleCurrentStatusCodeType
	 **/
	function getRuleCurrentStatus()
	{
		return $this->RuleCurrentStatus;
	}

	/**
	 * @return void
	 **/
	function setRuleCurrentStatus($value)
	{
		$this->RuleCurrentStatus = $value;
	}

	/**
	 * @return AccessRuleStatusCodeType
	 **/
	function getRuleStatus()
	{
		return $this->RuleStatus;
	}

	/**
	 * @return void
	 **/
	function setRuleStatus($value)
	{
		$this->RuleStatus = $value;
	}

}
?>
