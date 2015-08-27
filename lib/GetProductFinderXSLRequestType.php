<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  * Retrieves the Product Finder XSL stylesheet. Apply the stylesheet
  * to the XML returned from a call to GetProductFinder to render a
  * form that lets a user form a multi-attribute query against eBay
  * catalog data. See the Developer's Guide for an overview of Pre-
  * filled Item Information and information on searching for catalog
  * products.
  * 
 **/

class GetProductFinderXSLRequestType extends AbstractRequestType
{
	/**
	* @var string
	**/
	protected $FileName;

	/**
	* @var string
	**/
	protected $FileVersion;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetProductFinderXSLRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'FileName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FileVersion' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return string
	 **/
	function getFileName()
	{
		return $this->FileName;
	}

	/**
	 * @return void
	 **/
	function setFileName($value)
	{
		$this->FileName = $value;
	}

	/**
	 * @return string
	 **/
	function getFileVersion()
	{
		return $this->FileVersion;
	}

	/**
	 * @return void
	 **/
	function setFileVersion($value)
	{
		$this->FileVersion = $value;
	}

}
?>
