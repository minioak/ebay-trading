<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MyMessagesAlertIDType.php';
require_once 'MyMessagesAlertResolutionStatusCode.php';
require_once 'ItemIDType.php';
require_once 'MyMessagesResponseDetailsType.php';
require_once 'MyMessagesForwardDetailsType.php';
require_once 'MyMessagesFolderType.php';

/**
  * This type is deprecated because <b>MyMessagesAlert*</b> are deprecated.
  * 
  * 
 **/

class MyMessagesAlertType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Sender;

	/**
	* @var string
	**/
	protected $RecipientUserID;

	/**
	* @var string
	**/
	protected $Subject;

	/**
	* @var string
	**/
	protected $Priority;

	/**
	* @var MyMessagesAlertIDType
	**/
	protected $AlertID;

	/**
	* @var string
	**/
	protected $ExternalAlertID;

	/**
	* @var string
	**/
	protected $ContentType;

	/**
	* @var string
	**/
	protected $Text;

	/**
	* @var MyMessagesAlertResolutionStatusCode
	**/
	protected $ResolutionStatus;

	/**
	* @var boolean
	**/
	protected $Read;

	/**
	* @var dateTime
	**/
	protected $CreationDate;

	/**
	* @var dateTime
	**/
	protected $ReceiveDate;

	/**
	* @var dateTime
	**/
	protected $ExpirationDate;

	/**
	* @var dateTime
	**/
	protected $ResolutionDate;

	/**
	* @var dateTime
	**/
	protected $LastReadDate;

	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var boolean
	**/
	protected $IsTimedResolution;

	/**
	* @var string
	**/
	protected $ActionURL;

	/**
	* @var MyMessagesResponseDetailsType
	**/
	protected $ResponseDetails;

	/**
	* @var MyMessagesForwardDetailsType
	**/
	protected $ForwardDetails;

	/**
	* @var MyMessagesFolderType
	**/
	protected $Folder;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MyMessagesAlertType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Sender' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RecipientUserID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Subject' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Priority' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AlertID' =>
				array(
					'required' => false,
					'type' => 'MyMessagesAlertIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalAlertID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ContentType' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Text' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ResolutionStatus' =>
				array(
					'required' => false,
					'type' => 'MyMessagesAlertResolutionStatusCode',
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
				'CreationDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReceiveDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExpirationDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ResolutionDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LastReadDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IsTimedResolution' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ActionURL' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ResponseDetails' =>
				array(
					'required' => false,
					'type' => 'MyMessagesResponseDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ForwardDetails' =>
				array(
					'required' => false,
					'type' => 'MyMessagesForwardDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Folder' =>
				array(
					'required' => false,
					'type' => 'MyMessagesFolderType',
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
	function getSender()
	{
		return $this->Sender;
	}

	/**
	 * @return void
	 **/
	function setSender($value)
	{
		$this->Sender = $value;
	}

	/**
	 * @return string
	 **/
	function getRecipientUserID()
	{
		return $this->RecipientUserID;
	}

	/**
	 * @return void
	 **/
	function setRecipientUserID($value)
	{
		$this->RecipientUserID = $value;
	}

	/**
	 * @return string
	 **/
	function getSubject()
	{
		return $this->Subject;
	}

	/**
	 * @return void
	 **/
	function setSubject($value)
	{
		$this->Subject = $value;
	}

	/**
	 * @return string
	 **/
	function getPriority()
	{
		return $this->Priority;
	}

	/**
	 * @return void
	 **/
	function setPriority($value)
	{
		$this->Priority = $value;
	}

	/**
	 * @return MyMessagesAlertIDType
	 **/
	function getAlertID()
	{
		return $this->AlertID;
	}

	/**
	 * @return void
	 **/
	function setAlertID($value)
	{
		$this->AlertID = $value;
	}

	/**
	 * @return string
	 **/
	function getExternalAlertID()
	{
		return $this->ExternalAlertID;
	}

	/**
	 * @return void
	 **/
	function setExternalAlertID($value)
	{
		$this->ExternalAlertID = $value;
	}

	/**
	 * @return string
	 **/
	function getContentType()
	{
		return $this->ContentType;
	}

	/**
	 * @return void
	 **/
	function setContentType($value)
	{
		$this->ContentType = $value;
	}

	/**
	 * @return string
	 **/
	function getText()
	{
		return $this->Text;
	}

	/**
	 * @return void
	 **/
	function setText($value)
	{
		$this->Text = $value;
	}

	/**
	 * @return MyMessagesAlertResolutionStatusCode
	 **/
	function getResolutionStatus()
	{
		return $this->ResolutionStatus;
	}

	/**
	 * @return void
	 **/
	function setResolutionStatus($value)
	{
		$this->ResolutionStatus = $value;
	}

	/**
	 * @return boolean
	 **/
	function getRead()
	{
		return $this->Read;
	}

	/**
	 * @return void
	 **/
	function setRead($value)
	{
		$this->Read = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getCreationDate()
	{
		return $this->CreationDate;
	}

	/**
	 * @return void
	 **/
	function setCreationDate($value)
	{
		$this->CreationDate = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getReceiveDate()
	{
		return $this->ReceiveDate;
	}

	/**
	 * @return void
	 **/
	function setReceiveDate($value)
	{
		$this->ReceiveDate = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getExpirationDate()
	{
		return $this->ExpirationDate;
	}

	/**
	 * @return void
	 **/
	function setExpirationDate($value)
	{
		$this->ExpirationDate = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getResolutionDate()
	{
		return $this->ResolutionDate;
	}

	/**
	 * @return void
	 **/
	function setResolutionDate($value)
	{
		$this->ResolutionDate = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getLastReadDate()
	{
		return $this->LastReadDate;
	}

	/**
	 * @return void
	 **/
	function setLastReadDate($value)
	{
		$this->LastReadDate = $value;
	}

	/**
	 * @return ItemIDType
	 **/
	function getItemID()
	{
		return $this->ItemID;
	}

	/**
	 * @return void
	 **/
	function setItemID($value)
	{
		$this->ItemID = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIsTimedResolution()
	{
		return $this->IsTimedResolution;
	}

	/**
	 * @return void
	 **/
	function setIsTimedResolution($value)
	{
		$this->IsTimedResolution = $value;
	}

	/**
	 * @return string
	 **/
	function getActionURL()
	{
		return $this->ActionURL;
	}

	/**
	 * @return void
	 **/
	function setActionURL($value)
	{
		$this->ActionURL = $value;
	}

	/**
	 * @return MyMessagesResponseDetailsType
	 **/
	function getResponseDetails()
	{
		return $this->ResponseDetails;
	}

	/**
	 * @return void
	 **/
	function setResponseDetails($value)
	{
		$this->ResponseDetails = $value;
	}

	/**
	 * @return MyMessagesForwardDetailsType
	 **/
	function getForwardDetails()
	{
		return $this->ForwardDetails;
	}

	/**
	 * @return void
	 **/
	function setForwardDetails($value)
	{
		$this->ForwardDetails = $value;
	}

	/**
	 * @return MyMessagesFolderType
	 **/
	function getFolder()
	{
		return $this->Folder;
	}

	/**
	 * @return void
	 **/
	function setFolder($value)
	{
		$this->Folder = $value;
	}

}
?>
