<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AccountEntryType.php';

/**
  * Type defining the array of <b>AccountEntry</b> objects that are conditionally returned in the <b>GetAccount</b> response.
  * 
 **/

class AccountEntriesType extends EbatNs_ComplexType
{
	/**
	* @var AccountEntryType
	**/
	protected $AccountEntry;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AccountEntriesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AccountEntry' =>
				array(
					'required' => false,
					'type' => 'AccountEntryType',
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
	 * @return AccountEntryType
	 * @param integer $index 
	 **/
	function getAccountEntry($index = null)
	{
		if ($index !== null)
		{
			return $this->AccountEntry[$index];
		}
		else
		{
			return $this->AccountEntry;
		}
	}

	/**
	 * @return void
	 * @param AccountEntryType $value
	 * @param integer $index 
	 **/
	function setAccountEntry($value, $index = null)
	{
		if ($index !== null)
		{
			$this->AccountEntry[$index] = $value;
		}
		else
		{
			$this->AccountEntry= $value;
		}
	}

	/**
	 * @return void
	 * @param AccountEntryType $value
	 **/
	function addAccountEntry($value)
	{
		$this->AccountEntry[] = $value;
	}

}
?>
