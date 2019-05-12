<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Time zone details about a region or location to which the seller is willing to
  * ship.
  * 
 **/

class TimeZoneDetailsType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $TimeZoneID;

	/**
	* @var string
	**/
	protected $StandardLabel;

	/**
	* @var string
	**/
	protected $StandardOffset;

	/**
	* @var string
	**/
	protected $DaylightSavingsLabel;

	/**
	* @var string
	**/
	protected $DaylightSavingsOffset;

	/**
	* @var boolean
	**/
	protected $DaylightSavingsInEffect;

	/**
	* @var string
	**/
	protected $DetailVersion;

	/**
	* @var dateTime
	**/
	protected $UpdateTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('TimeZoneDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'TimeZoneID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StandardLabel' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StandardOffset' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DaylightSavingsLabel' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DaylightSavingsOffset' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DaylightSavingsInEffect' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DetailVersion' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UpdateTime' =>
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
	 * @return string
	 **/
	function getTimeZoneID()
	{
		return $this->TimeZoneID;
	}

	/**
	 * @return void
	 **/
	function setTimeZoneID($value)
	{
		$this->TimeZoneID = $value;
	}

	/**
	 * @return string
	 **/
	function getStandardLabel()
	{
		return $this->StandardLabel;
	}

	/**
	 * @return void
	 **/
	function setStandardLabel($value)
	{
		$this->StandardLabel = $value;
	}

	/**
	 * @return string
	 **/
	function getStandardOffset()
	{
		return $this->StandardOffset;
	}

	/**
	 * @return void
	 **/
	function setStandardOffset($value)
	{
		$this->StandardOffset = $value;
	}

	/**
	 * @return string
	 **/
	function getDaylightSavingsLabel()
	{
		return $this->DaylightSavingsLabel;
	}

	/**
	 * @return void
	 **/
	function setDaylightSavingsLabel($value)
	{
		$this->DaylightSavingsLabel = $value;
	}

	/**
	 * @return string
	 **/
	function getDaylightSavingsOffset()
	{
		return $this->DaylightSavingsOffset;
	}

	/**
	 * @return void
	 **/
	function setDaylightSavingsOffset($value)
	{
		$this->DaylightSavingsOffset = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDaylightSavingsInEffect()
	{
		return $this->DaylightSavingsInEffect;
	}

	/**
	 * @return void
	 **/
	function setDaylightSavingsInEffect($value)
	{
		$this->DaylightSavingsInEffect = $value;
	}

	/**
	 * @return string
	 **/
	function getDetailVersion()
	{
		return $this->DetailVersion;
	}

	/**
	 * @return void
	 **/
	function setDetailVersion($value)
	{
		$this->DetailVersion = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getUpdateTime()
	{
		return $this->UpdateTime;
	}

	/**
	 * @return void
	 **/
	function setUpdateTime($value)
	{
		$this->UpdateTime = $value;
	}

}
?>
