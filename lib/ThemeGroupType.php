<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Data for one theme group. Returned for GetDescriptionTemplates
  * if theme groups are requested.
  * 
 **/

class ThemeGroupType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $GroupID;

	/**
	* @var string
	**/
	protected $GroupName;

	/**
	* @var int
	**/
	protected $ThemeID;

	/**
	* @var int
	**/
	protected $ThemeTotal;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ThemeGroupType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'GroupID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GroupName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ThemeID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ThemeTotal' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return int
	 **/
	function getGroupID()
	{
		return $this->GroupID;
	}

	/**
	 * @return void
	 **/
	function setGroupID($value)
	{
		$this->GroupID = $value;
	}

	/**
	 * @return string
	 **/
	function getGroupName()
	{
		return $this->GroupName;
	}

	/**
	 * @return void
	 **/
	function setGroupName($value)
	{
		$this->GroupName = $value;
	}

	/**
	 * @return int
	 * @param integer $index 
	 **/
	function getThemeID($index = null)
	{
		if ($index !== null)
		{
			return $this->ThemeID[$index];
		}
		else
		{
			return $this->ThemeID;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 * @param integer $index 
	 **/
	function setThemeID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ThemeID[$index] = $value;
		}
		else
		{
			$this->ThemeID= $value;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 **/
	function addThemeID($value)
	{
		$this->ThemeID[] = $value;
	}

	/**
	 * @return int
	 **/
	function getThemeTotal()
	{
		return $this->ThemeTotal;
	}

	/**
	 * @return void
	 **/
	function setThemeTotal($value)
	{
		$this->ThemeTotal = $value;
	}

}
?>
