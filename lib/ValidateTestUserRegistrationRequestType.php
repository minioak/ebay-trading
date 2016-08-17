<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  * Requests to enable a test user to sell items in the Sandbox environment.
  * 
 **/

class ValidateTestUserRegistrationRequestType extends AbstractRequestType
{
	/**
	* @var int
	**/
	protected $FeedbackScore;

	/**
	* @var dateTime
	**/
	protected $RegistrationDate;

	/**
	* @var boolean
	**/
	protected $SubscribeSA;

	/**
	* @var boolean
	**/
	protected $SubscribeSAPro;

	/**
	* @var boolean
	**/
	protected $SubscribeSM;

	/**
	* @var boolean
	**/
	protected $SubscribeSMPro;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ValidateTestUserRegistrationRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'FeedbackScore' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RegistrationDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SubscribeSA' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SubscribeSAPro' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SubscribeSM' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SubscribeSMPro' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	function getFeedbackScore()
	{
		return $this->FeedbackScore;
	}

	/**
	 * @return void
	 **/
	function setFeedbackScore($value)
	{
		$this->FeedbackScore = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getRegistrationDate()
	{
		return $this->RegistrationDate;
	}

	/**
	 * @return void
	 **/
	function setRegistrationDate($value)
	{
		$this->RegistrationDate = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSubscribeSA()
	{
		return $this->SubscribeSA;
	}

	/**
	 * @return void
	 **/
	function setSubscribeSA($value)
	{
		$this->SubscribeSA = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSubscribeSAPro()
	{
		return $this->SubscribeSAPro;
	}

	/**
	 * @return void
	 **/
	function setSubscribeSAPro($value)
	{
		$this->SubscribeSAPro = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSubscribeSM()
	{
		return $this->SubscribeSM;
	}

	/**
	 * @return void
	 **/
	function setSubscribeSM($value)
	{
		$this->SubscribeSM = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSubscribeSMPro()
	{
		return $this->SubscribeSMPro;
	}

	/**
	 * @return void
	 **/
	function setSubscribeSMPro($value)
	{
		$this->SubscribeSMPro = $value;
	}

}
?>
