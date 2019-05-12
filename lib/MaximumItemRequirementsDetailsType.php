<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**A means of limiting unpaying or low feedback bidders.
 **/

class MaximumItemRequirementsDetailsType extends EbatNs_ComplexType
{
	/**
	* @var int
	**/
	protected $MaximumItemCount;

	/**
	* @var int
	**/
	protected $MinimumFeedbackScore;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MaximumItemRequirementsDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MaximumItemCount' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'MinimumFeedbackScore' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return int
	 * @param integer $index 
	 **/
	function getMaximumItemCount($index = null)
	{
		if ($index !== null)
		{
			return $this->MaximumItemCount[$index];
		}
		else
		{
			return $this->MaximumItemCount;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 * @param integer $index 
	 **/
	function setMaximumItemCount($value, $index = null)
	{
		if ($index !== null)
		{
			$this->MaximumItemCount[$index] = $value;
		}
		else
		{
			$this->MaximumItemCount= $value;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 **/
	function addMaximumItemCount($value)
	{
		$this->MaximumItemCount[] = $value;
	}

	/**
	 * @return int
	 * @param integer $index 
	 **/
	function getMinimumFeedbackScore($index = null)
	{
		if ($index !== null)
		{
			return $this->MinimumFeedbackScore[$index];
		}
		else
		{
			return $this->MinimumFeedbackScore;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 * @param integer $index 
	 **/
	function setMinimumFeedbackScore($value, $index = null)
	{
		if ($index !== null)
		{
			$this->MinimumFeedbackScore[$index] = $value;
		}
		else
		{
			$this->MinimumFeedbackScore= $value;
		}
	}

	/**
	 * @return void
	 * @param int $value
	 **/
	function addMinimumFeedbackScore($value)
	{
		$this->MinimumFeedbackScore[] = $value;
	}

}
?>
