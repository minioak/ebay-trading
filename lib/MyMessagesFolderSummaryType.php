<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Summary details for a specified My Messages folder.
  * 
 **/

class MyMessagesFolderSummaryType extends EbatNs_ComplexType
{
	/**
	* @var long
	**/
	protected $FolderID;

	/**
	* @var string
	**/
	protected $FolderName;

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
		parent::__construct('MyMessagesFolderSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'FolderID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FolderName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
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
	 * @return long
	 **/
	function getFolderID()
	{
		return $this->FolderID;
	}

	/**
	 * @return void
	 **/
	function setFolderID($value)
	{
		$this->FolderID = $value;
	}

	/**
	 * @return string
	 **/
	function getFolderName()
	{
		return $this->FolderName;
	}

	/**
	 * @return void
	 **/
	function setFolderName($value)
	{
		$this->FolderName = $value;
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
