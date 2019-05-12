<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'BidGroupType.php';

/**
  * This type is deprecated.
  * 
 **/

class BidGroupArrayType extends EbatNs_ComplexType
{
	/**
	* @var BidGroupType
	**/
	protected $BidGroup;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('BidGroupArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'BidGroup' =>
				array(
					'required' => false,
					'type' => 'BidGroupType',
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
	 * @return BidGroupType
	 * @param integer $index 
	 **/
	function getBidGroup($index = null)
	{
		if ($index !== null)
		{
			return $this->BidGroup[$index];
		}
		else
		{
			return $this->BidGroup;
		}
	}

	/**
	 * @return void
	 * @param BidGroupType $value
	 * @param integer $index 
	 **/
	function setBidGroup($value, $index = null)
	{
		if ($index !== null)
		{
			$this->BidGroup[$index] = $value;
		}
		else
		{
			$this->BidGroup= $value;
		}
	}

	/**
	 * @return void
	 * @param BidGroupType $value
	 **/
	function addBidGroup($value)
	{
		$this->BidGroup[] = $value;
	}

}
?>
