<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';
require_once 'PictureManagerSubscriptionType.php';
require_once 'PictureManagerPictureDisplayType.php';

/**
  *       Returns a list of Picture Manager options and allowed values.
  *     
 **/

class GetPictureManagerOptionsResponseType extends AbstractResponseType
{
	/**
	* @var PictureManagerSubscriptionType
	**/
	protected $Subscription;

	/**
	* @var PictureManagerPictureDisplayType
	**/
	protected $PictureType;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetPictureManagerOptionsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'Subscription' =>
				array(
					'required' => false,
					'type' => 'PictureManagerSubscriptionType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'PictureType' =>
				array(
					'required' => false,
					'type' => 'PictureManagerPictureDisplayType',
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
	 * @return PictureManagerSubscriptionType
	 * @param integer $index 
	 **/
	function getSubscription($index = null)
	{
		if ($index !== null)
		{
			return $this->Subscription[$index];
		}
		else
		{
			return $this->Subscription;
		}
	}

	/**
	 * @return void
	 * @param PictureManagerSubscriptionType $value
	 * @param integer $index 
	 **/
	function setSubscription($value, $index = null)
	{
		if ($index !== null)
		{
			$this->Subscription[$index] = $value;
		}
		else
		{
			$this->Subscription= $value;
		}
	}

	/**
	 * @return void
	 * @param PictureManagerSubscriptionType $value
	 **/
	function addSubscription($value)
	{
		$this->Subscription[] = $value;
	}

	/**
	 * @return PictureManagerPictureDisplayType
	 * @param integer $index 
	 **/
	function getPictureType($index = null)
	{
		if ($index !== null)
		{
			return $this->PictureType[$index];
		}
		else
		{
			return $this->PictureType;
		}
	}

	/**
	 * @return void
	 * @param PictureManagerPictureDisplayType $value
	 * @param integer $index 
	 **/
	function setPictureType($value, $index = null)
	{
		if ($index !== null)
		{
			$this->PictureType[$index] = $value;
		}
		else
		{
			$this->PictureType= $value;
		}
	}

	/**
	 * @return void
	 * @param PictureManagerPictureDisplayType $value
	 **/
	function addPictureType($value)
	{
		$this->PictureType[] = $value;
	}

}
?>
