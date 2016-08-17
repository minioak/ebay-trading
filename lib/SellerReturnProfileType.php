<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Type defining the <b>SellerReturnProfile</b> container, which is used in an 
  * Add/Revise/Relist Trading API call to reference a Business Policies return policy profile.
  * Business Policies return policy profiles contain detailed information on 
  * the seller's return policy, including the refund option, how many days the buyer has
  * to return the item for a refund, warranty information, and restocking fee (if any).
  * <br/><br/>
  * Business Policies return policy profiles are also returned in 
  * <b>GetItem</b>, <b>GetMyeBaySelling</b>, and other 
  * Trading calls that retrieve Item data.
  * 
 **/

class SellerReturnProfileType extends EbatNs_ComplexType
{
	/**
	* @var long
	**/
	protected $ReturnProfileID;

	/**
	* @var string
	**/
	protected $ReturnProfileName;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellerReturnProfileType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ReturnProfileID' =>
				array(
					'required' => false,
					'type' => 'long',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ReturnProfileName' =>
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
	 * @return long
	 **/
	function getReturnProfileID()
	{
		return $this->ReturnProfileID;
	}

	/**
	 * @return void
	 **/
	function setReturnProfileID($value)
	{
		$this->ReturnProfileID = $value;
	}

	/**
	 * @return string
	 **/
	function getReturnProfileName()
	{
		return $this->ReturnProfileName;
	}

	/**
	 * @return void
	 **/
	function setReturnProfileName($value)
	{
		$this->ReturnProfileName = $value;
	}

}
?>
