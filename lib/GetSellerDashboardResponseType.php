<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'SearchStandingDashboardType.php';
require_once 'SellerFeeDiscountDashboardType.php';
require_once 'PowerSellerDashboardType.php';
require_once 'PolicyComplianceDashboardType.php';
require_once 'BuyerSatisfactionDashboardType.php';
require_once 'SellerAccountDashboardType.php';
require_once 'PerformanceDashboardType.php';

/**
  * Returns a brief summary of the requester's status as an eBay seller. The status
  * information can help an eBay seller monitor their selling performance and keep
  * their account in good standing.
  * 
 **/

class GetSellerDashboardResponseType extends AbstractResponseType
{
	/**
	* @var SearchStandingDashboardType
	**/
	protected $SearchStanding;

	/**
	* @var SellerFeeDiscountDashboardType
	**/
	protected $SellerFeeDiscount;

	/**
	* @var PowerSellerDashboardType
	**/
	protected $PowerSellerStatus;

	/**
	* @var PolicyComplianceDashboardType
	**/
	protected $PolicyCompliance;

	/**
	* @var BuyerSatisfactionDashboardType
	**/
	protected $BuyerSatisfaction;

	/**
	* @var SellerAccountDashboardType
	**/
	protected $SellerAccount;

	/**
	* @var PerformanceDashboardType
	**/
	protected $Performance;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetSellerDashboardResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SearchStanding' =>
				array(
					'required' => false,
					'type' => 'SearchStandingDashboardType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerFeeDiscount' =>
				array(
					'required' => false,
					'type' => 'SellerFeeDiscountDashboardType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PowerSellerStatus' =>
				array(
					'required' => false,
					'type' => 'PowerSellerDashboardType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PolicyCompliance' =>
				array(
					'required' => false,
					'type' => 'PolicyComplianceDashboardType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BuyerSatisfaction' =>
				array(
					'required' => false,
					'type' => 'BuyerSatisfactionDashboardType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerAccount' =>
				array(
					'required' => false,
					'type' => 'SellerAccountDashboardType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Performance' =>
				array(
					'required' => false,
					'type' => 'PerformanceDashboardType',
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
	 * @return SearchStandingDashboardType
	 **/
	function getSearchStanding()
	{
		return $this->SearchStanding;
	}

	/**
	 * @return void
	 **/
	function setSearchStanding($value)
	{
		$this->SearchStanding = $value;
	}

	/**
	 * @return SellerFeeDiscountDashboardType
	 **/
	function getSellerFeeDiscount()
	{
		return $this->SellerFeeDiscount;
	}

	/**
	 * @return void
	 **/
	function setSellerFeeDiscount($value)
	{
		$this->SellerFeeDiscount = $value;
	}

	/**
	 * @return PowerSellerDashboardType
	 **/
	function getPowerSellerStatus()
	{
		return $this->PowerSellerStatus;
	}

	/**
	 * @return void
	 **/
	function setPowerSellerStatus($value)
	{
		$this->PowerSellerStatus = $value;
	}

	/**
	 * @return PolicyComplianceDashboardType
	 **/
	function getPolicyCompliance()
	{
		return $this->PolicyCompliance;
	}

	/**
	 * @return void
	 **/
	function setPolicyCompliance($value)
	{
		$this->PolicyCompliance = $value;
	}

	/**
	 * @return BuyerSatisfactionDashboardType
	 **/
	function getBuyerSatisfaction()
	{
		return $this->BuyerSatisfaction;
	}

	/**
	 * @return void
	 **/
	function setBuyerSatisfaction($value)
	{
		$this->BuyerSatisfaction = $value;
	}

	/**
	 * @return SellerAccountDashboardType
	 **/
	function getSellerAccount()
	{
		return $this->SellerAccount;
	}

	/**
	 * @return void
	 **/
	function setSellerAccount($value)
	{
		$this->SellerAccount = $value;
	}

	/**
	 * @return PerformanceDashboardType
	 * @param integer $index 
	 **/
	function getPerformance($index = null)
	{
		if ($index !== null)
		{
			return $this->Performance[$index];
		}
		else
		{
			return $this->Performance;
		}
	}

	/**
	 * @return void
	 * @param PerformanceDashboardType $value
	 * @param integer $index 
	 **/
	function setPerformance($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Performance[$index] = $value;
		}
		else
		{
			$this->Performance= $value;
		}
	}

	/**
	 * @return void
	 * @param PerformanceDashboardType $value
	 **/
	function addPerformance($value)
	{
		$this->Performance[] = $value;
	}

}
?>
