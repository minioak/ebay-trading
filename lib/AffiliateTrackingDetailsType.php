<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ApplicationDeviceTypeCodeType.php';

/**
  * Type used by the <b>AffiliateTrackingDetails</b> container, which is included in the <b>PlaceOffer</b> call to pass in eBay Partner Network affiliate-related data, so affiliates can earn commissions based on user activity and the number of calls made by the user's application.
  * 
 **/

class AffiliateTrackingDetailsType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $TrackingID;

	/**
	* @var string
	**/
	protected $TrackingPartnerCode;

	/**
	* @var ApplicationDeviceTypeCodeType
	**/
	protected $ApplicationDeviceType;

	/**
	* @var string
	**/
	protected $AffiliateUserID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AffiliateTrackingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'TrackingID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TrackingPartnerCode' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ApplicationDeviceType' =>
				array(
					'required' => false,
					'type' => 'ApplicationDeviceTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AffiliateUserID' =>
				array(
					'required' => false,
					'type' => 'string',
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
	 * @return string
	 **/
	function getTrackingID()
	{
		return $this->TrackingID;
	}

	/**
	 * @return void
	 **/
	function setTrackingID($value)
	{
		$this->TrackingID = $value;
	}

	/**
	 * @return string
	 **/
	function getTrackingPartnerCode()
	{
		return $this->TrackingPartnerCode;
	}

	/**
	 * @return void
	 **/
	function setTrackingPartnerCode($value)
	{
		$this->TrackingPartnerCode = $value;
	}

	/**
	 * @return ApplicationDeviceTypeCodeType
	 **/
	function getApplicationDeviceType()
	{
		return $this->ApplicationDeviceType;
	}

	/**
	 * @return void
	 **/
	function setApplicationDeviceType($value)
	{
		$this->ApplicationDeviceType = $value;
	}

	/**
	 * @return string
	 **/
	function getAffiliateUserID()
	{
		return $this->AffiliateUserID;
	}

	/**
	 * @return void
	 **/
	function setAffiliateUserID($value)
	{
		$this->AffiliateUserID = $value;
	}

}
?>
