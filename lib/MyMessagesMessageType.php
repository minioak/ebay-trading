<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MyMessagesMessageIDType.php';
require_once 'ItemIDType.php';
require_once 'MyMessagesResponseDetailsType.php';
require_once 'MyMessagesForwardDetailsType.php';
require_once 'MyMessagesFolderType.php';
require_once 'MessageTypeCodeType.php';
require_once 'ListingStatusCodeType.php';
require_once 'QuestionTypeCodeType.php';
require_once 'MessageMediaType.php';

/**
  * Container for the message information for each message specified in
  * MessageIDs. The amount and type of information returned varies based on
  * the requested detail level.
  * 
 **/

class MyMessagesMessageType extends EbatNs_ComplexType
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
	protected $SendToName;

	/**
	* @var string
	**/
	protected $Subject;

	/**
	* @var MyMessagesMessageIDType
	**/
	protected $MessageID;

	/**
	* @var string
	**/
	protected $ExternalMessageID;

	/**
	* @var string
	**/
	protected $ContentType;

	/**
	* @var string
	**/
	protected $Text;

	/**
	* @var boolean
	**/
	protected $Flagged;

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
	* @var ItemIDType
	**/
	protected $ItemID;

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
	* @var string
	**/
	protected $Content;

	/**
	* @var MessageTypeCodeType
	**/
	protected $MessageType;

	/**
	* @var ListingStatusCodeType
	**/
	protected $ListingStatus;

	/**
	* @var QuestionTypeCodeType
	**/
	protected $QuestionType;

	/**
	* @var boolean
	**/
	protected $Replied;

	/**
	* @var boolean
	**/
	protected $HighPriority;

	/**
	* @var dateTime
	**/
	protected $ItemEndTime;

	/**
	* @var string
	**/
	protected $ItemTitle;

	/**
	* @var MessageMediaType
	**/
	protected $MessageMedia;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MyMessagesMessageType', 'urn:ebay:apis:eBLBaseComponents');
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
				'SendToName' =>
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
				'MessageID' =>
				array(
					'required' => false,
					'type' => 'MyMessagesMessageIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalMessageID' =>
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
				'Flagged' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				),
				'Content' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MessageType' =>
				array(
					'required' => false,
					'type' => 'MessageTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListingStatus' =>
				array(
					'required' => false,
					'type' => 'ListingStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'QuestionType' =>
				array(
					'required' => false,
					'type' => 'QuestionTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Replied' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HighPriority' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemEndTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemTitle' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MessageMedia' =>
				array(
					'required' => false,
					'type' => 'MessageMediaType',
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
	function getSendToName()
	{
		return $this->SendToName;
	}

	/**
	 * @return void
	 **/
	function setSendToName($value)
	{
		$this->SendToName = $value;
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
	 * @return MyMessagesMessageIDType
	 **/
	function getMessageID()
	{
		return $this->MessageID;
	}

	/**
	 * @return void
	 **/
	function setMessageID($value)
	{
		$this->MessageID = $value;
	}

	/**
	 * @return string
	 **/
	function getExternalMessageID()
	{
		return $this->ExternalMessageID;
	}

	/**
	 * @return void
	 **/
	function setExternalMessageID($value)
	{
		$this->ExternalMessageID = $value;
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
	 * @return boolean
	 **/
	function getFlagged()
	{
		return $this->Flagged;
	}

	/**
	 * @return void
	 **/
	function setFlagged($value)
	{
		$this->Flagged = $value;
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

	/**
	 * @return string
	 **/
	function getContent()
	{
		return $this->Content;
	}

	/**
	 * @return void
	 **/
	function setContent($value)
	{
		$this->Content = $value;
	}

	/**
	 * @return MessageTypeCodeType
	 **/
	function getMessageType()
	{
		return $this->MessageType;
	}

	/**
	 * @return void
	 **/
	function setMessageType($value)
	{
		$this->MessageType = $value;
	}

	/**
	 * @return ListingStatusCodeType
	 **/
	function getListingStatus()
	{
		return $this->ListingStatus;
	}

	/**
	 * @return void
	 **/
	function setListingStatus($value)
	{
		$this->ListingStatus = $value;
	}

	/**
	 * @return QuestionTypeCodeType
	 **/
	function getQuestionType()
	{
		return $this->QuestionType;
	}

	/**
	 * @return void
	 **/
	function setQuestionType($value)
	{
		$this->QuestionType = $value;
	}

	/**
	 * @return boolean
	 **/
	function getReplied()
	{
		return $this->Replied;
	}

	/**
	 * @return void
	 **/
	function setReplied($value)
	{
		$this->Replied = $value;
	}

	/**
	 * @return boolean
	 **/
	function getHighPriority()
	{
		return $this->HighPriority;
	}

	/**
	 * @return void
	 **/
	function setHighPriority($value)
	{
		$this->HighPriority = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getItemEndTime()
	{
		return $this->ItemEndTime;
	}

	/**
	 * @return void
	 **/
	function setItemEndTime($value)
	{
		$this->ItemEndTime = $value;
	}

	/**
	 * @return string
	 **/
	function getItemTitle()
	{
		return $this->ItemTitle;
	}

	/**
	 * @return void
	 **/
	function setItemTitle($value)
	{
		$this->ItemTitle = $value;
	}

	/**
	 * @return MessageMediaType
	 * @param integer $index 
	 **/
	function getMessageMedia($index = null)
	{
		if ($index !== null)
		{
			return $this->MessageMedia[$index];
		}
		else
		{
			return $this->MessageMedia;
		}
	}

	/**
	 * @return void
	 * @param MessageMediaType $value
	 * @param integer $index 
	 **/
	function setMessageMedia($value, $index = null)
	{
		if ($index !== null)
		{
			$this->MessageMedia[$index] = $value;
		}
		else
		{
			$this->MessageMedia= $value;
		}
	}

	/**
	 * @return void
	 * @param MessageMediaType $value
	 **/
	function addMessageMedia($value)
	{
		$this->MessageMedia[] = $value;
	}

}
?>
