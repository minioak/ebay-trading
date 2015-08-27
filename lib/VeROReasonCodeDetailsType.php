<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'VeROSiteDetailType.php';

/**
  * Container for reason code details for all sites.
  * 
 **/

class VeROReasonCodeDetailsType extends EbatNs_ComplexType
{
	/**
	* @var VeROSiteDetailType
	**/
	protected $VeROSiteDetail;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('VeROReasonCodeDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'VeROSiteDetail' =>
				array(
					'required' => false,
					'type' => 'VeROSiteDetailType',
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
	 * @return VeROSiteDetailType
	 * @param integer $index 
	 **/
	function getVeROSiteDetail($index = null)
	{
		if ($index !== null)
		{
			return $this->VeROSiteDetail[$index];
		}
		else
		{
			return $this->VeROSiteDetail;
		}
	}

	/**
	 * @return void
	 * @param VeROSiteDetailType $value
	 * @param integer $index 
	 **/
	function setVeROSiteDetail($value, $index = null)
	{
		if ($index !== null)
		{
			$this->VeROSiteDetail[$index] = $value;
		}
		else
		{
			$this->VeROSiteDetail= $value;
		}
	}

	/**
	 * @return void
	 * @param VeROSiteDetailType $value
	 **/
	function addVeROSiteDetail($value)
	{
		$this->VeROSiteDetail[] = $value;
	}

}
?>
