<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'StoreLogoType.php';

/**
  * Set of Store logos.
  * 
 **/

class StoreLogoArrayType extends EbatNs_ComplexType
{
	/**
	* @var StoreLogoType
	**/
	protected $Logo;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('StoreLogoArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Logo' =>
				array(
					'required' => false,
					'type' => 'StoreLogoType',
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
	 * @return StoreLogoType
	 * @param integer $index 
	 **/
	function getLogo($index = null)
	{
		if ($index !== null)
		{
			return $this->Logo[$index];
		}
		else
		{
			return $this->Logo;
		}
	}

	/**
	 * @return void
	 * @param StoreLogoType $value
	 * @param integer $index 
	 **/
	function setLogo($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Logo[$index] = $value;
		}
		else
		{
			$this->Logo= $value;
		}
	}

	/**
	 * @return void
	 * @param StoreLogoType $value
	 **/
	function addLogo($value)
	{
		$this->Logo[] = $value;
	}

}
?>
