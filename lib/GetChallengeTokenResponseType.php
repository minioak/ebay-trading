<?php
/* Generated on 10.08.16 17:04 by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'AbstractResponseType.php';

/**
  * Response to GetChallengeToken request.
  * 
 **/

class GetChallengeTokenResponseType extends AbstractResponseType
{
	/**
	* @var string
	**/
	protected $ChallengeToken;

	/**
	* @var string
	**/
	protected $ImageChallengeURL;

	/**
	* @var string
	**/
	protected $AudioChallengeURL;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetChallengeTokenResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ChallengeToken' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ImageChallengeURL' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'AudioChallengeURL' =>
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
	 * @return string
	 **/
	function getChallengeToken()
	{
		return $this->ChallengeToken;
	}

	/**
	 * @return void
	 **/
	function setChallengeToken($value)
	{
		$this->ChallengeToken = $value;
	}

	/**
	 * @return string
	 **/
	function getImageChallengeURL()
	{
		return $this->ImageChallengeURL;
	}

	/**
	 * @return void
	 **/
	function setImageChallengeURL($value)
	{
		$this->ImageChallengeURL = $value;
	}

	/**
	 * @return string
	 **/
	function getAudioChallengeURL()
	{
		return $this->AudioChallengeURL;
	}

	/**
	 * @return void
	 **/
	function setAudioChallengeURL($value)
	{
		$this->AudioChallengeURL = $value;
	}

}
?>
