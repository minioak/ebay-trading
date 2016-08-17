<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'StoreCustomPageType.php';

/**
  *       Returned after calling SetStoreCustomPageRequest. This serves as
  *       confirmation that the custom page was successfully submitted.
  *     
 **/

class SetStoreCustomPageResponseType extends AbstractResponseType
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
		parent::__construct('SetStoreCustomPageResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CustomPage' =>
				array(
					'required' => false,
					'type' => 'StoreCustomPageType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return StoreCustomPageType
	 **/
	function getCustomPage()
	{
		return $this->CustomPage;
	}

	/**
	 * @return void
	 **/
	function setCustomPage($value)
	{
		$this->CustomPage = $value;
	}

}
?>
