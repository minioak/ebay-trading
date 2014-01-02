<?php
// autogenerated file 30.09.2013 15:20
// $Id: $
// $Log: $
//
//
require_once 'MyMessagesMessageIDArrayType.php';
require_once 'MyMessagesAlertIDArrayType.php';
require_once 'AbstractRequestType.php';

/**
 * Sets the read state for messages, sets the flagged state of messages,and moves 
 * messages into and out of folders. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReviseMyMessagesRequestType.html
 *
 */
class ReviseMyMessagesRequestType extends AbstractRequestType
{
	/**
	 * @var MyMessagesMessageIDArrayType
	 */
	protected $MessageIDs;
	/**
	 * @var MyMessagesAlertIDArrayType
	 */
	protected $AlertIDs;
	/**
	 * @var boolean
	 */
	protected $Read;
	/**
	 * @var boolean
	 */
	protected $Flagged;
	/**
	 * @var long
	 */
	protected $FolderID;

	/**
	 * @return MyMessagesMessageIDArrayType
	 */
	function getMessageIDs()
	{
		return $this->MessageIDs;
	}
	/**
	 * @return void
	 * @param MyMessagesMessageIDArrayType $value 
	 */
	function setMessageIDs($value)
	{
		$this->MessageIDs = $value;
	}
	/**
	 * @return MyMessagesAlertIDArrayType
	 */
	function getAlertIDs()
	{
		return $this->AlertIDs;
	}
	/**
	 * @return void
	 * @param MyMessagesAlertIDArrayType $value 
	 */
	function setAlertIDs($value)
	{
		$this->AlertIDs = $value;
	}
	/**
	 * @return boolean
	 */
	function getRead()
	{
		return $this->Read;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setRead($value)
	{
		$this->Read = $value;
	}
	/**
	 * @return boolean
	 */
	function getFlagged()
	{
		return $this->Flagged;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setFlagged($value)
	{
		$this->Flagged = $value;
	}
	/**
	 * @return long
	 */
	function getFolderID()
	{
		return $this->FolderID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setFolderID($value)
	{
		$this->FolderID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReviseMyMessagesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'MessageIDs' =>
					array(
						'required' => false,
						'type' => 'MyMessagesMessageIDArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AlertIDs' =>
					array(
						'required' => false,
						'type' => 'MyMessagesAlertIDArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Read' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Flagged' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FolderID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
