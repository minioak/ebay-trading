<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'PaginationResultType.php';
require_once 'OrderArrayType.php';

/**
  * Returns the set of orders that match the order IDs or filter criteria specified.
  * 
 **/

class GetOrdersResponseType extends AbstractResponseType
{
	/**
	* @var PaginationResultType
	**/
	protected $PaginationResult;

	/**
	* @var boolean
	**/
	protected $HasMoreOrders;

	/**
	* @var OrderArrayType
	**/
	protected $OrderArray;

	/**
	* @var int
	**/
	protected $OrdersPerPage;

	/**
	* @var int
	**/
	protected $PageNumber;

	/**
	* @var int
	**/
	protected $ReturnedOrderCountActual;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetOrdersResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PaginationResult' =>
				array(
					'required' => false,
					'type' => 'PaginationResultType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HasMoreOrders' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OrderArray' =>
				array(
					'required' => false,
					'type' => 'OrderArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'OrdersPerPage' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PageNumber' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnedOrderCountActual' =>
				array(
					'required' => false,
					'type' => 'int',
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

	/**
	 * @return boolean
	 **/
	function getHasMoreOrders()
	{
		return $this->HasMoreOrders;
	}

	/**
	 * @return void
	 **/
	function setHasMoreOrders($value)
	{
		$this->HasMoreOrders = $value;
	}

	/**
	 * @return OrderArrayType
	 **/
	function getOrderArray()
	{
		return $this->OrderArray;
	}

	/**
	 * @return void
	 **/
	function setOrderArray($value)
	{
		$this->OrderArray = $value;
	}

	/**
	 * @return int
	 **/
	function getOrdersPerPage()
	{
		return $this->OrdersPerPage;
	}

	/**
	 * @return void
	 **/
	function setOrdersPerPage($value)
	{
		$this->OrdersPerPage = $value;
	}

	/**
	 * @return int
	 **/
	function getPageNumber()
	{
		return $this->PageNumber;
	}

	/**
	 * @return void
	 **/
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}

	/**
	 * @return int
	 **/
	function getReturnedOrderCountActual()
	{
		return $this->ReturnedOrderCountActual;
	}

	/**
	 * @return void
	 **/
	function setReturnedOrderCountActual($value)
	{
		$this->ReturnedOrderCountActual = $value;
	}

}
?>
