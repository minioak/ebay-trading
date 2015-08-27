<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'RefundFundingSourceType.php';

/**
  *  This type is no longer used.
  * 
 **/

class RefundFundingSourceArrayType extends EbatNs_ComplexType
{
	/**
	* @var RefundFundingSourceType
	**/
	protected $RefundFundingSource;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RefundFundingSourceArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'RefundFundingSource' =>
				array(
					'required' => false,
					'type' => 'RefundFundingSourceType',
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
	 * @return RefundFundingSourceType
	 * @param integer $index 
	 **/
	function getRefundFundingSource($index = null)
	{
		if ($index !== null)
		{
			return $this->RefundFundingSource[$index];
		}
		else
		{
			return $this->RefundFundingSource;
		}
	}

	/**
	 * @return void
	 * @param RefundFundingSourceType $value
	 * @param integer $index 
	 **/
	function setRefundFundingSource($value, $index = null)
	{
		if ($index !== null)
		{
			$this->RefundFundingSource[$index] = $value;
		}
		else
		{
			$this->RefundFundingSource= $value;
		}
	}

	/**
	 * @return void
	 * @param RefundFundingSourceType $value
	 **/
	function addRefundFundingSource($value)
	{
		$this->RefundFundingSource[] = $value;
	}

}
?>
