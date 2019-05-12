<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'DisputeResolutionRecordTypeCodeType.php';
require_once 'DisputeResolutionReasonCodeType.php';

/**
  * Contains all information about a dispute resolution. A dispute
  * can have a resolution even if the seller does not receive payment.
  * The resolution can have various results, including a Final Value Fee credit to
  * the seller or a strike to the buyer.
  * <br/><br/>
  * <span class="tablenote"><strong>Note:</strong>
  * These are not eBay money back guarantee disputes.
  * </span>
  * 
 **/

class DisputeResolutionType extends EbatNs_ComplexType
{
	/**
	* @var DisputeResolutionRecordTypeCodeType
	**/
	protected $DisputeResolutionRecordType;

	/**
	* @var DisputeResolutionReasonCodeType
	**/
	protected $DisputeResolutionReason;

	/**
	* @var dateTime
	**/
	protected $ResolutionTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DisputeResolutionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DisputeResolutionRecordType' =>
				array(
					'required' => false,
					'type' => 'DisputeResolutionRecordTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisputeResolutionReason' =>
				array(
					'required' => false,
					'type' => 'DisputeResolutionReasonCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ResolutionTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
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
	 * @return DisputeResolutionRecordTypeCodeType
	 **/
	function getDisputeResolutionRecordType()
	{
		return $this->DisputeResolutionRecordType;
	}

	/**
	 * @return void
	 **/
	function setDisputeResolutionRecordType($value)
	{
		$this->DisputeResolutionRecordType = $value;
	}

	/**
	 * @return DisputeResolutionReasonCodeType
	 **/
	function getDisputeResolutionReason()
	{
		return $this->DisputeResolutionReason;
	}

	/**
	 * @return void
	 **/
	function setDisputeResolutionReason($value)
	{
		$this->DisputeResolutionReason = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getResolutionTime()
	{
		return $this->ResolutionTime;
	}

	/**
	 * @return void
	 **/
	function setResolutionTime($value)
	{
		$this->ResolutionTime = $value;
	}

}
?>
