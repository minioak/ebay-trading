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
 * This type is deprecated.
 **/
class UnitOfMeasurementType extends EbatNs_ComplexType
{
    const TAG = 'UnitOfMeasurementType';
    const NAME = 'UnitOfMeasurementType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string[]|null
     */
    protected $AlternateText = [];

    /**
     * @var string|null
     */
    protected $SuggestedText = null;


    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAlternateText($index = null)
    {
        return $this->_dc($index === null
            ? $this->AlternateText
            : (count($this->AlternateText) > $index
                ? $this->AlternateText[$index]
                : null), 'AlternateText');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAlternateText($value, $index = null)
    {
        if ($index === null) {
            $this->AlternateText = $value;
        } else {
            $this->AlternateText[$index] = [];
            
            foreach ($value as $item) {
                $this->addAlternateText($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addAlternateText($value)
    {
        $this->AlternateText[] = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSuggestedText()
    {
        return $this->_dc($this->SuggestedText, 'SuggestedText');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setSuggestedText($value)
    {
        $this->SuggestedText = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AlternateText' => ['cardinality' => '0..*'],
            'SuggestedText' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

UnitOfMeasurementType::_register();
