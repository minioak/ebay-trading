<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Contains the message portion of a listing tip that is returned by the Listing Analyzer engine.
  * 
 **/

class ListingTipMessageType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $ListingTipMessageID;

	/**
	* @var string
	**/
	protected $ShortMessage;

	/**
	* @var string
	**/
	protected $LongMessage;

	/**
	* @var string
	**/
	protected $HelpURLPath;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ListingTipMessageType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ListingTipMessageID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ShortMessage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'LongMessage' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HelpURLPath' =>
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
	function getListingTipMessageID()
	{
		return $this->ListingTipMessageID;
	}

	/**
	 * @return void
	 **/
	function setListingTipMessageID($value)
	{
		$this->ListingTipMessageID = $value;
	}

	/**
	 * @return string
	 **/
	function getShortMessage()
	{
		return $this->ShortMessage;
	}

	/**
	 * @return void
	 **/
	function setShortMessage($value)
	{
		$this->ShortMessage = $value;
	}

	/**
	 * @return string
	 **/
	function getLongMessage()
	{
		return $this->LongMessage;
	}

	/**
	 * @return void
	 **/
	function setLongMessage($value)
	{
		$this->LongMessage = $value;
	}

	/**
	 * @return string
	 **/
	function getHelpURLPath()
	{
		return $this->HelpURLPath;
	}

	/**
	 * @return void
	 **/
	function setHelpURLPath($value)
	{
		$this->HelpURLPath = $value;
	}

}
?>
