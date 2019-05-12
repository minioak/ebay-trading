<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  *   Contains a seller's cut off time preferences for same day handling for item shipping.
  * 
 **/

class DispatchCutoffTimePreferencesType extends EbatNs_ComplexType
{
	/**
	* @var time
	**/
	protected $CutoffTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DispatchCutoffTimePreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CutoffTime' =>
				array(
					'required' => false,
					'type' => 'time',
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
	 * @return time
	 **/
	function getCutoffTime()
	{
		return $this->CutoffTime;
	}

	/**
	 * @return void
	 **/
	function setCutoffTime($value)
	{
		$this->CutoffTime = $value;
	}

}
?>
