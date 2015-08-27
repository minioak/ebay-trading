<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'BidderNoticePreferencesType.php';
require_once 'CombinedPaymentPreferencesType.php';
require_once 'CrossPromotionPreferencesType.php';
require_once 'SellerPaymentPreferencesType.php';
require_once 'SellerFavoriteItemPreferencesType.php';
require_once 'EndOfAuctionEmailPreferencesType.php';
require_once 'ProStoresCheckoutPreferenceType.php';
require_once 'UnpaidItemAssistancePreferencesType.php';
require_once 'SellerExcludeShipToLocationPreferencesType.php';
require_once 'PurchaseReminderEmailPreferencesType.php';
require_once 'SellerProfilePreferencesType.php';
require_once 'SellerReturnPreferencesType.php';
require_once 'DispatchCutoffTimePreferencesType.php';
require_once 'eBayPLUSPreferenceType.php';

/**
  * Contains some or all of the authenticated user's preferences. The preferences are
  * grouped in sets and are returned according to the flag settings in the request.
  * 
 **/

class GetUserPreferencesResponseType extends AbstractResponseType
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
	* @var ProStoresCheckoutPreferenceType
	**/
	protected $ProStoresPreference;

	/**
	* @var UnpaidItemAssistancePreferencesType
	**/
	protected $UnpaidItemAssistancePreferences;

	/**
	* @var SellerExcludeShipToLocationPreferencesType
	**/
	protected $SellerExcludeShipToLocationPreferences;

	/**
	* @var PurchaseReminderEmailPreferencesType
	**/
	protected $PurchaseReminderEmailPreferences;

	/**
	* @var boolean
	**/
	protected $SellerThirdPartyCheckoutDisabled;

	/**
	* @var SellerProfilePreferencesType
	**/
	protected $SellerProfilePreferences;

	/**
	* @var SellerReturnPreferencesType
	**/
	protected $SellerReturnPreferences;

	/**
	* @var boolean
	**/
	protected $OfferGlobalShippingProgramPreference;

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
	protected $OverrideGSPServiceWithIntlServicePreference;

	/**
	* @var boolean
	**/
	protected $PickupDropoffSellerPreference;

	/**
	* @var boolean
	**/
	protected $OutOfStockControlPreference;

	/**
	* @var eBayPLUSPreferenceType
	**/
	protected $eBayPLUSPreference;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetUserPreferencesResponseType', 'urn:ebay:apis:eBLBaseComponents');
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
				'ProStoresPreference' =>
				array(
					'required' => false,
					'type' => 'ProStoresCheckoutPreferenceType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
				'SellerExcludeShipToLocationPreferences' =>
				array(
					'required' => false,
					'type' => 'SellerExcludeShipToLocationPreferencesType',
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
				'SellerProfilePreferences' =>
				array(
					'required' => false,
					'type' => 'SellerProfilePreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SellerReturnPreferences' =>
				array(
					'required' => false,
					'type' => 'SellerReturnPreferencesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OfferGlobalShippingProgramPreference' =>
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
				'OverrideGSPServiceWithIntlServicePreference' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PickupDropoffSellerPreference' =>
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
				),
				'eBayPLUSPreference' =>
				array(
					'required' => false,
					'type' => 'eBayPLUSPreferenceType',
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
	 * @return ProStoresCheckoutPreferenceType
	 **/
	function getProStoresPreference()
	{
		return $this->ProStoresPreference;
	}

	/**
	 * @return void
	 **/
	function setProStoresPreference($value)
	{
		$this->ProStoresPreference = $value;
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
	 * @return SellerExcludeShipToLocationPreferencesType
	 **/
	function getSellerExcludeShipToLocationPreferences()
	{
		return $this->SellerExcludeShipToLocationPreferences;
	}

	/**
	 * @return void
	 **/
	function setSellerExcludeShipToLocationPreferences($value)
	{
		$this->SellerExcludeShipToLocationPreferences = $value;
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
	 * @return SellerProfilePreferencesType
	 **/
	function getSellerProfilePreferences()
	{
		return $this->SellerProfilePreferences;
	}

	/**
	 * @return void
	 **/
	function setSellerProfilePreferences($value)
	{
		$this->SellerProfilePreferences = $value;
	}

	/**
	 * @return SellerReturnPreferencesType
	 **/
	function getSellerReturnPreferences()
	{
		return $this->SellerReturnPreferences;
	}

	/**
	 * @return void
	 **/
	function setSellerReturnPreferences($value)
	{
		$this->SellerReturnPreferences = $value;
	}

	/**
	 * @return boolean
	 **/
	function getOfferGlobalShippingProgramPreference()
	{
		return $this->OfferGlobalShippingProgramPreference;
	}

	/**
	 * @return void
	 **/
	function setOfferGlobalShippingProgramPreference($value)
	{
		$this->OfferGlobalShippingProgramPreference = $value;
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
	function getOverrideGSPServiceWithIntlServicePreference()
	{
		return $this->OverrideGSPServiceWithIntlServicePreference;
	}

	/**
	 * @return void
	 **/
	function setOverrideGSPServiceWithIntlServicePreference($value)
	{
		$this->OverrideGSPServiceWithIntlServicePreference = $value;
	}

	/**
	 * @return boolean
	 **/
	function getPickupDropoffSellerPreference()
	{
		return $this->PickupDropoffSellerPreference;
	}

	/**
	 * @return void
	 **/
	function setPickupDropoffSellerPreference($value)
	{
		$this->PickupDropoffSellerPreference = $value;
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

	/**
	 * @return eBayPLUSPreferenceType
	 * @param integer $index 
	 **/
	function geteBayPLUSPreference($index = null)
	{
		if ($index !== null)
		{
			return $this->eBayPLUSPreference[$index];
		}
		else
		{
			return $this->eBayPLUSPreference;
		}
	}

	/**
	 * @return void
	 * @param eBayPLUSPreferenceType $value
	 * @param integer $index 
	 **/
	function seteBayPLUSPreference($value, $index = null)
	{
		if ($index !== null)
		{
			$this->eBayPLUSPreference[$index] = $value;
		}
		else
		{
			$this->eBayPLUSPreference= $value;
		}
	}

	/**
	 * @return void
	 * @param eBayPLUSPreferenceType $value
	 **/
	function addeBayPLUSPreference($value)
	{
		$this->eBayPLUSPreference[] = $value;
	}

}
?>
