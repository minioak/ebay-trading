<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'SellingManagerProductDetailsType.php';

/**
  * Response for deleting a Selling Manager product.
  * 
 **/

class DeleteSellingManagerProductResponseType extends AbstractResponseType
{
	/**
	* @var SellingManagerProductDetailsType
	**/
	protected $DeletedSellingManagerProductDetails;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DeleteSellingManagerProductResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'DeletedSellingManagerProductDetails' =>
				array(
					'required' => false,
					'type' => 'SellingManagerProductDetailsType',
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
	 * @return SellingManagerProductDetailsType
	 **/
	function getDeletedSellingManagerProductDetails()
	{
		return $this->DeletedSellingManagerProductDetails;
	}

	/**
	 * @return void
	 **/
	function setDeletedSellingManagerProductDetails($value)
	{
		$this->DeletedSellingManagerProductDetails = $value;
	}

}
?>
