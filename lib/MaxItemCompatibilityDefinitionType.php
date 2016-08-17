<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * Defines the maximum limit on compatible applications as part of the parts
  * compatibility feature. If the field is present, the corresponding feature applies
  * to the site. The field is returned as an empty element (e.g., a boolean value is
  * not returned).
  * <br><br>
  * Parts compatibility listings contain information to determine the assemblies with
  * which a part is compatible. For example, an automotive part or accessory listed
  * witih parts compatibility can be matched with vehicles (e.g., specific years,
  * makes, and models) with which the part or accessory can  be used.
  * <br><br>
  * There are two ways to enter parts compatibility: by application and by
  * specification. 
  * <ul>
  * <li> Entering parts compatibility by application specifies the assemblies
  * (e.g., a specific year, make, and model of car) to which the item applies. This can
  * be done automatically by listing with a catalog product that supports parts
  * compatibility, or manually, using <b
  * class="con">Item.ItemCompatibilityList</b> when listing or revising an
  * item. </li>
  * <li>Entering parts compatibility by specification involves specifying the
  * part's relevant dimensions and characteristics necessary to determine the
  * assemblies with which the part is compatible (e.g., Section Width, Aspect Ratio,
  * Rim Diammeter, Load Index, and Speed Rating values for a tire) using
  * attributes.</li>
  * </ul>
  * 
 **/

class MaxItemCompatibilityDefinitionType extends EbatNs_ComplexType
{

	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('MaxItemCompatibilityDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
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
