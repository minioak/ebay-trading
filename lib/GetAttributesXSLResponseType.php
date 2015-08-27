<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'XSLFileType.php';

/**
  * This type is deprecated as the call is no longer available.
  * 
  * 
 **/

class GetAttributesXSLResponseType extends AbstractResponseType
{
	/**
	* @var XSLFileType
	**/
	protected $XSLFile;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetAttributesXSLResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'XSLFile' =>
				array(
					'required' => false,
					'type' => 'XSLFileType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return XSLFileType
	 * @param integer $index 
	 **/
	function getXSLFile($index = null)
	{
		if ($index !== null)
		{
			return $this->XSLFile[$index];
		}
		else
		{
			return $this->XSLFile;
		}
	}

	/**
	 * @return void
	 * @param XSLFileType $value
	 * @param integer $index 
	 **/
	function setXSLFile($value, $index = null)
	{
		if ($index !== null)
		{
			$this->XSLFile[$index] = $value;
		}
		else
		{
			$this->XSLFile= $value;
		}
	}

	/**
	 * @return void
	 * @param XSLFileType $value
	 **/
	function addXSLFile($value)
	{
		$this->XSLFile[] = $value;
	}

}
?>
