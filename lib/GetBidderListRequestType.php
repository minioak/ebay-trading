<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'UserIDType.php';
require_once 'GranularityLevelCodeType.php';

/**
  * Retrieves all items the user is currently bidding on, and the ones they have won
  * or purchased.
  * 
 **/

class GetBidderListRequestType extends AbstractRequestType
{
	/**
	* @var boolean
	**/
	protected $ActiveItemsOnly;

	/**
	* @var dateTime
	**/
	protected $EndTimeFrom;

	/**
	* @var dateTime
	**/
	protected $EndTimeTo;

	/**
	* @var UserIDType
	**/
	protected $UserID;

	/**
	* @var GranularityLevelCodeType
	**/
	protected $GranularityLevel;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetBidderListRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ActiveItemsOnly' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndTimeFrom' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndTimeTo' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GranularityLevel' =>
				array(
					'required' => false,
					'type' => 'GranularityLevelCodeType',
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
	 * @return boolean
	 **/
	function getActiveItemsOnly()
	{
		return $this->ActiveItemsOnly;
	}

	/**
	 * @return void
	 **/
	function setActiveItemsOnly($value)
	{
		$this->ActiveItemsOnly = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getEndTimeFrom()
	{
		return $this->EndTimeFrom;
	}

	/**
	 * @return void
	 **/
	function setEndTimeFrom($value)
	{
		$this->EndTimeFrom = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getEndTimeTo()
	{
		return $this->EndTimeTo;
	}

	/**
	 * @return void
	 **/
	function setEndTimeTo($value)
	{
		$this->EndTimeTo = $value;
	}

	/**
	 * @return UserIDType
	 **/
	function getUserID()
	{
		return $this->UserID;
	}

	/**
	 * @return void
	 **/
	function setUserID($value)
	{
		$this->UserID = $value;
	}

	/**
	 * @return GranularityLevelCodeType
	 **/
	function getGranularityLevel()
	{
		return $this->GranularityLevel;
	}

	/**
	 * @return void
	 **/
	function setGranularityLevel($value)
	{
		$this->GranularityLevel = $value;
	}

}
?>
