<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'RefundLineType.php';

/**
  * This type is no longer used.
  * 
 **/

class RefundLineArrayType extends EbatNs_ComplexType
{
	/**
	* @var RefundLineType
	**/
	protected $RefundLine;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RefundLineArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'RefundLine' =>
				array(
					'required' => false,
					'type' => 'RefundLineType',
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
	 * @return RefundLineType
	 * @param integer $index 
	 **/
	function getRefundLine($index = null)
	{
		if ($index !== null)
		{
			return $this->RefundLine[$index];
		}
		else
		{
			return $this->RefundLine;
		}
	}

	/**
	 * @return void
	 * @param RefundLineType $value
	 * @param integer $index 
	 **/
	function setRefundLine($value, $index = null)
	{
		if ($index !== null)
		{
			$this->RefundLine[$index] = $value;
		}
		else
		{
			$this->RefundLine= $value;
		}
	}

	/**
	 * @return void
	 * @param RefundLineType $value
	 **/
	function addRefundLine($value)
	{
		$this->RefundLine[] = $value;
	}

}
?>
