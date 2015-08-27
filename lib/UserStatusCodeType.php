<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class UserStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Unknown = 'Unknown';
	const CodeType_Suspended = 'Suspended';
	const CodeType_Confirmed = 'Confirmed';
	const CodeType_Unconfirmed = 'Unconfirmed';
	const CodeType_Ghost = 'Ghost';
	const CodeType_InMaintenance = 'InMaintenance';
	const CodeType_Deleted = 'Deleted';
	const CodeType_CreditCardVerify = 'CreditCardVerify';
	const CodeType_AccountOnHold = 'AccountOnHold';
	const CodeType_Merged = 'Merged';
	const CodeType_RegistrationCodeMailOut = 'RegistrationCodeMailOut';
	const CodeType_TermPending = 'TermPending';
	const CodeType_UnconfirmedHalfOptIn = 'UnconfirmedHalfOptIn';
	const CodeType_CreditCardVerifyHalfOptIn = 'CreditCardVerifyHalfOptIn';
	const CodeType_UnconfirmedPassport = 'UnconfirmedPassport';
	const CodeType_CreditCardVerifyPassport = 'CreditCardVerifyPassport';
	const CodeType_UnconfirmedExpress = 'UnconfirmedExpress';
	const CodeType_Guest = 'Guest';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('UserStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_UserStatusCodeType = new UserStatusCodeType();
?>