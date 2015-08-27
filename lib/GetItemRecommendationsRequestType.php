<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'GetRecommendationsRequestContainerType.php';

/**
  * No longer recommended.
  * 
 **/

class GetItemRecommendationsRequestType extends AbstractRequestType
{
	/**
	* @var GetRecommendationsRequestContainerType
	**/
	protected $GetRecommendationsRequestContainer;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetItemRecommendationsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'GetRecommendationsRequestContainer' =>
				array(
					'required' => false,
					'type' => 'GetRecommendationsRequestContainerType',
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
	 * @return GetRecommendationsRequestContainerType
	 * @param integer $index 
	 **/
	function getGetRecommendationsRequestContainer($index = null)
	{
		if ($index !== null)
		{
			return $this->GetRecommendationsRequestContainer[$index];
		}
		else
		{
			return $this->GetRecommendationsRequestContainer;
		}
	}

	/**
	 * @return void
	 * @param GetRecommendationsRequestContainerType $value
	 * @param integer $index 
	 **/
	function setGetRecommendationsRequestContainer($value, $index = null)
	{
		if ($index !== null)
		{
			$this->GetRecommendationsRequestContainer[$index] = $value;
		}
		else
		{
			$this->GetRecommendationsRequestContainer= $value;
		}
	}

	/**
	 * @return void
	 * @param GetRecommendationsRequestContainerType $value
	 **/
	function addGetRecommendationsRequestContainer($value)
	{
		$this->GetRecommendationsRequestContainer[] = $value;
	}

}
?>
