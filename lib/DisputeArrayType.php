<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'DisputeType.php';

/**
  * Type used by the <b>DisputeArray</b> container that is returned in the response of the <b>GetUserDisputes</b>. The <b>DisputeArray</b> container holds an array of one or more disputes that match the filter criteria in the call request.
  * <br/><br/>
  * <span class="tablenote"><strong>Note:</strong>
  * These are not eBay Money Back Guarantee cases.
  * </span>
  * 
 **/

class DisputeArrayType extends EbatNs_ComplexType
{
	/**
	* @var DisputeType
	**/
	protected $Dispute;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('DisputeArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Dispute' =>
				array(
					'required' => false,
					'type' => 'DisputeType',
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
	 * @return DisputeType
	 * @param integer $index 
	 **/
	function getDispute($index = null)
	{
		if ($index !== null)
		{
			return $this->Dispute[$index];
		}
		else
		{
			return $this->Dispute;
		}
	}

	/**
	 * @return void
	 * @param DisputeType $value
	 * @param integer $index 
	 **/
	function setDispute($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Dispute[$index] = $value;
		}
		else
		{
			$this->Dispute= $value;
		}
	}

	/**
	 * @return void
	 * @param DisputeType $value
	 **/
	function addDispute($value)
	{
		$this->Dispute[] = $value;
	}

}
?>
