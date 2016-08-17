<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'SellerDashboardAlertSeverityCodeType.php';

/**
  * A message to help the you understand your status as a seller (PowerSeller status, 
  * policy compliance status, etc.).
  * 
 **/

class SellerDashboardAlertType extends EbatNs_ComplexType
{
	/**
	* @var SellerDashboardAlertSeverityCodeType
	**/
	protected $Severity;

	/**
	* @var string
	**/
	protected $Text;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('SellerDashboardAlertType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Severity' =>
				array(
					'required' => false,
					'type' => 'SellerDashboardAlertSeverityCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Text' =>
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
	 * @return SellerDashboardAlertSeverityCodeType
	 **/
	function getSeverity()
	{
		return $this->Severity;
	}

	/**
	 * @return void
	 **/
	function setSeverity($value)
	{
		$this->Severity = $value;
	}

	/**
	 * @return string
	 **/
	function getText()
	{
		return $this->Text;
	}

	/**
	 * @return void
	 **/
	function setText($value)
	{
		$this->Text = $value;
	}

}
?>
