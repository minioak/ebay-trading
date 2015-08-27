<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class CharitySellerStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Suspended = 'Suspended';
	const CodeType_Registered = 'Registered';
	const CodeType_Closed = 'Closed';
	const CodeType_CreditCardExpired = 'CreditCardExpired';
	const CodeType_TokenExpired = 'TokenExpired';
	const CodeType_CreditCardAboutToExpire = 'CreditCardAboutToExpire';
	const CodeType_RegisteredNoCreditCard = 'RegisteredNoCreditCard';
	const CodeType_NotRegisteredLostDirectSellerStatus = 'NotRegisteredLostDirectSellerStatus';
	const CodeType_DirectDebitRejected = 'DirectDebitRejected';
	const CodeType_RegisteredDirectSeller = 'RegisteredDirectSeller';
	const CodeType_RegisteredNoPaymentMethod = 'RegisteredNoPaymentMethod';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CharitySellerStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CharitySellerStatusCodeType = new CharitySellerStatusCodeType();
?>