<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * <span class="tablenote"><strong>Note:</strong>
  * This type will be enabled with version 935. For those using versions older than 935, the <b>GiftSummary</b>container will not be returned.
  * </span>
  * <br>
  * This type is used by the <b>GiftSummary</b> container that is returned in <b>GetOrders</b> and other order management calls if a buyer has purchased a digital gift card but has sent it to another individual as a gift. The <b>GiftSummary</b> container consists of the message that the buyer wrote for the recipient of the digital gift card.
  * 
 **/

class GiftSummaryType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Message;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GiftSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Message' =>
				array(
					'required' => false,
					'type' => 'string',
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
	 * @return string
	 **/
	function getMessage()
	{
		return $this->Message;
	}

	/**
	 * @return void
	 **/
	function setMessage($value)
	{
		$this->Message = $value;
	}

}
?>
