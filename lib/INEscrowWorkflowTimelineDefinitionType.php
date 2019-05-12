<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/** 
  * Defines the escrow workflow version applicable for the given category on the India site, if the category
  * supports PaisaPayFullEscrow. If this field is present, the corresponding feature applies to the category. 
  * The fieldis returned as an empty element. 
  * 
 **/

class INEscrowWorkflowTimelineDefinitionType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('INEscrowWorkflowTimelineDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

}
?>
