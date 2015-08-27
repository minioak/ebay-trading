<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Enables a seller to add custom Ask Seller a Question (ASQ)
  * subjects to display on the seller's Ask a Question page, or reset
  * the custom subjects to the default values.
  * 
 **/

class ASQPreferencesType extends EbatNs_ComplexType
{
	/**
	* @var boolean
	**/
	protected $ResetDefaultSubjects;

	/**
	* @var string
	**/
	protected $Subject;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ASQPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ResetDefaultSubjects' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Subject' =>
				array(
					'required' => false,
					'type' => 'string',
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
	 * @return boolean
	 **/
	function getResetDefaultSubjects()
	{
		return $this->ResetDefaultSubjects;
	}

	/**
	 * @return void
	 **/
	function setResetDefaultSubjects($value)
	{
		$this->ResetDefaultSubjects = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getSubject($index = null)
	{
		if ($index !== null)
		{
			return $this->Subject[$index];
		}
		else
		{
			return $this->Subject;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setSubject($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Subject[$index] = $value;
		}
		else
		{
			$this->Subject= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addSubject($value)
	{
		$this->Subject[] = $value;
	}

}
?>
