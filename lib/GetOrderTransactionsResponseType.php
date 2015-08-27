<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'OrderArrayType.php';

/**
  * Response to GetOrderTransactions request.
  * 
 **/

class GetOrderTransactionsResponseType extends AbstractResponseType
{
	/**
	* @var OrderArrayType
	**/
	protected $OrderArray;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetOrderTransactionsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'OrderArray' =>
				array(
					'required' => false,
					'type' => 'OrderArrayType',
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

}
?>
