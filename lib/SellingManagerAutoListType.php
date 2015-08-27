<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SellingManagerAutoListMinActiveItemsType.php';
require_once 'SellingManagerAutoListAccordingToScheduleType.php';

/**
  * Provides information about an automated listing rule.   
  * Automated listing rules cannot be combined with automated relisting rules.
  * A template can have one set of information per automated listing rule specified.
  * 
 **/

class SellingManagerAutoListType extends EbatNs_ComplexType
{
	/**
	* @var long
	**/
	protected $SourceSaleTemplateID;

	/**
	* @var SellingManagerAutoListMinActiveItemsType
	**/
	protected $KeepMinActive;

	/**
	* @var SellingManagerAutoListAccordingToScheduleType
	**/
	protected $ListAccordingToSchedule;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellingManagerAutoListType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'SourceSaleTemplateID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'KeepMinActive' =>
				array(
					'required' => false,
					'type' => 'SellingManagerAutoListMinActiveItemsType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ListAccordingToSchedule' =>
				array(
					'required' => false,
					'type' => 'SellingManagerAutoListAccordingToScheduleType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return long
	 **/
	function getSourceSaleTemplateID()
	{
		return $this->SourceSaleTemplateID;
	}

	/**
	 * @return void
	 **/
	function setSourceSaleTemplateID($value)
	{
		$this->SourceSaleTemplateID = $value;
	}

	/**
	 * @return SellingManagerAutoListMinActiveItemsType
	 **/
	function getKeepMinActive()
	{
		return $this->KeepMinActive;
	}

	/**
	 * @return void
	 **/
	function setKeepMinActive($value)
	{
		$this->KeepMinActive = $value;
	}

	/**
	 * @return SellingManagerAutoListAccordingToScheduleType
	 **/
	function getListAccordingToSchedule()
	{
		return $this->ListAccordingToSchedule;
	}

	/**
	 * @return void
	 **/
	function setListAccordingToSchedule($value)
	{
		$this->ListAccordingToSchedule = $value;
	}

}
?>
