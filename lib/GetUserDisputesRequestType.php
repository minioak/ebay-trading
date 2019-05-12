<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';
require_once 'DisputeFilterTypeCodeType.php';
require_once 'DisputeSortTypeCodeType.php';
require_once 'PaginationType.php';

/**
  * Requests a list of disputes the requester is involved in as buyer or seller.
  * eBay Money Back Guarantee Item Not Received and Significantly Not As Described cases
  * are not returned with this call. To retrieve eBay Money Back Guarantee cases, use the Resolution Case Management API <b>getUserCases</b> call.
  * 
 **/

class GetUserDisputesRequestType extends AbstractRequestType
{
	/**
	* @var DisputeFilterTypeCodeType
	**/
	protected $DisputeFilterType;

	/**
	* @var DisputeSortTypeCodeType
	**/
	protected $DisputeSortType;

	/**
	* @var dateTime
	**/
	protected $ModTimeFrom;

	/**
	* @var dateTime
	**/
	protected $ModTimeTo;

	/**
	* @var PaginationType
	**/
	protected $Pagination;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetUserDisputesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DisputeFilterType' =>
				array(
					'required' => false,
					'type' => 'DisputeFilterTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisputeSortType' =>
				array(
					'required' => false,
					'type' => 'DisputeSortTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ModTimeFrom' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ModTimeTo' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Pagination' =>
				array(
					'required' => false,
					'type' => 'PaginationType',
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
	 * @return DisputeFilterTypeCodeType
	 **/
	function getDisputeFilterType()
	{
		return $this->DisputeFilterType;
	}

	/**
	 * @return void
	 **/
	function setDisputeFilterType($value)
	{
		$this->DisputeFilterType = $value;
	}

	/**
	 * @return DisputeSortTypeCodeType
	 **/
	function getDisputeSortType()
	{
		return $this->DisputeSortType;
	}

	/**
	 * @return void
	 **/
	function setDisputeSortType($value)
	{
		$this->DisputeSortType = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getModTimeFrom()
	{
		return $this->ModTimeFrom;
	}

	/**
	 * @return void
	 **/
	function setModTimeFrom($value)
	{
		$this->ModTimeFrom = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getModTimeTo()
	{
		return $this->ModTimeTo;
	}

	/**
	 * @return void
	 **/
	function setModTimeTo($value)
	{
		$this->ModTimeTo = $value;
	}

	/**
	 * @return PaginationType
	 **/
	function getPagination()
	{
		return $this->Pagination;
	}

	/**
	 * @return void
	 **/
	function setPagination($value)
	{
		$this->Pagination = $value;
	}

}
?>
