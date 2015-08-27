<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'RefundTransactionInfoType.php';

/**
  * Type defining the <strong>Refunds</strong> container, which contains an array of <strong>Refund</strong> containers. A <strong>Refund</strong> container consists of detailed information on an In-Store Pickup item refund. 
  * <br/><br/>
  * <span class="tablenote">
  * <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. 
  * </span>
  * 
 **/

class RefundInformationType extends EbatNs_ComplexType
{
	/**
	* @var RefundTransactionInfoType
	**/
	protected $Refund;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RefundInformationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Refund' =>
				array(
					'required' => false,
					'type' => 'RefundTransactionInfoType',
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
	 * @return RefundTransactionInfoType
	 * @param integer $index 
	 **/
	function getRefund($index = null)
	{
		if ($index !== null)
		{
			return $this->Refund[$index];
		}
		else
		{
			return $this->Refund;
		}
	}

	/**
	 * @return void
	 * @param RefundTransactionInfoType $value
	 * @param integer $index 
	 **/
	function setRefund($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Refund[$index] = $value;
		}
		else
		{
			$this->Refund= $value;
		}
	}

	/**
	 * @return void
	 * @param RefundTransactionInfoType $value
	 **/
	function addRefund($value)
	{
		$this->Refund[] = $value;
	}

}
?>
