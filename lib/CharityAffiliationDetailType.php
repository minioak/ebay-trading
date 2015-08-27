<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CharityAffiliationTypeCodeType.php';

/**
  * Type defining the <b>CharityAffiliationDetail</b> container that is returned in the <b>GetUser</b> response. The <b>CharityAffiliationDetail</b> container consists of information on a nonprofit charity organization associated with the seller's account. A separate <b>CharityAffiliationDetail</b> container is returned for each nonprofit charity organization associated with the seller's account.
  * 
 **/

class CharityAffiliationDetailType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $CharityID;

	/**
	* @var CharityAffiliationTypeCodeType
	**/
	protected $AffiliationType;

	/**
	* @var dateTime
	**/
	protected $LastUsedTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CharityAffiliationDetailType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CharityID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AffiliationType' =>
				array(
					'required' => false,
					'type' => 'CharityAffiliationTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LastUsedTime' =>
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
	 * @return string
	 **/
	function getCharityID()
	{
		return $this->CharityID;
	}

	/**
	 * @return void
	 **/
	function setCharityID($value)
	{
		$this->CharityID = $value;
	}

	/**
	 * @return CharityAffiliationTypeCodeType
	 **/
	function getAffiliationType()
	{
		return $this->AffiliationType;
	}

	/**
	 * @return void
	 **/
	function setAffiliationType($value)
	{
		$this->AffiliationType = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getLastUsedTime()
	{
		return $this->LastUsedTime;
	}

	/**
	 * @return void
	 **/
	function setLastUsedTime($value)
	{
		$this->LastUsedTime = $value;
	}

}
?>
