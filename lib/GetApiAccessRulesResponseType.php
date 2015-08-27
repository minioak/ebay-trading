<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'ApiAccessRuleType.php';

/**
  * Responds to a call to GetApiAccessRules.
  * 
 **/

class GetApiAccessRulesResponseType extends AbstractResponseType
{
	/**
	* @var ApiAccessRuleType
	**/
	protected $ApiAccessRule;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetApiAccessRulesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ApiAccessRule' =>
				array(
					'required' => false,
					'type' => 'ApiAccessRuleType',
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
	 * @return ApiAccessRuleType
	 * @param integer $index 
	 **/
	function getApiAccessRule($index = null)
	{
		if ($index !== null)
		{
			return $this->ApiAccessRule[$index];
		}
		else
		{
			return $this->ApiAccessRule;
		}
	}

	/**
	 * @return void
	 * @param ApiAccessRuleType $value
	 * @param integer $index 
	 **/
	function setApiAccessRule($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ApiAccessRule[$index] = $value;
		}
		else
		{
			$this->ApiAccessRule= $value;
		}
	}

	/**
	 * @return void
	 * @param ApiAccessRuleType $value
	 **/
	function addApiAccessRule($value)
	{
		$this->ApiAccessRule[] = $value;
	}

}
?>
