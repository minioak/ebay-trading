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

class GetProductSearchPageRequestType extends AbstractRequestType
{
	/**
	* @var string
	**/
	protected $AttributeSystemVersion;

	/**
	* @var int
	**/
	protected $AttributeSetID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetProductSearchPageRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AttributeSystemVersion' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AttributeSetID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return string
	 **/
	function getAttributeSystemVersion()
	{
		return $this->AttributeSystemVersion;
	}

	/**
	 * @return void
	 **/
	function setAttributeSystemVersion($value)
	{
		$this->AttributeSystemVersion = $value;
	}

	/**
	 * @return int
	 * @param integer $index 
	 **/
	function getAttributeSetID($index = null)
	{
		if ($index !== null)
		{
			return $this->AttributeSetID[$index];
		}
		else
		{
			return $this->AttributeSetID;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 * @param integer $index 
	 **/
	function setAttributeSetID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->AttributeSetID[$index] = $value;
		}
		else
		{
			$this->AttributeSetID= $value;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 **/
	function addAttributeSetID($value)
	{
		$this->AttributeSetID[] = $value;
	}

}
?>
