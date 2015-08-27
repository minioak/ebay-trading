<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type used by the <b>CancelDetail</b> container, which consists of details related to an eBay order that has been cancelled or is in the process of possibly being cancelled.
  * 
 **/

class CancelDetailType extends EbatNs_ComplexType
{
	/**
	* @var token
	**/
	protected $CancelReason;

	/**
	* @var string
	**/
	protected $CancelReasonDetails;

	/**
	* @var token
	**/
	protected $CancelIntiator;

	/**
	* @var dateTime
	**/
	protected $CancelIntiationDate;

	/**
	* @var dateTime
	**/
	protected $CancelCompleteDate;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CancelDetailType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CancelReason' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CancelReasonDetails' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CancelIntiator' =>
				array(
					'required' => false,
					'type' => 'token',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CancelIntiationDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CancelCompleteDate' =>
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
	 * @return token
	 **/
	function getCancelReason()
	{
		return $this->CancelReason;
	}

	/**
	 * @return void
	 **/
	function setCancelReason($value)
	{
		$this->CancelReason = $value;
	}

	/**
	 * @return string
	 **/
	function getCancelReasonDetails()
	{
		return $this->CancelReasonDetails;
	}

	/**
	 * @return void
	 **/
	function setCancelReasonDetails($value)
	{
		$this->CancelReasonDetails = $value;
	}

	/**
	 * @return token
	 **/
	function getCancelIntiator()
	{
		return $this->CancelIntiator;
	}

	/**
	 * @return void
	 **/
	function setCancelIntiator($value)
	{
		$this->CancelIntiator = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getCancelIntiationDate()
	{
		return $this->CancelIntiationDate;
	}

	/**
	 * @return void
	 **/
	function setCancelIntiationDate($value)
	{
		$this->CancelIntiationDate = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getCancelCompleteDate()
	{
		return $this->CancelCompleteDate;
	}

	/**
	 * @return void
	 **/
	function setCancelCompleteDate($value)
	{
		$this->CancelCompleteDate = $value;
	}

}
?>
