<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ShippingPackageCodeType extends EbatNs_FacetType
{
	const CodeType_None = 'None';
	const CodeType_Letter = 'Letter';
	const CodeType_LargeEnvelope = 'LargeEnvelope';
	const CodeType_USPSLargePack = 'USPSLargePack';
	const CodeType_VeryLargePack = 'VeryLargePack';
	const CodeType_ExtraLargePack = 'ExtraLargePack';
	const CodeType_UPSLetter = 'UPSLetter';
	const CodeType_USPSFlatRateEnvelope = 'USPSFlatRateEnvelope';
	const CodeType_PackageThickEnvelope = 'PackageThickEnvelope';
	const CodeType_Roll = 'Roll';
	const CodeType_Europallet = 'Europallet';
	const CodeType_OneWayPallet = 'OneWayPallet';
	const CodeType_BulkyGoods = 'BulkyGoods';
	const CodeType_Furniture = 'Furniture';
	const CodeType_Cars = 'Cars';
	const CodeType_Motorbikes = 'Motorbikes';
	const CodeType_Caravan = 'Caravan';
	const CodeType_IndustryVehicles = 'IndustryVehicles';
	const CodeType_ParcelOrPaddedEnvelope = 'ParcelOrPaddedEnvelope';
	const CodeType_SmallCanadaPostBox = 'SmallCanadaPostBox';
	const CodeType_MediumCanadaPostBox = 'MediumCanadaPostBox';
	const CodeType_LargeCanadaPostBox = 'LargeCanadaPostBox';
	const CodeType_SmallCanadaPostBubbleMailer = 'SmallCanadaPostBubbleMailer';
	const CodeType_MediumCanadaPostBubbleMailer = 'MediumCanadaPostBubbleMailer';
	const CodeType_LargeCanadaPostBubbleMailer = 'LargeCanadaPostBubbleMailer';
	const CodeType_PaddedBags = 'PaddedBags';
	const CodeType_ToughBags = 'ToughBags';
	const CodeType_ExpandableToughBags = 'ExpandableToughBags';
	const CodeType_MailingBoxes = 'MailingBoxes';
	const CodeType_Winepak = 'Winepak';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ShippingPackageCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ShippingPackageCodeType = new ShippingPackageCodeType();
?>