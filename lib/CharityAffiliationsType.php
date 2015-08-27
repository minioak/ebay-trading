<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'CharityIDType.php';

/**
  * Lists the nonprofit charity organization affiliations for a specified user.
  * 
 **/

class CharityAffiliationsType extends EbatNs_ComplexType
{
	/**
	* @var CharityIDType
	**/
	protected $CharityID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('CharityAffiliationsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'CharityID' =>
				array(
					'required' => false,
					'type' => 'CharityIDType',
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
	 * @return CharityIDType
	 * @param integer $index 
	 **/
	function getCharityID($index = null)
	{
		if ($index !== null)
		{
			return $this->CharityID[$index];
		}
		else
		{
			return $this->CharityID;
		}
	}

	/**
	 * @return void
	 * @param CharityIDType $value
	 * @param integer $index 
	 **/
	function setCharityID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->CharityID[$index] = $value;
		}
		else
		{
			$this->CharityID= $value;
		}
	}

	/**
	 * @return void
	 * @param CharityIDType $value
	 **/
	function addCharityID($value)
	{
		$this->CharityID[] = $value;
	}

}
?>
