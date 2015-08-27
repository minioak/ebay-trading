<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_ComplexType.php';
require_once 'MetadataType.php';

/**
  * Type defining the <b>Recommendation</b> container(s) that are
  * conditionally returned in all Add/Revise/Relist/Verify API calls.
  * Each <b>Recommendation</b> container provides a message to the seller on
  * how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to use Fast 'N Free shipping.
  * <br><br>
  * One or more <b>Recommendation</b> containers can be returned for each
  * listing.
  * 
 **/

class ListingRecommendationType extends EbatNs_ComplexType
{
	/**
	* @var string
	**/
	protected $Type;

	/**
	* @var string
	**/
	protected $Group;

	/**
	* @var string
	**/
	protected $FieldName;

	/**
	* @var string
	**/
	protected $Code;

	/**
	* @var string
	**/
	protected $Value;

	/**
	* @var string
	**/
	protected $Message;

	/**
	* @var MetadataType
	**/
	protected $Metadata;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('ListingRecommendationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Type' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Group' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FieldName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Code' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Value' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'Message' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Metadata' =>
				array(
					'required' => false,
					'type' => 'MetadataType',
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
	 * @return string
	 **/
	function getType()
	{
		return $this->Type;
	}

	/**
	 * @return void
	 **/
	function setType($value)
	{
		$this->Type = $value;
	}

	/**
	 * @return string
	 **/
	function getGroup()
	{
		return $this->Group;
	}

	/**
	 * @return void
	 **/
	function setGroup($value)
	{
		$this->Group = $value;
	}

	/**
	 * @return string
	 **/
	function getFieldName()
	{
		return $this->FieldName;
	}

	/**
	 * @return void
	 **/
	function setFieldName($value)
	{
		$this->FieldName = $value;
	}

	/**
	 * @return string
	 **/
	function getCode()
	{
		return $this->Code;
	}

	/**
	 * @return void
	 **/
	function setCode($value)
	{
		$this->Code = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getValue($index = null)
	{
		if ($index !== null)
		{
			return $this->Value[$index];
		}
		else
		{
			return $this->Value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setValue($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Value[$index] = $value;
		}
		else
		{
			$this->Value= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addValue($value)
	{
		$this->Value[] = $value;
	}

	/**
	 * @return string
	 **/
	function getMessage()
	{
		return $this->Message;
	}

	/**
	 * @return void
	 **/
	function setMessage($value)
	{
		$this->Message = $value;
	}

	/**
	 * @return MetadataType
	 * @param integer $index 
	 **/
	function getMetadata($index = null)
	{
		if ($index !== null)
		{
			return $this->Metadata[$index];
		}
		else
		{
			return $this->Metadata;
		}
	}

	/**
	 * @return void
	 * @param MetadataType $value
	 * @param integer $index 
	 **/
	function setMetadata($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Metadata[$index] = $value;
		}
		else
		{
			$this->Metadata= $value;
		}
	}

	/**
	 * @return void
	 * @param MetadataType $value
	 **/
	function addMetadata($value)
	{
		$this->Metadata[] = $value;
	}

}
?>
