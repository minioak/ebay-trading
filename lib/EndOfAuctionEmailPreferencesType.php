<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'EndOfAuctionLogoTypeCodeType.php';

/**
  * Contains the seller's preferences for the email sent to the buyer after the creation of the order line item.
  * 
 **/

class EndOfAuctionEmailPreferencesType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $TemplateText;

	/**
	* @var anyURI
	**/
	protected $LogoURL;

	/**
	* @var EndOfAuctionLogoTypeCodeType
	**/
	protected $LogoType;

	/**
	* @var boolean
	**/
	protected $EmailCustomized;

	/**
	* @var boolean
	**/
	protected $TextCustomized;

	/**
	* @var boolean
	**/
	protected $LogoCustomized;

	/**
	* @var boolean
	**/
	protected $CopyEmail;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('EndOfAuctionEmailPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'TemplateText' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LogoURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LogoType' =>
				array(
					'required' => false,
					'type' => 'EndOfAuctionLogoTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EmailCustomized' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'TextCustomized' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LogoCustomized' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CopyEmail' =>
				array(
					'required' => false,
					'type' => 'boolean',
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
	function getTemplateText()
	{
		return $this->TemplateText;
	}

	/**
	 * @return void
	 **/
	function setTemplateText($value)
	{
		$this->TemplateText = $value;
	}

	/**
	 * @return anyURI
	 **/
	function getLogoURL()
	{
		return $this->LogoURL;
	}

	/**
	 * @return void
	 **/
	function setLogoURL($value)
	{
		$this->LogoURL = $value;
	}

	/**
	 * @return EndOfAuctionLogoTypeCodeType
	 **/
	function getLogoType()
	{
		return $this->LogoType;
	}

	/**
	 * @return void
	 **/
	function setLogoType($value)
	{
		$this->LogoType = $value;
	}

	/**
	 * @return boolean
	 **/
	function getEmailCustomized()
	{
		return $this->EmailCustomized;
	}

	/**
	 * @return void
	 **/
	function setEmailCustomized($value)
	{
		$this->EmailCustomized = $value;
	}

	/**
	 * @return boolean
	 **/
	function getTextCustomized()
	{
		return $this->TextCustomized;
	}

	/**
	 * @return void
	 **/
	function setTextCustomized($value)
	{
		$this->TextCustomized = $value;
	}

	/**
	 * @return boolean
	 **/
	function getLogoCustomized()
	{
		return $this->LogoCustomized;
	}

	/**
	 * @return void
	 **/
	function setLogoCustomized($value)
	{
		$this->LogoCustomized = $value;
	}

	/**
	 * @return boolean
	 **/
	function getCopyEmail()
	{
		return $this->CopyEmail;
	}

	/**
	 * @return void
	 **/
	function setCopyEmail($value)
	{
		$this->CopyEmail = $value;
	}

}
?>
