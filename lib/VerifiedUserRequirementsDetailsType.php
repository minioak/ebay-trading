<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  *  Type defining the <b>BuyerRequirementDetails.VerifiedUserRequirements</b> 
  *  container that is returned in <b>GeteBayDetails</b>. The
  *  <b>VerifiedUserRequirements</b> container provides the <b>VerifiedUser</b> 
  *  and <b>FeedbackScore</b> values that may be used in listing calls to restrict
  *  unverified users who have Feedback scores below the minimum threshold.
  * 
 **/

class VerifiedUserRequirementsDetailsType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $VerifiedUser;

	/**
	* @var int
	**/
	protected $FeedbackScore;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('VerifiedUserRequirementsDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'VerifiedUser' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeedbackScore' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return boolean
	 **/
	function getVerifiedUser()
	{
		return $this->VerifiedUser;
	}

	/**
	 * @return void
	 **/
	function setVerifiedUser($value)
	{
		$this->VerifiedUser = $value;
	}

	/**
	 * @return int
	 * @param integer $index 
	 **/
	function getFeedbackScore($index = null)
	{
		if ($index !== null)
		{
			return $this->FeedbackScore[$index];
		}
		else
		{
			return $this->FeedbackScore;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 * @param integer $index 
	 **/
	function setFeedbackScore($value, $index = null)
	{
		if ($index !== null)
		{
			$this->FeedbackScore[$index] = $value;
		}
		else
		{
			$this->FeedbackScore= $value;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 **/
	function addFeedbackScore($value)
	{
		$this->FeedbackScore[] = $value;
	}

}
?>
