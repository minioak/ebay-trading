<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'PaginatedTransactionArrayType.php';

/**
  * Response to GetItemsAwaitingFeedback.
  * 
 **/

class GetItemsAwaitingFeedbackResponseType extends AbstractResponseType
{
	/**
	* @var PaginatedTransactionArrayType
	**/
	protected $ItemsAwaitingFeedback;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetItemsAwaitingFeedbackResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemsAwaitingFeedback' =>
				array(
					'required' => false,
					'type' => 'PaginatedTransactionArrayType',
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
	 * @return PaginatedTransactionArrayType
	 **/
	function getItemsAwaitingFeedback()
	{
		return $this->ItemsAwaitingFeedback;
	}

	/**
	 * @return void
	 **/
	function setItemsAwaitingFeedback($value)
	{
		$this->ItemsAwaitingFeedback = $value;
	}

}
?>
