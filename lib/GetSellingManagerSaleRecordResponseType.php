<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'SellingManagerSoldOrderType.php';

/**
  * Response to a GetSellingManagerSaleRecord call.
  * 
 **/

class GetSellingManagerSaleRecordResponseType extends AbstractResponseType
{
	/**
	* @var SellingManagerSoldOrderType
	**/
	protected $SellingManagerSoldOrder;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetSellingManagerSaleRecordResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SellingManagerSoldOrder' =>
				array(
					'required' => false,
					'type' => 'SellingManagerSoldOrderType',
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
	 * @return SellingManagerSoldOrderType
	 **/
	function getSellingManagerSoldOrder()
	{
		return $this->SellingManagerSoldOrder;
	}

	/**
	 * @return void
	 **/
	function setSellingManagerSoldOrder($value)
	{
		$this->SellingManagerSoldOrder = $value;
	}

}
?>
