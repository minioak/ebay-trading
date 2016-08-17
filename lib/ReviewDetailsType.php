<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ReviewType.php';

/**
  * This type is deprecated.
  *  
 **/

class ReviewDetailsType extends EbatNs_ComplexType
{
	/**
	* @var float
	**/
	protected $AverageRating;

	/**
	* @var ReviewType
	**/
	protected $Review;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ReviewDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AverageRating' =>
				array(
					'required' => false,
					'type' => 'float',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Review' =>
				array(
					'required' => false,
					'type' => 'ReviewType',
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
	 * @return float
	 **/
	function getAverageRating()
	{
		return $this->AverageRating;
	}

	/**
	 * @return void
	 **/
	function setAverageRating($value)
	{
		$this->AverageRating = $value;
	}

	/**
	 * @return ReviewType
	 * @param integer $index 
	 **/
	function getReview($index = null)
	{
		if ($index !== null)
		{
			return $this->Review[$index];
		}
		else
		{
			return $this->Review;
		}
	}

	/**
	 * @return void
	 * @param ReviewType $value
	 * @param integer $index 
	 **/
	function setReview($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Review[$index] = $value;
		}
		else
		{
			$this->Review= $value;
		}
	}

	/**
	 * @return void
	 * @param ReviewType $value
	 **/
	function addReview($value)
	{
		$this->Review[] = $value;
	}

}
?>
