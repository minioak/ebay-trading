<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SiteCodeType.php';

/**
  *            Container for supported site information
  *         
 **/

class RecoupmentPolicyConsentType extends EbatNs_ComplexType
{
	/**
	* @var SiteCodeType
	**/
	protected $Site;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RecoupmentPolicyConsentType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Site' =>
				array(
					'required' => false,
					'type' => 'SiteCodeType',
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
	 * @param integer $index 
	 **/
	function getSite($index = null)
	{
		if ($index !== null)
		{
			return $this->Site[$index];
		}
		else
		{
			return $this->Site;
		}
	}

	/**
	 * @return void
	 * @param SiteCodeType $value
	 * @param integer $index 
	 **/
	function setSite($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Site[$index] = $value;
		}
		else
		{
			$this->Site= $value;
		}
	}

	/**
	 * @return void
	 * @param SiteCodeType $value
	 **/
	function addSite($value)
	{
		$this->Site[] = $value;
	}

}
?>
