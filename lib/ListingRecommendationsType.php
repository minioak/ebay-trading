<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ListingRecommendationType.php';

/**
  * Type defining the <b>ListingRecommendations</b> container that is
  * conditionally returned in all Add/Revise/Relist/Verify API calls. A
  * <b>ListingRecommendations</b> container consists of one or
  * more <b>Recommendation</b> containers, and each
  * <b>Recommendation</b> container provides a message to the seller on how a
  * listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to use Fast 'N Free shipping.
  * <br><br>
  * The <b>ListingRecommendations</b> container is only returned if the
  * <b>IncludeRecommendations</b> flag is included and set to 'true' in the
  * API call request.
  * 
 **/

class ListingRecommendationsType extends EbatNs_ComplexType
{
	/**
	* @var ListingRecommendationType
	**/
	protected $Recommendation;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ListingRecommendationsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Recommendation' =>
				array(
					'required' => false,
					'type' => 'ListingRecommendationType',
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
	 * @return ListingRecommendationType
	 * @param integer $index 
	 **/
	function getRecommendation($index = null)
	{
		if ($index !== null)
		{
			return $this->Recommendation[$index];
		}
		else
		{
			return $this->Recommendation;
		}
	}

	/**
	 * @return void
	 * @param ListingRecommendationType $value
	 * @param integer $index 
	 **/
	function setRecommendation($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Recommendation[$index] = $value;
		}
		else
		{
			$this->Recommendation= $value;
		}
	}

	/**
	 * @return void
	 * @param ListingRecommendationType $value
	 **/
	function addRecommendation($value)
	{
		$this->Recommendation[] = $value;
	}

}
?>
