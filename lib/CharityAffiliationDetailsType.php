<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CharityAffiliationDetailType.php';

/**
  * Lists the nonprofit charity organization affiliations for a specified user.
  * 
 **/

class CharityAffiliationDetailsType extends EbatNs_ComplexType
{
	/**
	* @var CharityAffiliationDetailType
	**/
	protected $CharityAffiliationDetail;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CharityAffiliationDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CharityAffiliationDetail' =>
				array(
					'required' => false,
					'type' => 'CharityAffiliationDetailType',
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
	 * @return CharityAffiliationDetailType
	 * @param integer $index 
	 **/
	function getCharityAffiliationDetail($index = null)
	{
		if ($index !== null)
		{
			return $this->CharityAffiliationDetail[$index];
		}
		else
		{
			return $this->CharityAffiliationDetail;
		}
	}

	/**
	 * @return void
	 * @param CharityAffiliationDetailType $value
	 * @param integer $index 
	 **/
	function setCharityAffiliationDetail($value, $index = null)
	{
		if ($index !== null)
		{
			$this->CharityAffiliationDetail[$index] = $value;
		}
		else
		{
			$this->CharityAffiliationDetail= $value;
		}
	}

	/**
	 * @return void
	 * @param CharityAffiliationDetailType $value
	 **/
	function addCharityAffiliationDetail($value)
	{
		$this->CharityAffiliationDetail[] = $value;
	}

}
?>
