<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * SOAP faults are used to indicate that an infrastructure error has occurred,
  * such as a problem on eBay's side with database or server going down, or a
  * problem with the client or server-side SOAP framework.
  * 
 **/

class FaultDetailsType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $ErrorCode;

	/**
	* @var string
	**/
	protected $Severity;

	/**
	* @var string
	**/
	protected $DetailedMessage;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('FaultDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ErrorCode' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Severity' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DetailedMessage' =>
				array(
					'required' => false,
					'type' => 'string',
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
	 * @return string
	 **/
	function getErrorCode()
	{
		return $this->ErrorCode;
	}

	/**
	 * @return void
	 **/
	function setErrorCode($value)
	{
		$this->ErrorCode = $value;
	}

	/**
	 * @return string
	 **/
	function getSeverity()
	{
		return $this->Severity;
	}

	/**
	 * @return void
	 **/
	function setSeverity($value)
	{
		$this->Severity = $value;
	}

	/**
	 * @return string
	 **/
	function getDetailedMessage()
	{
		return $this->DetailedMessage;
	}

	/**
	 * @return void
	 **/
	function setDetailedMessage($value)
	{
		$this->DetailedMessage = $value;
	}

}
?>
