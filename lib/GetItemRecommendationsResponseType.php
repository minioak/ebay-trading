<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'GetRecommendationsResponseContainerType.php';

/**
  * GetItemRecommendations returns recommended changes or opportunities for improvement
  * related to listing data that was passed in the request.
  * This call supports batch requests. That is, it can retrieve recommendations for multiple
  * items at once.
  * 
 **/

class GetItemRecommendationsResponseType extends AbstractResponseType
{
	/**
	* @var GetRecommendationsResponseContainerType
	**/
	protected $GetRecommendationsResponseContainer;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetItemRecommendationsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'GetRecommendationsResponseContainer' =>
				array(
					'required' => false,
					'type' => 'GetRecommendationsResponseContainerType',
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
	 * @return GetRecommendationsResponseContainerType
	 * @param integer $index 
	 **/
	function getGetRecommendationsResponseContainer($index = null)
	{
		if ($index !== null)
		{
			return $this->GetRecommendationsResponseContainer[$index];
		}
		else
		{
			return $this->GetRecommendationsResponseContainer;
		}
	}

	/**
	 * @return void
	 * @param GetRecommendationsResponseContainerType $value
	 * @param integer $index 
	 **/
	function setGetRecommendationsResponseContainer($value, $index = null)
	{
		if ($index !== null)
		{
			$this->GetRecommendationsResponseContainer[$index] = $value;
		}
		else
		{
			$this->GetRecommendationsResponseContainer= $value;
		}
	}

	/**
	 * @return void
	 * @param GetRecommendationsResponseContainerType $value
	 **/
	function addGetRecommendationsResponseContainer($value)
	{
		$this->GetRecommendationsResponseContainer[] = $value;
	}

}
?>
