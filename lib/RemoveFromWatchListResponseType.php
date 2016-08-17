<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';

/**
  * Returns information about the user's My eBay watch list.
  * 
 **/

class RemoveFromWatchListResponseType extends AbstractResponseType
{
	/**
	* @var int
	**/
	protected $WatchListCount;

	/**
	* @var int
	**/
	protected $WatchListMaximum;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('RemoveFromWatchListResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'WatchListCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'WatchListMaximum' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return int
	 **/
	function getWatchListCount()
	{
		return $this->WatchListCount;
	}

	/**
	 * @return void
	 **/
	function setWatchListCount($value)
	{
		$this->WatchListCount = $value;
	}

	/**
	 * @return int
	 **/
	function getWatchListMaximum()
	{
		return $this->WatchListMaximum;
	}

	/**
	 * @return void
	 **/
	function setWatchListMaximum($value)
	{
		$this->WatchListMaximum = $value;
	}

}
?>
