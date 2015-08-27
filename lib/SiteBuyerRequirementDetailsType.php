<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MaximumBuyerPolicyViolationsDetailsType.php';
require_once 'MaximumItemRequirementsDetailsType.php';
require_once 'MaximumUnpaidItemStrikesInfoDetailsType.php';
require_once 'MinimumFeedbackScoreDetailsType.php';
require_once 'VerifiedUserRequirementsDetailsType.php';

/**
  * Type defining the <b>BuyerRequirementDetails</b> container, which is returned in
  * GeteBayDetails, and provides the seller with the buyer requirement features (and applicable
  * values) that are supported by the listing site.
  * <br/><br/>
  * <span class="tablenote"><b>Note: </b>
  * This container is only returned if <b>BuyerRequirementDetails</b> is included as a <b>DetailName</b> 
  * filter in the request, or if no <b>DetailName</b> filters are used in the request.
  * </span>  <br/><br/>
  * 
 **/

class SiteBuyerRequirementDetailsType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $LinkedPayPalAccount;

	/**
	* @var MaximumBuyerPolicyViolationsDetailsType
	**/
	protected $MaximumBuyerPolicyViolations;

	/**
	* @var MaximumItemRequirementsDetailsType
	**/
	protected $MaximumItemRequirements;

	/**
	* @var MaximumUnpaidItemStrikesInfoDetailsType
	**/
	protected $MaximumUnpaidItemStrikesInfo;

	/**
	* @var MinimumFeedbackScoreDetailsType
	**/
	protected $MinimumFeedbackScore;

	/**
	* @var boolean
	**/
	protected $ShipToRegistrationCountry;

	/**
	* @var VerifiedUserRequirementsDetailsType
	**/
	protected $VerifiedUserRequirements;

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
		parent::__construct('SiteBuyerRequirementDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'LinkedPayPalAccount' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaximumBuyerPolicyViolations' =>
				array(
					'required' => false,
					'type' => 'MaximumBuyerPolicyViolationsDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaximumItemRequirements' =>
				array(
					'required' => false,
					'type' => 'MaximumItemRequirementsDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MaximumUnpaidItemStrikesInfo' =>
				array(
					'required' => false,
					'type' => 'MaximumUnpaidItemStrikesInfoDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MinimumFeedbackScore' =>
				array(
					'required' => false,
					'type' => 'MinimumFeedbackScoreDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShipToRegistrationCountry' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'VerifiedUserRequirements' =>
				array(
					'required' => false,
					'type' => 'VerifiedUserRequirementsDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
	 * @return boolean
	 **/
	function getLinkedPayPalAccount()
	{
		return $this->LinkedPayPalAccount;
	}

	/**
	 * @return void
	 **/
	function setLinkedPayPalAccount($value)
	{
		$this->LinkedPayPalAccount = $value;
	}

	/**
	 * @return MaximumBuyerPolicyViolationsDetailsType
	 **/
	function getMaximumBuyerPolicyViolations()
	{
		return $this->MaximumBuyerPolicyViolations;
	}

	/**
	 * @return void
	 **/
	function setMaximumBuyerPolicyViolations($value)
	{
		$this->MaximumBuyerPolicyViolations = $value;
	}

	/**
	 * @return MaximumItemRequirementsDetailsType
	 **/
	function getMaximumItemRequirements()
	{
		return $this->MaximumItemRequirements;
	}

	/**
	 * @return void
	 **/
	function setMaximumItemRequirements($value)
	{
		$this->MaximumItemRequirements = $value;
	}

	/**
	 * @return MaximumUnpaidItemStrikesInfoDetailsType
	 **/
	function getMaximumUnpaidItemStrikesInfo()
	{
		return $this->MaximumUnpaidItemStrikesInfo;
	}

	/**
	 * @return void
	 **/
	function setMaximumUnpaidItemStrikesInfo($value)
	{
		$this->MaximumUnpaidItemStrikesInfo = $value;
	}

	/**
	 * @return MinimumFeedbackScoreDetailsType
	 **/
	function getMinimumFeedbackScore()
	{
		return $this->MinimumFeedbackScore;
	}

	/**
	 * @return void
	 **/
	function setMinimumFeedbackScore($value)
	{
		$this->MinimumFeedbackScore = $value;
	}

	/**
	 * @return boolean
	 **/
	function getShipToRegistrationCountry()
	{
		return $this->ShipToRegistrationCountry;
	}

	/**
	 * @return void
	 **/
	function setShipToRegistrationCountry($value)
	{
		$this->ShipToRegistrationCountry = $value;
	}

	/**
	 * @return VerifiedUserRequirementsDetailsType
	 **/
	function getVerifiedUserRequirements()
	{
		return $this->VerifiedUserRequirements;
	}

	/**
	 * @return void
	 **/
	function setVerifiedUserRequirements($value)
	{
		$this->VerifiedUserRequirements = $value;
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
