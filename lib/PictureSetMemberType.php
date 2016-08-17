<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';

/**
  * URL and size information for each generated and stored picture.
  * This data is provided for use in application previews of pictures.
  * This data is used for display control for specific pictures in the generated imageset.
  * This container is supplied for all generated pictures.
  * 
 **/

class PictureSetMemberType extends EbatNs_ComplexType
{
	/**
	* @var anyURI
	**/
	protected $MemberURL;

	/**
	* @var int
	**/
	protected $PictureHeight;

	/**
	* @var int
	**/
	protected $PictureWidth;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('PictureSetMemberType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'MemberURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PictureHeight' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PictureWidth' =>
				array(
					'required' => false,
					'type' => 'int',
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
	 * @return anyURI
	 **/
	function getMemberURL()
	{
		return $this->MemberURL;
	}

	/**
	 * @return void
	 **/
	function setMemberURL($value)
	{
		$this->MemberURL = $value;
	}

	/**
	 * @return int
	 **/
	function getPictureHeight()
	{
		return $this->PictureHeight;
	}

	/**
	 * @return void
	 **/
	function setPictureHeight($value)
	{
		$this->PictureHeight = $value;
	}

	/**
	 * @return int
	 **/
	function getPictureWidth()
	{
		return $this->PictureWidth;
	}

	/**
	 * @return void
	 **/
	function setPictureWidth($value)
	{
		$this->PictureWidth = $value;
	}

}
?>
