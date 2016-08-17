<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'BestOfferStatusCodeType.php';
require_once 'BestOfferTypeCodeType.php';

/**
  * Type defining the <b>BestOfferDetails</b> container, which consists
  * of Best Offer details associated with an item. The <b>BestOfferEnabled</b>
  * field in this container is used by <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls to enable the Best Offer feature on a listing.
  * <br/><br/>
  * <span class="tablenote"><b>Note: </b>
  * The Best Offer feature is not available for auction listings.
  * </span>
  * 
 **/

class BestOfferDetailsType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $BestOfferCount;

	/**
	* @var boolean
	**/
	protected $BestOfferEnabled;

	/**
	* @var AmountType
	**/
	protected $BestOffer;

	/**
	* @var BestOfferStatusCodeType
	**/
	protected $BestOfferStatus;

	/**
	* @var BestOfferTypeCodeType
	**/
	protected $BestOfferType;

	/**
	* @var boolean
	**/
	protected $NewBestOffer;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BestOfferDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BestOfferCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferEnabled' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOffer' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferStatus' =>
				array(
					'required' => false,
					'type' => 'BestOfferStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferType' =>
				array(
					'required' => false,
					'type' => 'BestOfferTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'NewBestOffer' =>
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
	 * @return int
	 **/
	function getBestOfferCount()
	{
		return $this->BestOfferCount;
	}

	/**
	 * @return void
	 **/
	function setBestOfferCount($value)
	{
		$this->BestOfferCount = $value;
	}

	/**
	 * @return boolean
	 **/
	function getBestOfferEnabled()
	{
		return $this->BestOfferEnabled;
	}

	/**
	 * @return void
	 **/
	function setBestOfferEnabled($value)
	{
		$this->BestOfferEnabled = $value;
	}

	/**
	 * @return AmountType
	 **/
	function getBestOffer()
	{
		return $this->BestOffer;
	}

	/**
	 * @return void
	 **/
	function setBestOffer($value)
	{
		$this->BestOffer = $value;
	}

	/**
	 * @return BestOfferStatusCodeType
	 **/
	function getBestOfferStatus()
	{
		return $this->BestOfferStatus;
	}

	/**
	 * @return void
	 **/
	function setBestOfferStatus($value)
	{
		$this->BestOfferStatus = $value;
	}

	/**
	 * @return BestOfferTypeCodeType
	 **/
	function getBestOfferType()
	{
		return $this->BestOfferType;
	}

	/**
	 * @return void
	 **/
	function setBestOfferType($value)
	{
		$this->BestOfferType = $value;
	}

	/**
	 * @return boolean
	 **/
	function getNewBestOffer()
	{
		return $this->NewBestOffer;
	}

	/**
	 * @return void
	 **/
	function setNewBestOffer($value)
	{
		$this->NewBestOffer = $value;
	}

}
?>
