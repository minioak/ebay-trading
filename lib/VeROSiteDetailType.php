<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SiteCodeType.php';
require_once 'ReasonCodeDetailType.php';

/**
  * Container for reason code details for a given site.
  * 
 **/

class VeROSiteDetailType extends EbatNs_ComplexType
{
	/**
	* @var SiteCodeType
	**/
	protected $Site;

	/**
	* @var ReasonCodeDetailType
	**/
	protected $ReasonCodeDetail;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('VeROSiteDetailType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Site' =>
				array(
					'required' => false,
					'type' => 'SiteCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReasonCodeDetail' =>
				array(
					'required' => false,
					'type' => 'ReasonCodeDetailType',
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
	 * @return SiteCodeType
	 **/
	function getSite()
	{
		return $this->Site;
	}

	/**
	 * @return void
	 **/
	function setSite($value)
	{
		$this->Site = $value;
	}

	/**
	 * @return ReasonCodeDetailType
	 * @param integer $index 
	 **/
	function getReasonCodeDetail($index = null)
	{
		if ($index !== null)
		{
			return $this->ReasonCodeDetail[$index];
		}
		else
		{
			return $this->ReasonCodeDetail;
		}
	}

	/**
	 * @return void
	 * @param ReasonCodeDetailType $value
	 * @param integer $index 
	 **/
	function setReasonCodeDetail($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ReasonCodeDetail[$index] = $value;
		}
		else
		{
			$this->ReasonCodeDetail= $value;
		}
	}

	/**
	 * @return void
	 * @param ReasonCodeDetailType $value
	 **/
	function addReasonCodeDetail($value)
	{
		$this->ReasonCodeDetail[] = $value;
	}

}
?>
