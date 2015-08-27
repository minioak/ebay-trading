<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * This type is deprecated because the calls that use it are deprected.
  * 
  * 
 **/

class XSLFileType extends EbatNs_ComplexType
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
	* @var string
	**/
	protected $FileContent;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('XSLFileType', 'urn:ebay:apis:eBLBaseComponents');
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
				),
				'FileContent' =>
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

	/**
	 * @return string
	 **/
	function getFileContent()
	{
		return $this->FileContent;
	}

	/**
	 * @return void
	 **/
	function setFileContent($value)
	{
		$this->FileContent = $value;
	}

}
?>
