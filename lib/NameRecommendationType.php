<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'RecommendationValidationRulesType.php';
require_once 'ValueRecommendationType.php';
require_once 'ItemSpecificSourceCodeType.php';

/**
  * Defines details about recommended names and values for custom Item Specifics.
  * 
 **/

class NameRecommendationType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Name;

	/**
	* @var RecommendationValidationRulesType
	**/
	protected $ValidationRules;

	/**
	* @var ValueRecommendationType
	**/
	protected $ValueRecommendation;

	/**
	* @var anyURI
	**/
	protected $HelpURL;

	/**
	* @var ItemSpecificSourceCodeType
	**/
	protected $Source;

	/**
	* @var string
	**/
	protected $HelpText;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('NameRecommendationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Name' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ValidationRules' =>
				array(
					'required' => false,
					'type' => 'RecommendationValidationRulesType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ValueRecommendation' =>
				array(
					'required' => false,
					'type' => 'ValueRecommendationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'HelpURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Source' =>
				array(
					'required' => false,
					'type' => 'ItemSpecificSourceCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HelpText' =>
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
	function getName()
	{
		return $this->Name;
	}

	/**
	 * @return void
	 **/
	function setName($value)
	{
		$this->Name = $value;
	}

	/**
	 * @return RecommendationValidationRulesType
	 **/
	function getValidationRules()
	{
		return $this->ValidationRules;
	}

	/**
	 * @return void
	 **/
	function setValidationRules($value)
	{
		$this->ValidationRules = $value;
	}

	/**
	 * @return ValueRecommendationType
	 * @param integer $index 
	 **/
	function getValueRecommendation($index = null)
	{
		if ($index !== null)
		{
			return $this->ValueRecommendation[$index];
		}
		else
		{
			return $this->ValueRecommendation;
		}
	}

	/**
	 * @return void
	 * @param ValueRecommendationType $value
	 * @param integer $index 
	 **/
	function setValueRecommendation($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ValueRecommendation[$index] = $value;
		}
		else
		{
			$this->ValueRecommendation= $value;
		}
	}

	/**
	 * @return void
	 * @param ValueRecommendationType $value
	 **/
	function addValueRecommendation($value)
	{
		$this->ValueRecommendation[] = $value;
	}

	/**
	 * @return anyURI
	 **/
	function getHelpURL()
	{
		return $this->HelpURL;
	}

	/**
	 * @return void
	 **/
	function setHelpURL($value)
	{
		$this->HelpURL = $value;
	}

	/**
	 * @return ItemSpecificSourceCodeType
	 **/
	function getSource()
	{
		return $this->Source;
	}

	/**
	 * @return void
	 **/
	function setSource($value)
	{
		$this->Source = $value;
	}

	/**
	 * @return string
	 **/
	function getHelpText()
	{
		return $this->HelpText;
	}

	/**
	 * @return void
	 **/
	function setHelpText($value)
	{
		$this->HelpText = $value;
	}

}
?>
