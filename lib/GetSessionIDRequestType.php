<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  * Retrieves a session ID that identifies a user and your application when you make a <b>FetchToken</b> request.
  * 
 **/

class GetSessionIDRequestType extends AbstractRequestType
{
	/**
	* @var string
	**/
	protected $RuName;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetSessionIDRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'RuName' =>
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
	function getRuName()
	{
		return $this->RuName;
	}

	/**
	 * @return void
	 **/
	function setRuName($value)
	{
		$this->RuName = $value;
	}

}
?>
