<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SellingManagerEmailTypeCodeType.php';
require_once 'SellingManagerEmailSentStatusCodeType.php';

/**
  * Contains list of Email log.
  * 
 **/

class SellingManagerEmailLogType extends EbatNs_ComplexType
{
	/**
	* @var SellingManagerEmailTypeCodeType
	**/
	protected $EmailType;

	/**
	* @var string
	**/
	protected $CustomEmailName;

	/**
	* @var SellingManagerEmailSentStatusCodeType
	**/
	protected $EmailState;

	/**
	* @var dateTime
	**/
	protected $EventTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerEmailLogType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'EmailType' =>
				array(
					'required' => false,
					'type' => 'SellingManagerEmailTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CustomEmailName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EmailState' =>
				array(
					'required' => false,
					'type' => 'SellingManagerEmailSentStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EventTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
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
	 * @return SellingManagerEmailTypeCodeType
	 **/
	function getEmailType()
	{
		return $this->EmailType;
	}

	/**
	 * @return void
	 **/
	function setEmailType($value)
	{
		$this->EmailType = $value;
	}

	/**
	 * @return string
	 **/
	function getCustomEmailName()
	{
		return $this->CustomEmailName;
	}

	/**
	 * @return void
	 **/
	function setCustomEmailName($value)
	{
		$this->CustomEmailName = $value;
	}

	/**
	 * @return SellingManagerEmailSentStatusCodeType
	 **/
	function getEmailState()
	{
		return $this->EmailState;
	}

	/**
	 * @return void
	 **/
	function setEmailState($value)
	{
		$this->EmailState = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getEventTime()
	{
		return $this->EventTime;
	}

	/**
	 * @return void
	 **/
	function setEventTime($value)
	{
		$this->EventTime = $value;
	}

}
?>
