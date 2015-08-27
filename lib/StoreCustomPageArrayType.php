<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'StoreCustomPageType.php';

/**
  *   Set of Store custom pages.
  *   
 **/

class StoreCustomPageArrayType extends EbatNs_ComplexType
{
	/**
	* @var StoreCustomPageType
	**/
	protected $CustomPage;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('StoreCustomPageArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CustomPage' =>
				array(
					'required' => false,
					'type' => 'StoreCustomPageType',
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
	 * @return StoreCustomPageType
	 * @param integer $index 
	 **/
	function getCustomPage($index = null)
	{
		if ($index !== null)
		{
			return $this->CustomPage[$index];
		}
		else
		{
			return $this->CustomPage;
		}
	}

	/**
	 * @return void
	 * @param StoreCustomPageType $value
	 * @param integer $index 
	 **/
	function setCustomPage($value, $index = null)
	{
		if ($index !== null)
		{
			$this->CustomPage[$index] = $value;
		}
		else
		{
			$this->CustomPage= $value;
		}
	}

	/**
	 * @return void
	 * @param StoreCustomPageType $value
	 **/
	function addCustomPage($value)
	{
		$this->CustomPage[] = $value;
	}

}
?>
