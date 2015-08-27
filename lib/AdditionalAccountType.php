<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';
require_once 'CurrencyCodeType.php';

/**
  * Contains the data for one additional account. An additional account is
  * created when the user has an active account and changes country of
  * registry (i.e., registers with the eBay site for the new country). A
  * new account is created and the old account becomes inactive as an
  * additional account. A user who never changes country of residency while
  * having an account will never have any additional accounts.
  * 
 **/

class AdditionalAccountType extends EbatNs_ComplexType
{
	/**
	* @var AmountType
	**/
	protected $Balance;

	/**
	* @var CurrencyCodeType
	**/
	protected $Currency;

	/**
	* @var string
	**/
	protected $AccountCode;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('AdditionalAccountType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Balance' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Currency' =>
				array(
					'required' => false,
					'type' => 'CurrencyCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AccountCode' =>
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
	 * @return AmountType
	 **/
	function getBalance()
	{
		return $this->Balance;
	}

	/**
	 * @return void
	 **/
	function setBalance($value)
	{
		$this->Balance = $value;
	}

	/**
	 * @return CurrencyCodeType
	 **/
	function getCurrency()
	{
		return $this->Currency;
	}

	/**
	 * @return void
	 **/
	function setCurrency($value)
	{
		$this->Currency = $value;
	}

	/**
	 * @return string
	 **/
	function getAccountCode()
	{
		return $this->AccountCode;
	}

	/**
	 * @return void
	 **/
	function setAccountCode($value)
	{
		$this->AccountCode = $value;
	}

}
?>
