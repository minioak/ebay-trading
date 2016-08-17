<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'HistogramEntryType.php';

/**
  * This type is deprecated.
  * 
 **/

class CharacteristicsSetProductHistogramType extends EbatNs_ComplexType
{
	/**
	* @var HistogramEntryType
	**/
	protected $HistogramEntry;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CharacteristicsSetProductHistogramType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'HistogramEntry' =>
				array(
					'required' => false,
					'type' => 'HistogramEntryType',
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
	 * @return HistogramEntryType
	 * @param integer $index 
	 **/
	function getHistogramEntry($index = null)
	{
		if ($index !== null)
		{
			return $this->HistogramEntry[$index];
		}
		else
		{
			return $this->HistogramEntry;
		}
	}

	/**
	 * @return void
	 * @param HistogramEntryType $value
	 * @param integer $index 
	 **/
	function setHistogramEntry($value, $index = null)
	{
		if ($index !== null)
		{
			$this->HistogramEntry[$index] = $value;
		}
		else
		{
			$this->HistogramEntry= $value;
		}
	}

	/**
	 * @return void
	 * @param HistogramEntryType $value
	 **/
	function addHistogramEntry($value)
	{
		$this->HistogramEntry[] = $value;
	}

}
?>
