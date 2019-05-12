<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class TransactionReferenceCodeType extends EbatNs_FacetType
{
	const CodeType_ExternalTransactionID = 'ExternalTransactionID';
	const CodeType_MandateReferenceNumber = 'MandateReferenceNumber';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('TransactionReferenceCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_TransactionReferenceCodeType = new TransactionReferenceCodeType();
?>