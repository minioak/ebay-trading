<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class CommentTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Positive = 'Positive';
	const CodeType_Neutral = 'Neutral';
	const CodeType_Negative = 'Negative';
	const CodeType_Withdrawn = 'Withdrawn';
	const CodeType_IndependentlyWithdrawn = 'IndependentlyWithdrawn';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('CommentTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_CommentTypeCodeType = new CommentTypeCodeType();
?>