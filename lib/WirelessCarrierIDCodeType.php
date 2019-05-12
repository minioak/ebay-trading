<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class WirelessCarrierIDCodeType extends EbatNs_FacetType
{
	const CodeType_Cingular = 'Cingular';
	const CodeType_TMobile = 'TMobile';
	const CodeType_Sprint = 'Sprint';
	const CodeType_Nextel = 'Nextel';
	const CodeType_Verizon = 'Verizon';
	const CodeType_CincinnatiBell = 'CincinnatiBell';
	const CodeType_Dobson = 'Dobson';
	const CodeType_Alltel = 'Alltel';
	const CodeType_Leap = 'Leap';
	const CodeType_USCellular = 'USCellular';
	const CodeType_Movistar = 'Movistar';
	const CodeType_Amena = 'Amena';
	const CodeType_Vodafone = 'Vodafone';
	const CodeType_ATT = 'ATT';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('WirelessCarrierIDCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_WirelessCarrierIDCodeType = new WirelessCarrierIDCodeType();
?>