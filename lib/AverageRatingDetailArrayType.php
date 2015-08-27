<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AverageRatingDetailsType.php';

/**
  * Container for average detailed seller ratings. If a seller has detailed ratings,
  * they are displayed in the Feedback Profile of the seller.
  * 
 **/

class AverageRatingDetailArrayType extends EbatNs_ComplexType
{
	/**
	* @var AverageRatingDetailsType
	**/
	protected $AverageRatingDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AverageRatingDetailArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AverageRatingDetails' =>
				array(
					'required' => false,
					'type' => 'AverageRatingDetailsType',
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
	 * @return AverageRatingDetailsType
	 * @param integer $index 
	 **/
	function getAverageRatingDetails($index = null)
	{
		if ($index !== null)
		{
			return $this->AverageRatingDetails[$index];
		}
		else
		{
			return $this->AverageRatingDetails;
		}
	}

	/**
	 * @return void
	 * @param AverageRatingDetailsType $value
	 * @param integer $index 
	 **/
	function setAverageRatingDetails($value, $index = null)
	{
		if ($index !== null)
		{
			$this->AverageRatingDetails[$index] = $value;
		}
		else
		{
			$this->AverageRatingDetails= $value;
		}
	}

	/**
	 * @return void
	 * @param AverageRatingDetailsType $value
	 **/
	function addAverageRatingDetails($value)
	{
		$this->AverageRatingDetails[] = $value;
	}

}
?>
