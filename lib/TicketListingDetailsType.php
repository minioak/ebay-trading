<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>TicketListingDetails</b> container, which is used in
  * an <b>Add</b>/<b>Revise</b>/<b>Relist</b> call to provide more details about event tickets.
  * 
 **/

class TicketListingDetailsType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $EventTitle;

	/**
	* @var string
	**/
	protected $Venue;

	/**
	* @var string
	**/
	protected $PrintedDate;

	/**
	* @var string
	**/
	protected $PrintedTime;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('TicketListingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'EventTitle' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Venue' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PrintedDate' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PrintedTime' =>
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
	function getEventTitle()
	{
		return $this->EventTitle;
	}

	/**
	 * @return void
	 **/
	function setEventTitle($value)
	{
		$this->EventTitle = $value;
	}

	/**
	 * @return string
	 **/
	function getVenue()
	{
		return $this->Venue;
	}

	/**
	 * @return void
	 **/
	function setVenue($value)
	{
		$this->Venue = $value;
	}

	/**
	 * @return string
	 **/
	function getPrintedDate()
	{
		return $this->PrintedDate;
	}

	/**
	 * @return void
	 **/
	function setPrintedDate($value)
	{
		$this->PrintedDate = $value;
	}

	/**
	 * @return string
	 **/
	function getPrintedTime()
	{
		return $this->PrintedTime;
	}

	/**
	 * @return void
	 **/
	function setPrintedTime($value)
	{
		$this->PrintedTime = $value;
	}

}
?>
