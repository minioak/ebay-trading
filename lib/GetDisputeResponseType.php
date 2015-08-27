<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'DisputeType.php';

/**
  *         Returned after calling GetDisputeRequest. Returns the record of
  *       a dispute, including the dispute state and other information.
  *       <br><br>Both Sellers and Buyers can use the SellerClosedDispute in
  *       Platform Notifications to receive a notification when a dispute has been closed.
  *       The notification includes the same data that is returned in the GetDispute response.
  * 
 **/

class GetDisputeResponseType extends AbstractResponseType
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
		parent::__construct('GetDisputeResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Dispute' =>
				array(
					'required' => false,
					'type' => 'DisputeType',
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
	 * @return DisputeType
	 **/
	function getDispute()
	{
		return $this->Dispute;
	}

	/**
	 * @return void
	 **/
	function setDispute($value)
	{
		$this->Dispute = $value;
	}

}
?>
