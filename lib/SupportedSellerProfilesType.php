<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SupportedSellerProfileType.php';

/**
  *   Type defining the <b>SupportedSellerProfiles</b> container for all payment,
  * return, and shipping policy profiles that a seller has defined for a site.
  * 
 **/

class SupportedSellerProfilesType extends EbatNs_ComplexType
{
	/**
	* @var SupportedSellerProfileType
	**/
	protected $SupportedSellerProfile;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SupportedSellerProfilesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SupportedSellerProfile' =>
				array(
					'required' => false,
					'type' => 'SupportedSellerProfileType',
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
	 * @return SupportedSellerProfileType
	 * @param integer $index 
	 **/
	function getSupportedSellerProfile($index = null)
	{
		if ($index !== null)
		{
			return $this->SupportedSellerProfile[$index];
		}
		else
		{
			return $this->SupportedSellerProfile;
		}
	}

	/**
	 * @return void
	 * @param SupportedSellerProfileType $value
	 * @param integer $index 
	 **/
	function setSupportedSellerProfile($value, $index = null)
	{
		if ($index !== null)
		{
			$this->SupportedSellerProfile[$index] = $value;
		}
		else
		{
			$this->SupportedSellerProfile= $value;
		}
	}

	/**
	 * @return void
	 * @param SupportedSellerProfileType $value
	 **/
	function addSupportedSellerProfile($value)
	{
		$this->SupportedSellerProfile[] = $value;
	}

}
?>
