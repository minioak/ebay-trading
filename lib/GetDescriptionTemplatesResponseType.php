<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'DescriptionTemplateType.php';
require_once 'ThemeGroupType.php';

/**
  * Returned after calling GetDescriptionTemplatesRequest.
  * 
 **/

class GetDescriptionTemplatesResponseType extends AbstractResponseType
{
	/**
	* @var DescriptionTemplateType
	**/
	protected $DescriptionTemplate;

	/**
	* @var int
	**/
	protected $LayoutTotal;

	/**
	* @var int
	**/
	protected $ObsoleteLayoutID;

	/**
	* @var int
	**/
	protected $ObsoleteThemeID;

	/**
	* @var ThemeGroupType
	**/
	protected $ThemeGroup;

	/**
	* @var int
	**/
	protected $ThemeTotal;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetDescriptionTemplatesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DescriptionTemplate' =>
				array(
					'required' => false,
					'type' => 'DescriptionTemplateType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'LayoutTotal' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ObsoleteLayoutID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ObsoleteThemeID' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ThemeGroup' =>
				array(
					'required' => false,
					'type' => 'ThemeGroupType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
	 * @return DescriptionTemplateType
	 * @param integer $index 
	 **/
	function getDescriptionTemplate($index = null)
	{
		if ($index !== null)
		{
			return $this->DescriptionTemplate[$index];
		}
		else
		{
			return $this->DescriptionTemplate;
		}
	}

	/**
	 * @return void
	 * @param DescriptionTemplateType $value
	 * @param integer $index 
	 **/
	function setDescriptionTemplate($value, $index = null)
	{
		if ($index !== null)
		{
			$this->DescriptionTemplate[$index] = $value;
		}
		else
		{
			$this->DescriptionTemplate= $value;
		}
	}

	/**
	 * @return void
	 * @param DescriptionTemplateType $value
	 **/
	function addDescriptionTemplate($value)
	{
		$this->DescriptionTemplate[] = $value;
	}

	/**
	 * @return int
	 **/
	function getLayoutTotal()
	{
		return $this->LayoutTotal;
	}

	/**
	 * @return void
	 **/
	function setLayoutTotal($value)
	{
		$this->LayoutTotal = $value;
	}

	/**
	 * @return int
	 * @param integer $index 
	 **/
	function getObsoleteLayoutID($index = null)
	{
		if ($index !== null)
		{
			return $this->ObsoleteLayoutID[$index];
		}
		else
		{
			return $this->ObsoleteLayoutID;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 * @param integer $index 
	 **/
	function setObsoleteLayoutID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ObsoleteLayoutID[$index] = $value;
		}
		else
		{
			$this->ObsoleteLayoutID= $value;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 **/
	function addObsoleteLayoutID($value)
	{
		$this->ObsoleteLayoutID[] = $value;
	}

	/**
	 * @return int
	 * @param integer $index 
	 **/
	function getObsoleteThemeID($index = null)
	{
		if ($index !== null)
		{
			return $this->ObsoleteThemeID[$index];
		}
		else
		{
			return $this->ObsoleteThemeID;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 * @param integer $index 
	 **/
	function setObsoleteThemeID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ObsoleteThemeID[$index] = $value;
		}
		else
		{
			$this->ObsoleteThemeID= $value;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 **/
	function addObsoleteThemeID($value)
	{
		$this->ObsoleteThemeID[] = $value;
	}

	/**
	 * @return ThemeGroupType
	 * @param integer $index 
	 **/
	function getThemeGroup($index = null)
	{
		if ($index !== null)
		{
			return $this->ThemeGroup[$index];
		}
		else
		{
			return $this->ThemeGroup;
		}
	}

	/**
	 * @return void
	 * @param ThemeGroupType $value
	 * @param integer $index 
	 **/
	function setThemeGroup($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ThemeGroup[$index] = $value;
		}
		else
		{
			$this->ThemeGroup= $value;
		}
	}

	/**
	 * @return void
	 * @param ThemeGroupType $value
	 **/
	function addThemeGroup($value)
	{
		$this->ThemeGroup[] = $value;
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
