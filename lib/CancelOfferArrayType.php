<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CancelOfferType.php';

/**
  * This type is deprecated.
  * 
 **/

class CancelOfferArrayType extends EbatNs_ComplexType
{
	/**
	* @var CancelOfferType
	**/
	protected $CancelOffer;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CancelOfferArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CancelOffer' =>
				array(
					'required' => false,
					'type' => 'CancelOfferType',
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
	 * @return CancelOfferType
	 * @param integer $index 
	 **/
	function getCancelOffer($index = null)
	{
		if ($index !== null)
		{
			return $this->CancelOffer[$index];
		}
		else
		{
			return $this->CancelOffer;
		}
	}

	/**
	 * @return void
	 * @param CancelOfferType $value
	 * @param integer $index 
	 **/
	function setCancelOffer($value, $index = null)
	{
		if ($index !== null)
		{
			$this->CancelOffer[$index] = $value;
		}
		else
		{
			$this->CancelOffer= $value;
		}
	}

	/**
	 * @return void
	 * @param CancelOfferType $value
	 **/
	function addCancelOffer($value)
	{
		$this->CancelOffer[] = $value;
	}

}
?>
