<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'ContextSearchAssetType.php';

/**
  * Response to a GetContextualKeywords request.
  * 
 **/

class GetContextualKeywordsResponseType extends AbstractResponseType
{
	/**
	* @var ContextSearchAssetType
	**/
	protected $ContextSearchAsset;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetContextualKeywordsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ContextSearchAsset' =>
				array(
					'required' => false,
					'type' => 'ContextSearchAssetType',
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
	 * @return ContextSearchAssetType
	 * @param integer $index 
	 **/
	function getContextSearchAsset($index = null)
	{
		if ($index !== null)
		{
			return $this->ContextSearchAsset[$index];
		}
		else
		{
			return $this->ContextSearchAsset;
		}
	}

	/**
	 * @return void
	 * @param ContextSearchAssetType $value
	 * @param integer $index 
	 **/
	function setContextSearchAsset($value, $index = null)
	{
		if ($index !== null)
		{
			$this->ContextSearchAsset[$index] = $value;
		}
		else
		{
			$this->ContextSearchAsset= $value;
		}
	}

	/**
	 * @return void
	 * @param ContextSearchAssetType $value
	 **/
	function addContextSearchAsset($value)
	{
		$this->ContextSearchAsset[] = $value;
	}

}
?>
