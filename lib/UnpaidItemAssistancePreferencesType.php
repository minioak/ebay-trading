<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  *   This type defines the <b>UnpaidItemAssistancePreferences</b> container. This container is
  * used in <b>SetUserPreferences</b> to set the preferences related to the <b>Unpaid Item
  * Assistant</b> feature. The <b>UnpaidItemAssistancePreferences</b> container is also returned in
  * <b>GetUserPreferences</b> (if the <b>ShowUnpaidItemAssistancePreference</b> flag is included and
  * set to true in the request).
  * 
 **/

class UnpaidItemAssistancePreferencesType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $DelayBeforeOpeningDispute;

	/**
	* @var boolean
	**/
	protected $OptInStatus;

	/**
	* @var boolean
	**/
	protected $AutoRelist;

	/**
	* @var boolean
	**/
	protected $RemoveAllExcludedUsers;

	/**
	* @var string
	**/
	protected $ExcludedUser;

	/**
	* @var boolean
	**/
	protected $AutoOptDonationRefund;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('UnpaidItemAssistancePreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DelayBeforeOpeningDispute' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OptInStatus' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AutoRelist' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RemoveAllExcludedUsers' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExcludedUser' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'AutoOptDonationRefund' =>
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
	function getDelayBeforeOpeningDispute()
	{
		return $this->DelayBeforeOpeningDispute;
	}

	/**
	 * @return void
	 **/
	function setDelayBeforeOpeningDispute($value)
	{
		$this->DelayBeforeOpeningDispute = $value;
	}

	/**
	 * @return boolean
	 **/
	function getOptInStatus()
	{
		return $this->OptInStatus;
	}

	/**
	 * @return void
	 **/
	function setOptInStatus($value)
	{
		$this->OptInStatus = $value;
	}

	/**
	 * @return boolean
	 **/
	function getAutoRelist()
	{
		return $this->AutoRelist;
	}

	/**
	 * @return void
	 **/
	function setAutoRelist($value)
	{
		$this->AutoRelist = $value;
	}

	/**
	 * @return boolean
	 **/
	function getRemoveAllExcludedUsers()
	{
		return $this->RemoveAllExcludedUsers;
	}

	/**
	 * @return void
	 **/
	function setRemoveAllExcludedUsers($value)
	{
		$this->RemoveAllExcludedUsers = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getExcludedUser($index = null)
	{
		if ($index !== null)
		{
			return $this->ExcludedUser[$index];
		}
		else
		{
			return $this->ExcludedUser;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setExcludedUser($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ExcludedUser[$index] = $value;
		}
		else
		{
			$this->ExcludedUser= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addExcludedUser($value)
	{
		$this->ExcludedUser[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getAutoOptDonationRefund()
	{
		return $this->AutoOptDonationRefund;
	}

	/**
	 * @return void
	 **/
	function setAutoOptDonationRefund($value)
	{
		$this->AutoOptDonationRefund = $value;
	}

}
?>
