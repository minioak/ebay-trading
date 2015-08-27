<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'RefundTransactionType.php';

/**
  * This type is no longer used. 
  * 
 **/

class RefundTransactionArrayType extends EbatNs_ComplexType
{
	/**
	* @var RefundTransactionType
	**/
	protected $RefundTransaction;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RefundTransactionArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'RefundTransaction' =>
				array(
					'required' => false,
					'type' => 'RefundTransactionType',
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
	 * @return RefundTransactionType
	 * @param integer $index 
	 **/
	function getRefundTransaction($index = null)
	{
		if ($index !== null)
		{
			return $this->RefundTransaction[$index];
		}
		else
		{
			return $this->RefundTransaction;
		}
	}

	/**
	 * @return void
	 * @param RefundTransactionType $value
	 * @param integer $index 
	 **/
	function setRefundTransaction($value, $index = null)
	{
		if ($index !== null)
		{
			$this->RefundTransaction[$index] = $value;
		}
		else
		{
			$this->RefundTransaction= $value;
		}
	}

	/**
	 * @return void
	 * @param RefundTransactionType $value
	 **/
	function addRefundTransaction($value)
	{
		$this->RefundTransaction[] = $value;
	}

}
?>
