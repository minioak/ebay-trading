<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'BidderNoticePreferencesType.php';
require_once 'CombinedPaymentPreferencesType.php';
require_once 'CrossPromotionPreferencesType.php';
require_once 'SellerPaymentPreferencesType.php';
require_once 'SellerFavoriteItemPreferencesType.php';
require_once 'EndOfAuctionEmailPreferencesType.php';
require_once 'UnpaidItemAssistancePreferencesType.php';
require_once 'PurchaseReminderEmailPreferencesType.php';
require_once 'DispatchCutoffTimePreferencesType.php';

/**
  * Sets the authenticated user's preferences.
  * 
 **/

class SetUserPreferencesRequestType extends AbstractRequestType
{
	/**
	* @var BidderNoticePreferencesType
	**/
	protected $BidderNoticePreferences;

	/**
	* @var CombinedPaymentPreferencesType
	**/
	protected $CombinedPaymentPreferences;

	/**
	* @var CrossPromotionPreferencesType
	**/
	protected $CrossPromotionPreferences;

	/**
	* @var SellerPaymentPreferencesType
	**/
	protected $SellerPaymentPreferences;

	/**
	* @var SellerFavoriteItemPreferencesType
	**/
	protected $SellerFavoriteItemPreferences;

	/**
	* @var EndOfAuctionEmailPreferencesType
	**/
	protected $EndOfAuctionEmailPreferences;

	/**
	* @var boolean
	**/
	protected $EmailShipmentTrackingNumberPreference;

	/**
	* @var boolean
	**/
	protected $RequiredShipPhoneNumberPreference;

	/**
	* @var UnpaidItemAssistancePreferencesType
	**/
	protected $UnpaidItemAssistancePreferences;

	/**
	* @var PurchaseReminderEmailPreferencesType
	**/
	protected $PurchaseReminderEmailPreferences;

	/**
	* @var boolean
	**/
	protected $SellerThirdPartyCheckoutDisabled;

	/**
	* @var DispatchCutoffTimePreferencesType
	**/
	protected $DispatchCutoffTimePreference;

	/**
	* @var boolean
	**/
	protected $GlobalShippingProgramListingPreference;

	/**
	* @var boolean
	**/
	protected $OverrideGSPserviceWithIntlService;

