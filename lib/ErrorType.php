<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SeverityCodeType.php';
require_once 'ErrorParameterType.php';
require_once 'ErrorClassificationCodeType.php';

/**
  * These are request errors (as opposed to system errors) that occur due to problems
  * with business-level data (e.g., an invalid combination of arguments) that
  * the application passed in.
  * 
 **/

class ErrorType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $ShortMessage;

	/**
	* @var string
	**/
	protected $LongMessage;

	/**
	* @var token
	**/
	protected $ErrorCode;

	/**
	* @var boolean
	**/
	protected $UserDisplayHint;

	/**
	* @var SeverityCodeType
	**/
	protected $SeverityCode;

	/**
	* @var ErrorParameterType
	**/
	protected $ErrorParameters;

	/**
	* @var ErrorClassificationCodeType
	**/
	protected $ErrorClassification;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ErrorType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ShortMessage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LongMessage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ErrorCode' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserDisplayHint' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SeverityCode' =>
				array(
					'required' => false,
					'type' => 'SeverityCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ErrorParameters' =>
				array(
					'required' => false,
					'type' => 'ErrorParameterType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ErrorClassification' =>
				array(
					'required' => false,
					'type' => 'ErrorClassificationCodeType',
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
	function getShortMessage()
	{
		return $this->ShortMessage;
	}

	/**
	 * @return void
	 **/
	function setShortMessage($value)
	{
		$this->ShortMessage = $value;
	}

	/**
	 * @return string
	 **/
	function getLongMessage()
	{
		return $this->LongMessage;
	}

	/**
	 * @return void
	 **/
	function setLongMessage($value)
	{
		$this->LongMessage = $value;
	}

	/**
	 * @return token
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
	 * @return boolean
	 **/
	function getUserDisplayHint()
	{
		return $this->UserDisplayHint;
	}

	/**
	 * @return void
	 **/
	function setUserDisplayHint($value)
	{
		$this->UserDisplayHint = $value;
	}

	/**
	 * @return SeverityCodeType
	 **/
	function getSeverityCode()
	{
		return $this->SeverityCode;
	}

	/**
	 * @return void
	 **/
	function setSeverityCode($value)
	{
		$this->SeverityCode = $value;
	}

	/**
	 * @return ErrorParameterType
	 * @param integer $index 
	 **/
	function getErrorParameters($index = null)
	{
		if ($index !== null)
		{
			return $this->ErrorParameters[$index];
		}
		else
		{
			return $this->ErrorParameters;
		}
	}

	/**
	 * @return void
	 * @param ErrorParameterType $value
	 * @param integer $index 
	 **/
	function setErrorParameters($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ErrorParameters[$index] = $value;
		}
		else
		{
			$this->ErrorParameters= $value;
		}
	}

	/**
	 * @return void
	 * @param ErrorParameterType $value
	 **/
	function addErrorParameters($value)
	{
		$this->ErrorParameters[] = $value;
	}

	/**
	 * @return ErrorClassificationCodeType
	 **/
	function getErrorClassification()
	{
		return $this->ErrorClassification;
	}

	/**
	 * @return void
	 **/
	function setErrorClassification($value)
	{
		$this->ErrorClassification = $value;
	}

}
?>
