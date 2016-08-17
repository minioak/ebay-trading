<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'PictureURLsType.php';

/**
  * This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay
  * Picture Services (EPS), that was generated when the self-hosted picture was uploaded.
  * 
 **/

class ExtendedPictureDetailsType extends EbatNs_ComplexType
{
	/**
	* @var PictureURLsType
	**/
	protected $PictureURLs;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ExtendedPictureDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'PictureURLs' =>
				array(
					'required' => false,
					'type' => 'PictureURLsType',
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
	 * @return PictureURLsType
	 * @param integer $index 
	 **/
	function getPictureURLs($index = null)
	{
		if ($index !== null)
		{
			return $this->PictureURLs[$index];
		}
		else
		{
			return $this->PictureURLs;
		}
	}

	/**
	 * @return void
	 * @param PictureURLsType $value
	 * @param integer $index 
	 **/
	function setPictureURLs($value, $index = null)
	{
		if ($index !== null)
		{
			$this->PictureURLs[$index] = $value;
		}
		else
		{
			$this->PictureURLs= $value;
		}
	}

	/**
	 * @return void
	 * @param PictureURLsType $value
	 **/
	function addPictureURLs($value)
	{
		$this->PictureURLs[] = $value;
	}

}
?>