	/**
	* @var boolean
	**/
	protected $OutOfStockControlPreference;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SetUserPreferencesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BidderNoticePreferences' =>
				array(
					'required' => false,
					'type' => 'BidderNoticePreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CombinedPaymentPreferences' =>
				array(
					'required' => false,
					'type' => 'CombinedPaymentPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CrossPromotionPreferences' =>
				array(
					'required' => false,
					'type' => 'CrossPromotionPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerPaymentPreferences' =>
				array(
					'required' => false,
					'type' => 'SellerPaymentPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerFavoriteItemPreferences' =>
				array(
					'required' => false,
					'type' => 'SellerFavoriteItemPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndOfAuctionEmailPreferences' =>
				array(
					'required' => false,
					'type' => 'EndOfAuctionEmailPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EmailShipmentTrackingNumberPreference' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'RequiredShipPhoneNumberPreference' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UnpaidItemAssistancePreferences' =>
				array(
					'required' => false,
					'type' => 'UnpaidItemAssistancePreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PurchaseReminderEmailPreferences' =>
				array(
					'required' => false,
					'type' => 'PurchaseReminderEmailPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerThirdPartyCheckoutDisabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DispatchCutoffTimePreference' =>
				array(
					'required' => false,
					'type' => 'DispatchCutoffTimePreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GlobalShippingProgramListingPreference' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OverrideGSPserviceWithIntlService' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OutOfStockControlPreference' =>
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
	 * @return BidderNoticePreferencesType
	 **/
	function getBidderNoticePreferences()
	{
		return $this->BidderNoticePreferences;
	}

	/**
	 * @return void
	 **/
	function setBidderNoticePreferences($value)
	{
		$this->BidderNoticePreferences = $value;
	}

	/**
	 * @return CombinedPaymentPreferencesType
	 **/
	function getCombinedPaymentPreferences()
	{
		return $this->CombinedPaymentPreferences;
	}

	/**
	 * @return void
	 **/
	function setCombinedPaymentPreferences($value)
	{
		$this->CombinedPaymentPreferences = $value;
	}

	/**
	 * @return CrossPromotionPreferencesType
	 **/
	function getCrossPromotionPreferences()
	{
		return $this->CrossPromotionPreferences;
	}

	/**
	 * @return void
	 **/
	function setCrossPromotionPreferences($value)
	{
		$this->CrossPromotionPreferences = $value;
	}

	/**
	 * @return SellerPaymentPreferencesType
	 **/
	function getSellerPaymentPreferences()
	{
		return $this->SellerPaymentPreferences;
	}

	/**
	 * @return void
	 **/
	function setSellerPaymentPreferences($value)
	{
		$this->SellerPaymentPreferences = $value;
	}

	/**
	 * @return SellerFavoriteItemPreferencesType
	 **/
	function getSellerFavoriteItemPreferences()
	{
		return $this->SellerFavoriteItemPreferences;
	}

	/**
	 * @return void
	 **/
	function setSellerFavoriteItemPreferences($value)
	{
		$this->SellerFavoriteItemPreferences = $value;
	}

	/**
	 * @return EndOfAuctionEmailPreferencesType
	 **/
	function getEndOfAuctionEmailPreferences()
	{
		return $this->EndOfAuctionEmailPreferences;
	}

	/**
	 * @return void
	 **/
	function setEndOfAuctionEmailPreferences($value)
	{
		$this->EndOfAuctionEmailPreferences = $value;
	}

	/**
	 * @return boolean
	 **/
	function getEmailShipmentTrackingNumberPreference()
	{
		return $this->EmailShipmentTrackingNumberPreference;
	}

	/**
	 * @return void
	 **/
	function setEmailShipmentTrackingNumberPreference($value)
	{
		$this->EmailShipmentTrackingNumberPreference = $value;
	}

	/**
	 * @return boolean
	 **/
	function getRequiredShipPhoneNumberPreference()
	{
		return $this->RequiredShipPhoneNumberPreference;
	}

	/**
	 * @return void
	 **/
	function setRequiredShipPhoneNumberPreference($value)
	{
		$this->RequiredShipPhoneNumberPreference = $value;
	}

	/**
	 * @return UnpaidItemAssistancePreferencesType
	 **/
	function getUnpaidItemAssistancePreferences()
	{
		return $this->UnpaidItemAssistancePreferences;
	}

	/**
	 * @return void
	 **/
	function setUnpaidItemAssistancePreferences($value)
	{
		$this->UnpaidItemAssistancePreferences = $value;
	}

	/**
	 * @return PurchaseReminderEmailPreferencesType
	 **/
	function getPurchaseReminderEmailPreferences()
	{
		return $this->PurchaseReminderEmailPreferences;
	}

	/**
	 * @return void
	 **/
	function setPurchaseReminderEmailPreferences($value)
	{
		$this->PurchaseReminderEmailPreferences = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSellerThirdPartyCheckoutDisabled()
	{
		return $this->SellerThirdPartyCheckoutDisabled;
	}

	/**
	 * @return void
	 **/
	function setSellerThirdPartyCheckoutDisabled($value)
	{
		$this->SellerThirdPartyCheckoutDisabled = $value;
	}

	/**
	 * @return DispatchCutoffTimePreferencesType
	 **/
	function getDispatchCutoffTimePreference()
	{
		return $this->DispatchCutoffTimePreference;
	}

	/**
	 * @return void
	 **/
	function setDispatchCutoffTimePreference($value)
	{
		$this->DispatchCutoffTimePreference = $value;
	}

	/**
	 * @return boolean
	 **/
	function getGlobalShippingProgramListingPreference()
	{
		return $this->GlobalShippingProgramListingPreference;
	}

	/**
	 * @return void
	 **/
	function setGlobalShippingProgramListingPreference($value)
	{
		$this->GlobalShippingProgramListingPreference = $value;
	}

	/**
	 * @return boolean
	 **/
	function getOverrideGSPserviceWithIntlService()
	{
		return $this->OverrideGSPserviceWithIntlService;
	}

	/**
	 * @return void
	 **/
	function setOverrideGSPserviceWithIntlService($value)
	{
		$this->OverrideGSPserviceWithIntlService = $value;
	}

	/**
	 * @return boolean
	 **/
	function getOutOfStockControlPreference()
	{
		return $this->OutOfStockControlPreference;
	}

	/**
	 * @return void
	 **/
	function setOutOfStockControlPreference($value)
	{
		$this->OutOfStockControlPreference = $value;
	}

}
?>
