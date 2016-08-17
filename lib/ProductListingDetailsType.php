<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'BrandMPNType.php';
require_once 'TicketListingDetailsType.php';

/**
  * Type used by the <b>ProductListingDetails</b> container which is used by a seller in an add/revise/relist call to identify a product through a Global Trade Identification Number (EAN, ISBN, UPC, etc.)  and provide other information about that product. Just a unique product identifier along with help the seller pre-fill the listing information.
  * 
 **/

class ProductListingDetailsType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $IncludeStockPhotoURL;

	/**
	* @var boolean
	**/
	protected $UseStockPhotoURLAsGallery;

	/**
	* @var anyURI
	**/
	protected $StockPhotoURL;

	/**
	* @var string
	**/
	protected $Copyright;

	/**
	* @var string
	**/
	protected $ProductReferenceID;

	/**
	* @var anyURI
	**/
	protected $DetailsURL;

	/**
	* @var anyURI
	**/
	protected $ProductDetailsURL;

	/**
	* @var boolean
	**/
	protected $ReturnSearchResultOnDuplicates;

	/**
	* @var string
	**/
	protected $ISBN;

	/**
	* @var string
	**/
	protected $UPC;

	/**
	* @var string
	**/
	protected $EAN;

	/**
	* @var BrandMPNType
	**/
	protected $BrandMPN;

	/**
	* @var TicketListingDetailsType
	**/
	protected $TicketListingDetails;

	/**
	* @var boolean
	**/
	protected $UseFirstProduct;

	/**
	* @var boolean
	**/
	protected $IncludeeBayProductDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ProductListingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'IncludeStockPhotoURL' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UseStockPhotoURLAsGallery' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StockPhotoURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Copyright' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ProductReferenceID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DetailsURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductDetailsURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnSearchResultOnDuplicates' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ISBN' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UPC' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EAN' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BrandMPN' =>
				array(
					'required' => false,
					'type' => 'BrandMPNType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TicketListingDetails' =>
				array(
					'required' => false,
					'type' => 'TicketListingDetailsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UseFirstProduct' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeeBayProductDetails' =>
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
	 * @return boolean
	 **/
	function getIncludeStockPhotoURL()
	{
		return $this->IncludeStockPhotoURL;
	}

	/**
	 * @return void
	 **/
	function setIncludeStockPhotoURL($value)
	{
		$this->IncludeStockPhotoURL = $value;
	}

	/**
	 * @return boolean
	 **/
	function getUseStockPhotoURLAsGallery()
	{
		return $this->UseStockPhotoURLAsGallery;
	}

	/**
	 * @return void
	 **/
	function setUseStockPhotoURLAsGallery($value)
	{
		$this->UseStockPhotoURLAsGallery = $value;
	}

	/**
	 * @return anyURI
	 **/
	function getStockPhotoURL()
	{
		return $this->StockPhotoURL;
	}

	/**
	 * @return void
	 **/
	function setStockPhotoURL($value)
	{
		$this->StockPhotoURL = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getCopyright($index = null)
	{
		if ($index !== null)
		{
			return $this->Copyright[$index];
		}
		else
		{
			return $this->Copyright;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setCopyright($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Copyright[$index] = $value;
		}
		else
		{
			$this->Copyright= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addCopyright($value)
	{
		$this->Copyright[] = $value;
	}

	/**
	 * @return string
	 **/
	function getProductReferenceID()
	{
		return $this->ProductReferenceID;
	}

	/**
	 * @return void
	 **/
	function setProductReferenceID($value)
	{
		$this->ProductReferenceID = $value;
	}

	/**
	 * @return anyURI
	 **/
	function getDetailsURL()
	{
		return $this->DetailsURL;
	}

	/**
	 * @return void
	 **/
	function setDetailsURL($value)
	{
		$this->DetailsURL = $value;
	}

	/**
	 * @return anyURI
	 **/
	function getProductDetailsURL()
	{
		return $this->ProductDetailsURL;
	}

	/**
	 * @return void
	 **/
	function setProductDetailsURL($value)
	{
		$this->ProductDetailsURL = $value;
	}

	/**
	 * @return boolean
	 **/
	function getReturnSearchResultOnDuplicates()
	{
		return $this->ReturnSearchResultOnDuplicates;
	}

	/**
	 * @return void
	 **/
	function setReturnSearchResultOnDuplicates($value)
	{
		$this->ReturnSearchResultOnDuplicates = $value;
	}

	/**
	 * @return string
	 **/
	function getISBN()
	{
		return $this->ISBN;
	}

	/**
	 * @return void
	 **/
	function setISBN($value)
	{
		$this->ISBN = $value;
	}

	/**
	 * @return string
	 **/
	function getUPC()
	{
		return $this->UPC;
	}

	/**
	 * @return void
	 **/
	function setUPC($value)
	{
		$this->UPC = $value;
	}

	/**
	 * @return string
	 **/
	function getEAN()
	{
		return $this->EAN;
	}

	/**
	 * @return void
	 **/
	function setEAN($value)
	{
		$this->EAN = $value;
	}

	/**
	 * @return BrandMPNType
	 **/
	function getBrandMPN()
	{
		return $this->BrandMPN;
	}

	/**
	 * @return void
	 **/
	function setBrandMPN($value)
	{
		$this->BrandMPN = $value;
	}

	/**
	 * @return TicketListingDetailsType
	 **/
	function getTicketListingDetails()
	{
		return $this->TicketListingDetails;
	}

	/**
	 * @return void
	 **/
	function setTicketListingDetails($value)
	{
		$this->TicketListingDetails = $value;
	}

	/**
	 * @return boolean
	 **/
	function getUseFirstProduct()
	{
		return $this->UseFirstProduct;
	}

	/**
	 * @return void
	 **/
	function setUseFirstProduct($value)
	{
		$this->UseFirstProduct = $value;
	}

	/**
	 * @return boolean
	 **/
	function getIncludeeBayProductDetails()
	{
		return $this->IncludeeBayProductDetails;
	}

	/**
	 * @return void
	 **/
	function setIncludeeBayProductDetails($value)
	{
		$this->IncludeeBayProductDetails = $value;
	}

}
?>
