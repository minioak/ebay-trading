<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'AdFormatLeadType.php';

/**
  * Returns number of leads and contact and other information for each lead. One
  * AdFormatLead node is returned for each lead.
  * 
 **/

class GetAdFormatLeadsResponseType extends AbstractResponseType
{
	/**
	* @var AdFormatLeadType
	**/
	protected $AdFormatLead;

	/**
	* @var int
	**/
	protected $AdFormatLeadCount;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetAdFormatLeadsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'AdFormatLead' =>
				array(
					'required' => false,
					'type' => 'AdFormatLeadType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'AdFormatLeadCount' =>
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
	 * @return AdFormatLeadType
	 * @param integer $index 
	 **/
	function getAdFormatLead($index = null)
	{
		if ($index !== null)
		{
			return $this->AdFormatLead[$index];
		}
		else
		{
			return $this->AdFormatLead;
		}
	}

	/**
	 * @return void
	 * @param AdFormatLeadType $value
	 * @param integer $index 
	 **/
	function setAdFormatLead($value, $index = null)
	{
		if ($index !== null)
		{
			$this->AdFormatLead[$index] = $value;
		}
		else
		{
			$this->AdFormatLead= $value;
		}
	}

	/**
	 * @return void
	 * @param AdFormatLeadType $value
	 **/
	function addAdFormatLead($value)
	{
		$this->AdFormatLead[] = $value;
	}

	/**
	 * @return int
	 **/
	function getAdFormatLeadCount()
	{
		return $this->AdFormatLeadCount;
	}

	/**
	 * @return void
	 **/
	function setAdFormatLeadCount($value)
	{
		$this->AdFormatLeadCount = $value;
	}

}
?>
