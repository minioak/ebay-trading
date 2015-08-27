<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'StoreCustomListingHeaderDisplayCodeType.php';
require_once 'StoreCustomListingHeaderLinkType.php';

/**
  * Configuration of a Store custom listing header.
  * 
 **/

class StoreCustomListingHeaderType extends EbatNs_ComplexType
{
	/**
	* @var StoreCustomListingHeaderDisplayCodeType
	**/
	protected $DisplayType;

	/**
	* @var boolean
	**/
	protected $Logo;

	/**
	* @var boolean
	**/
	protected $SearchBox;

	/**
	* @var StoreCustomListingHeaderLinkType
	**/
	protected $LinkToInclude;

	/**
	* @var boolean
	**/
	protected $AddToFavoriteStores;

	/**
	* @var boolean
	**/
	protected $SignUpForStoreNewsletter;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('StoreCustomListingHeaderType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DisplayType' =>
				array(
					'required' => false,
					'type' => 'StoreCustomListingHeaderDisplayCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Logo' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SearchBox' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LinkToInclude' =>
				array(
					'required' => false,
					'type' => 'StoreCustomListingHeaderLinkType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'AddToFavoriteStores' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SignUpForStoreNewsletter' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	 * @return StoreCustomListingHeaderDisplayCodeType
	 **/
	function getDisplayType()
	{
		return $this->DisplayType;
	}

	/**
	 * @return void
	 **/
	function setDisplayType($value)
	{
		$this->DisplayType = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLogo()
	{
		return $this->Logo;
	}

	/**
	 * @return void
	 **/
	function setLogo($value)
	{
		$this->Logo = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSearchBox()
	{
		return $this->SearchBox;
	}

	/**
	 * @return void
	 **/
	function setSearchBox($value)
	{
		$this->SearchBox = $value;
	}

	/**
	 * @return StoreCustomListingHeaderLinkType
	 * @param integer $index 
	 **/
	function getLinkToInclude($index = null)
	{
		if ($index !== null)
		{
			return $this->LinkToInclude[$index];
		}
		else
		{
			return $this->LinkToInclude;
		}
	}

	/**
	 * @return void
	 * @param StoreCustomListingHeaderLinkType $value
	 * @param integer $index 
	 **/
	function setLinkToInclude($value, $index = null)
	{
		if ($index !== null)
		{
			$this->LinkToInclude[$index] = $value;
		}
		else
		{
			$this->LinkToInclude= $value;
		}
	}

	/**
	 * @return void
	 * @param StoreCustomListingHeaderLinkType $value
	 **/
	function addLinkToInclude($value)
	{
		$this->LinkToInclude[] = $value;
	}

	/**
	 * @return boolean
	 **/
	function getAddToFavoriteStores()
	{
		return $this->AddToFavoriteStores;
	}

	/**
	 * @return void
	 **/
	function setAddToFavoriteStores($value)
	{
		$this->AddToFavoriteStores = $value;
	}

	/**
	 * @return boolean
	 **/
	function getSignUpForStoreNewsletter()
	{
		return $this->SignUpForStoreNewsletter;
	}

	/**
	 * @return void
	 **/
	function setSignUpForStoreNewsletter($value)
	{
		$this->SignUpForStoreNewsletter = $value;
	}

}
?>
