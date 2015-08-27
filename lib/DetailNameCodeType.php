<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class DetailNameCodeType extends EbatNs_FacetType
{
	const CodeType_CountryDetails = 'CountryDetails';
	const CodeType_CurrencyDetails = 'CurrencyDetails';
	const CodeType_PaymentOptionDetails = 'PaymentOptionDetails';
	const CodeType_RegionDetails = 'RegionDetails';
	const CodeType_ShippingLocationDetails = 'ShippingLocationDetails';
	const CodeType_ShippingServiceDetails = 'ShippingServiceDetails';
	const CodeType_SiteDetails = 'SiteDetails';
	const CodeType_TaxJurisdiction = 'TaxJurisdiction';
	const CodeType_URLDetails = 'URLDetails';
	const CodeType_TimeZoneDetails = 'TimeZoneDetails';
	const CodeType_RegionOfOriginDetails = 'RegionOfOriginDetails';
	const CodeType_DispatchTimeMaxDetails = 'DispatchTimeMaxDetails';
	const CodeType_ItemSpecificDetails = 'ItemSpecificDetails';
	const CodeType_UnitOfMeasurementDetails = 'UnitOfMeasurementDetails';
	const CodeType_ShippingPackageDetails = 'ShippingPackageDetails';
	const CodeType_CustomCode = 'CustomCode';
	const CodeType_ShippingCarrierDetails = 'ShippingCarrierDetails';
	const CodeType_ListingStartPriceDetails = 'ListingStartPriceDetails';
	const CodeType_ReturnPolicyDetails = 'ReturnPolicyDetails';
	const CodeType_BuyerRequirementDetails = 'BuyerRequirementDetails';
	const CodeType_ListingFeatureDetails = 'ListingFeatureDetails';
	const CodeType_VariationDetails = 'VariationDetails';
	const CodeType_ExcludeShippingLocationDetails = 'ExcludeShippingLocationDetails';
	const CodeType_RecoupmentPolicyDetails = 'RecoupmentPolicyDetails';
	const CodeType_ShippingCategoryDetails = 'ShippingCategoryDetails';
	const CodeType_ProductDetails = 'ProductDetails';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DetailNameCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DetailNameCodeType = new DetailNameCodeType();
?>