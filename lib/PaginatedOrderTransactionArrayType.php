<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'OrderTransactionArrayType.php';
require_once 'PaginationResultType.php';

/**
  * Contains a paginated list of orders.
  * 
 **/

class PaginatedOrderTransactionArrayType extends EbatNs_ComplexType
{
	/**
	* @var OrderTransactionArrayType
	**/
	protected $OrderTransactionArray;

	/**
	* @var PaginationResultType
	**/
	protected $PaginationResult;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PaginatedOrderTransactionArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'OrderTransactionArray' =>
				array(
					'required' => false,
					'type' => 'OrderTransactionArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaginationResult' =>
				array(
					'required' => false,
					'type' => 'PaginationResultType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return OrderTransactionArrayType
	 **/
	function getOrderTransactionArray()
	{
		return $this->OrderTransactionArray;
	}

	/**
	 * @return void
	 **/
	function setOrderTransactionArray($value)
	{
		$this->OrderTransactionArray = $value;
	}

	/**
	 * @return PaginationResultType
	 **/
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}

	/**
	 * @return void
	 **/
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}

}
?>
