<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Specifies a set of Store vacation preferences.
  * 
 **/

class StoreVacationPreferencesType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $OnVacation;

	/**
	* @var dateTime
	**/
	protected $ReturnDate;

	/**
	* @var boolean
	**/
	protected $HideFixedPriceStoreItems;

	/**
	* @var boolean
	**/
	protected $MessageItem;

	/**
	* @var boolean
	**/
	protected $MessageStore;

	/**
	* @var boolean
	**/
	protected $DisplayMessageStoreCustomText;

	/**
	* @var string
	**/
	protected $MessageStoreCustomText;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('StoreVacationPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'OnVacation' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnDate' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HideFixedPriceStoreItems' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MessageItem' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MessageStore' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'DisplayMessageStoreCustomText' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'MessageStoreCustomText' =>
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
	 * @return boolean
	 **/
	function getOnVacation()
	{
		return $this->OnVacation;
	}

	/**
	 * @return void
	 **/
	function setOnVacation($value)
	{
		$this->OnVacation = $value;
	}

	/**
	 * @return dateTime
	 **/
	function getReturnDate()
	{
		return $this->ReturnDate;
	}

	/**
	 * @return void
	 **/
	function setReturnDate($value)
	{
		$this->ReturnDate = $value;
	}

	/**
	 * @return boolean
	 **/
	function getHideFixedPriceStoreItems()
	{
		return $this->HideFixedPriceStoreItems;
	}

	/**
	 * @return void
	 **/
	function setHideFixedPriceStoreItems($value)
	{
		$this->HideFixedPriceStoreItems = $value;
	}

	/**
	 * @return boolean
	 **/
	function getMessageItem()
	{
		return $this->MessageItem;
	}

	/**
	 * @return void
	 **/
	function setMessageItem($value)
	{
		$this->MessageItem = $value;
	}

	/**
	 * @return boolean
	 **/
	function getMessageStore()
	{
		return $this->MessageStore;
	}

	/**
	 * @return void
	 **/
	function setMessageStore($value)
	{
		$this->MessageStore = $value;
	}

	/**
	 * @return boolean
	 **/
	function getDisplayMessageStoreCustomText()
	{
		return $this->DisplayMessageStoreCustomText;
	}

	/**
	 * @return void
	 **/
	function setDisplayMessageStoreCustomText($value)
	{
		$this->DisplayMessageStoreCustomText = $value;
	}

	/**
	 * @return string
	 **/
	function getMessageStoreCustomText()
	{
		return $this->MessageStoreCustomText;
	}

	/**
	 * @return void
	 **/
	function setMessageStoreCustomText($value)
	{
		$this->MessageStoreCustomText = $value;
	}

}
?>
