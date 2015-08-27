<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MyMessagesFolderSummaryType.php';

/**
  * Summary data for a given user's alerts and messages.
  * This includes the numbers of new alerts and messages,
  * unresolved alerts, flagged messages, and total alerts
  * and messages.
  * 
 **/

class MyMessagesSummaryType extends EbatNs_ComplexType
{
	/**
	* @var MyMessagesFolderSummaryType
	**/
	protected $FolderSummary;

	/**
	* @var int
	**/
	protected $NewAlertCount;

	/**
	* @var int
	**/
	protected $NewMessageCount;

	/**
	* @var int
	**/
	protected $UnresolvedAlertCount;

	/**
	* @var int
	**/
	protected $FlaggedMessageCount;

	/**
	* @var int
	**/
	protected $TotalAlertCount;

	/**
	* @var int
	**/
	protected $TotalMessageCount;

	/**
	* @var int
	**/
	protected $NewHighPriorityCount;

	/**
	* @var int
	**/
	protected $TotalHighPriorityCount;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MyMessagesSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'FolderSummary' =>
				array(
					'required' => false,
					'type' => 'MyMessagesFolderSummaryType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'NewAlertCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NewMessageCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UnresolvedAlertCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FlaggedMessageCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalAlertCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalMessageCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NewHighPriorityCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TotalHighPriorityCount' =>
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
	 * @return MyMessagesFolderSummaryType
	 * @param integer $index 
	 **/
	function getFolderSummary($index = null)
	{
		if ($index !== null)
		{
			return $this->FolderSummary[$index];
		}
		else
		{
			return $this->FolderSummary;
		}
	}

	/**
	 * @return void
	 * @param MyMessagesFolderSummaryType $value
	 * @param integer $index 
	 **/
	function setFolderSummary($value, $index = null)
	{
		if ($index !== null)
		{
			$this->FolderSummary[$index] = $value;
		}
		else
		{
			$this->FolderSummary= $value;
		}
	}

	/**
	 * @return void
	 * @param MyMessagesFolderSummaryType $value
	 **/
	function addFolderSummary($value)
	{
		$this->FolderSummary[] = $value;
	}

	/**
	 * @return int
	 **/
	function getNewAlertCount()
	{
		return $this->NewAlertCount;
	}

	/**
	 * @return void
	 **/
	function setNewAlertCount($value)
	{
		$this->NewAlertCount = $value;
	}

	/**
	 * @return int
	 **/
	function getNewMessageCount()
	{
		return $this->NewMessageCount;
	}

	/**
	 * @return void
	 **/
	function setNewMessageCount($value)
	{
		$this->NewMessageCount = $value;
	}

	/**
	 * @return int
	 **/
	function getUnresolvedAlertCount()
	{
		return $this->UnresolvedAlertCount;
	}

	/**
	 * @return void
	 **/
	function setUnresolvedAlertCount($value)
	{
		$this->UnresolvedAlertCount = $value;
	}

	/**
	 * @return int
	 **/
	function getFlaggedMessageCount()
	{
		return $this->FlaggedMessageCount;
	}

	/**
	 * @return void
	 **/
	function setFlaggedMessageCount($value)
	{
		$this->FlaggedMessageCount = $value;
	}

	/**
	 * @return int
	 **/
	function getTotalAlertCount()
	{
		return $this->TotalAlertCount;
	}

	/**
	 * @return void
	 **/
	function setTotalAlertCount($value)
	{
		$this->TotalAlertCount = $value;
	}

	/**
	 * @return int
	 **/
	function getTotalMessageCount()
	{
		return $this->TotalMessageCount;
	}

	/**
	 * @return void
	 **/
	function setTotalMessageCount($value)
	{
		$this->TotalMessageCount = $value;
	}

	/**
	 * @return int
	 **/
	function getNewHighPriorityCount()
	{
		return $this->NewHighPriorityCount;
	}

	/**
	 * @return void
	 **/
	function setNewHighPriorityCount($value)
	{
		$this->NewHighPriorityCount = $value;
	}

	/**
	 * @return int
	 **/
	function getTotalHighPriorityCount()
	{
		return $this->TotalHighPriorityCount;
	}

	/**
	 * @return void
	 **/
	function setTotalHighPriorityCount($value)
	{
		$this->TotalHighPriorityCount = $value;
	}

}
?>
