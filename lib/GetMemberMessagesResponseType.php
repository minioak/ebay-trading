<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'MemberMessageExchangeArrayType.php';
require_once 'PaginationResultType.php';

/**
  * Retrieves a list of the messages buyers have posted about your
  * active item listings.
  * 
 **/

class GetMemberMessagesResponseType extends AbstractResponseType
{
	/**
	* @var MemberMessageExchangeArrayType
	**/
	protected $MemberMessage;

	/**
	* @var PaginationResultType
	**/
	protected $PaginationResult;

	/**
	* @var boolean
	**/
	protected $HasMoreItems;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetMemberMessagesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MemberMessage' =>
				array(
					'required' => false,
					'type' => 'MemberMessageExchangeArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaginationResult' =>
				array(
					'required' => false,
					'type' => 'PaginationResultType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HasMoreItems' =>
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
	 * @return MemberMessageExchangeArrayType
	 **/
	function getMemberMessage()
	{
		return $this->MemberMessage;
	}

	/**
	 * @return void
	 **/
	function setMemberMessage($value)
	{
		$this->MemberMessage = $value;
	}

	/**
	 * @return PaginationResultType
	 **/
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}

	/**
	 * @return void
	 **/
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}

	/**
	 * @return boolean
	 **/
	function getHasMoreItems()
	{
		return $this->HasMoreItems;
	}

	/**
	 * @return void
	 **/
	function setHasMoreItems($value)
	{
		$this->HasMoreItems = $value;
	}

}
?>
