<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MessageTypeCodeType.php';
require_once 'QuestionTypeCodeType.php';
require_once 'MessageMediaType.php';

/**
  * Container for individual message information.
  * 
 **/

class MemberMessageType extends EbatNs_ComplexType
{
	/**
	* @var MessageTypeCodeType
	**/
	protected $MessageType;

	/**
	* @var QuestionTypeCodeType
	**/
	protected $QuestionType;

	/**
	* @var boolean
	**/
	protected $EmailCopyToSender;

	/**
	* @var boolean
	**/
	protected $HideSendersEmailAddress;

	/**
	* @var boolean
	**/
	protected $DisplayToPublic;

	/**
	* @var string
	**/
	protected $SenderID;

	/**
	* @var string
	**/
	protected $SenderEmail;

	/**
	* @var string
	**/
	protected $RecipientID;

	/**
	* @var string
	**/
	protected $Subject;

	/**
	* @var string
	**/
	protected $Body;

	/**
	* @var string
	**/
	protected $MessageID;

	/**
	* @var string
	**/
	protected $ParentMessageID;

	/**
	* @var MessageMediaType
	**/
	protected $MessageMedia;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MemberMessageType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MessageType' =>
				array(
					'required' => false,
					'type' => 'MessageTypeCodeType',
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
				'EmailCopyToSender' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HideSendersEmailAddress' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisplayToPublic' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SenderID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SenderEmail' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RecipientID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'Subject' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Body' =>
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
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ParentMessageID' =>
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
	function getEmailCopyToSender()
	{
		return $this->EmailCopyToSender;
	}

	/**
	 * @return void
	 **/
	function setEmailCopyToSender($value)
	{
		$this->EmailCopyToSender = $value;
	}

	/**
	 * @return boolean
	 **/
	function getHideSendersEmailAddress()
	{
		return $this->HideSendersEmailAddress;
	}

	/**
	 * @return void
	 **/
	function setHideSendersEmailAddress($value)
	{
		$this->HideSendersEmailAddress = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDisplayToPublic()
	{
		return $this->DisplayToPublic;
	}

	/**
	 * @return void
	 **/
	function setDisplayToPublic($value)
	{
		$this->DisplayToPublic = $value;
	}

	/**
	 * @return string
	 **/
	function getSenderID()
	{
		return $this->SenderID;
	}

	/**
	 * @return void
	 **/
	function setSenderID($value)
	{
		$this->SenderID = $value;
	}

	/**
	 * @return string
	 **/
	function getSenderEmail()
	{
		return $this->SenderEmail;
	}

	/**
	 * @return void
	 **/
	function setSenderEmail($value)
	{
		$this->SenderEmail = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getRecipientID($index = null)
	{
		if ($index !== null)
		{
			return $this->RecipientID[$index];
		}
		else
		{
			return $this->RecipientID;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setRecipientID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->RecipientID[$index] = $value;
		}
		else
		{
			$this->RecipientID= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addRecipientID($value)
	{
		$this->RecipientID[] = $value;
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
	function getBody()
	{
		return $this->Body;
	}

	/**
	 * @return void
	 **/
	function setBody($value)
	{
		$this->Body = $value;
	}

	/**
	 * @return string
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
	function getParentMessageID()
	{
		return $this->ParentMessageID;
	}

	/**
	 * @return void
	 **/
	function setParentMessageID($value)
	{
		$this->ParentMessageID = $value;
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
