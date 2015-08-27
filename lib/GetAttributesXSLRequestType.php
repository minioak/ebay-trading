<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  * This type is deprecated as the call is no longer available.
  * 
  * 
 **/

class GetAttributesXSLRequestType extends AbstractRequestType
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
		parent::__construct('GetAttributesXSLRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
