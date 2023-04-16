<?php

namespace InTradeSys\eBay\trading;

/*
 * This class was generated from a WSDL file from March 29, 2023, 11:17 am.
 * Executed by globalsync.
 * Provided and maintained by:
 *
 *  InTradeSys GmbH
 *  Dillenburger Str. 75
 *  D-51105 Cologne
 *  ---
 *  https://www.intradesys.com
 *
 *
 * For paid support options ranging from on-demand,
 * best effort to 24/7 SLAs, please contact us anytime:
 *  ebay.api@InTradeSys.com
 *
 * For more information, visit:
 *  https://sdk.intradesys.com
 */


/**
 * This type was replaced by
 * ListingRecommendationType
 **/
class RecommendationType extends EbatNs_ComplexType
{
    const TAG = 'RecommendationType';
    const NAME = 'RecommendationType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $FieldGroup = null;

    /**
     * @var string|null
     */
    protected $FieldName = null;

    /**
     * @var string|null
     */
    protected $RecommendationCode = null;

    /**
     * @var string[]|null
     */
    protected $RecommendedValue = [];

    /**
     * @var string|null
     */
    protected $Message = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFieldGroup()
    {
        return $this->_dc($this->FieldGroup, 'FieldGroup');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFieldGroup($value)
    {
        $this->FieldGroup = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFieldName()
    {
        return $this->_dc($this->FieldName, 'FieldName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFieldName($value)
    {
        $this->FieldName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRecommendationCode()
    {
        return $this->_dc($this->RecommendationCode, 'RecommendationCode');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setRecommendationCode($value)
    {
        $this->RecommendationCode = self::_string($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getRecommendedValue($index = null)
    {
        return $this->_dc($index === null
            ? $this->RecommendedValue
            : (count($this->RecommendedValue) > $index
                ? $this->RecommendedValue[$index]
                : null), 'RecommendedValue');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setRecommendedValue($value, $index = null)
    {
        if ($index === null) {
            $this->RecommendedValue = $value;
        } else {
            $this->RecommendedValue[$index] = [];
            
            foreach ($value as $item) {
                $this->addRecommendedValue($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addRecommendedValue($value)
    {
        $this->RecommendedValue[] = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessage()
    {
        return $this->_dc($this->Message, 'Message');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setMessage($value)
    {
        $this->Message = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'FieldGroup' => [],
            'FieldName' => [],
            'RecommendationCode' => [],
            'RecommendedValue' => ['cardinality' => '0..*'],
            'Message' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RecommendationType::_register();
