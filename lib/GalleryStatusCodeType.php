<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class GalleryStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Success = 'Success';
	const CodeType_Pending = 'Pending';
	const CodeType_InvalidUrl = 'InvalidUrl';
	const CodeType_InvalidProtocol = 'InvalidProtocol';
	const CodeType_InvalidFile = 'InvalidFile';
	const CodeType_ServerDown = 'ServerDown';
	const CodeType_ImageNonExistent = 'ImageNonExistent';
	const CodeType_ImageReadTimeOut = 'ImageReadTimeOut';
	const CodeType_InvalidFileFormat = 'InvalidFileFormat';
	const CodeType_ImageProcessingError = 'ImageProcessingError';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('GalleryStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_GalleryStatusCodeType = new GalleryStatusCodeType();
?>