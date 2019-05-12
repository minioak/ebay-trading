<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractRequestType.php';

/**
  * Retrieves top-ranked contextual eBay keywords and categories
  * for a specified web page.
  * 
 **/

class GetContextualKeywordsRequestType extends AbstractRequestType
{
	/**
	* @var anyURI
	**/
	protected $URL;

	/**
	* @var string
	**/
	protected $Encoding;

	/**
	* @var string
	**/
	protected $CategoryID;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetContextualKeywordsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'URL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Encoding' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CategoryID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return anyURI
	 **/
	function getURL()
	{
		return $this->URL;
	}

	/**
	 * @return void
	 **/
	function setURL($value)
	{
		$this->URL = $value;
	}

	/**
	 * @return string
	 **/
	function getEncoding()
	{
		return $this->Encoding;
	}

	/**
	 * @return void
	 **/
	function setEncoding($value)
	{
		$this->Encoding = $value;
	}

	/**
	 * @return string
	 * @param integer $index 
	 **/
	function getCategoryID($index = null)
	{
		if ($index !== null)
		{
			return $this->CategoryID[$index];
		}
		else
		{
			return $this->CategoryID;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 * @param integer $index 
	 **/
	function setCategoryID($value, $index = null)
	{
		if ($index !== null)
		{
			$this->CategoryID[$index] = $value;
		}
		else
		{
			$this->CategoryID= $value;
		}
	}

	/**
	 * @return void
	 * @param string $value
	 **/
	function addCategoryID($value)
	{
		$this->CategoryID[] = $value;
	}

}
?>
