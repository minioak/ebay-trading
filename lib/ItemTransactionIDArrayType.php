<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'ItemTransactionIDType.php';

/**
  * Container of ItemTransactionIDs.
  * 
 **/

class ItemTransactionIDArrayType extends EbatNs_ComplexType
{
	/**
	* @var ItemTransactionIDType
	**/
	protected $ItemTransactionID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ItemTransactionIDArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemTransactionID' =>
				array(
					'required' => false,
					'type' => 'ItemTransactionIDType',
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
	 * @return ItemTransactionIDType
	 * @param integer $index 
	 **/
	function getItemTransactionID($index = null)
	{
		if ($index !== null)
		{
			return $this->ItemTransactionID[$index];
		}
		else
		{
			return $this->ItemTransactionID;
		}
	}

	/**
	 * @return void
	 * @param ItemTransactionIDType $value
	 * @param integer $index 
	 **/
	function setItemTransactionID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ItemTransactionID[$index] = $value;
		}
		else
		{
			$this->ItemTransactionID= $value;
		}
	}

	/**
	 * @return void
	 * @param ItemTransactionIDType $value
	 **/
	function addItemTransactionID($value)
	{
		$this->ItemTransactionID[] = $value;
	}

}
?>
