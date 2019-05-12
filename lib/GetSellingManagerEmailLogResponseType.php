<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'SellingManagerEmailLogType.php';

/**
  * Returns the log of emails not sent.
  * 
 **/

class GetSellingManagerEmailLogResponseType extends AbstractResponseType
{
	/**
	* @var SellingManagerEmailLogType
	**/
	protected $EmailLog;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetSellingManagerEmailLogResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'EmailLog' =>
				array(
					'required' => false,
					'type' => 'SellingManagerEmailLogType',
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
	 * @return SellingManagerEmailLogType
	 * @param integer $index 
	 **/
	function getEmailLog($index = null)
	{
		if ($index !== null)
		{
			return $this->EmailLog[$index];
		}
		else
		{
			return $this->EmailLog;
		}
	}

	/**
	 * @return void
	 * @param SellingManagerEmailLogType $value
	 * @param integer $index 
	 **/
	function setEmailLog($value, $index = null)
	{
		if ($index !== null)
		{
			$this->EmailLog[$index] = $value;
		}
		else
		{
			$this->EmailLog= $value;
		}
	}

	/**
	 * @return void
	 * @param SellingManagerEmailLogType $value
	 **/
	function addEmailLog($value)
	{
		$this->EmailLog[] = $value;
	}

}
?>
