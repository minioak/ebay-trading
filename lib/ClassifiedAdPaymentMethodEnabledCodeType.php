<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class ClassifiedAdPaymentMethodEnabledCodeType extends EbatNs_FacetType
{
	const CodeType_EnabledWithCheckout = 'EnabledWithCheckout';
	const CodeType_EnabledWithoutCheckout = 'EnabledWithoutCheckout';
	const CodeType_NotSupported = 'NotSupported';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('ClassifiedAdPaymentMethodEnabledCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_ClassifiedAdPaymentMethodEnabledCodeType = new ClassifiedAdPaymentMethodEnabledCodeType();
?>