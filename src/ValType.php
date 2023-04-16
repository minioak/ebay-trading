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
 * This type is only applicable for Half.com listings, and since the Half.com site has been shut down, this type is
 * no longer applicable.
 **/
class ValType extends EbatNs_ComplexType
{
    const TAG = 'ValType';
    const NAME = 'ValType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ValueLiteral = null;

    /**
     * @var string[]|null
     */
    protected $SuggestedValueLiteral = [];

    /**
     * @var int|null
     */
    protected $ValueID = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getValueLiteral()
    {
        return $this->_dc($this->ValueLiteral, 'ValueLiteral');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setValueLiteral($value)
    {
        $this->ValueLiteral = self::_string($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSuggestedValueLiteral($index = null)
    {
        return $this->_dc($index === null
            ? $this->SuggestedValueLiteral
            : (count($this->SuggestedValueLiteral) > $index
                ? $this->SuggestedValueLiteral[$index]
                : null), 'SuggestedValueLiteral');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSuggestedValueLiteral($value, $index = null)
    {
        if ($index === null) {
            $this->SuggestedValueLiteral = $value;
        } else {
            $this->SuggestedValueLiteral[$index] = [];
            
            foreach ($value as $item) {
                $this->addSuggestedValueLiteral($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addSuggestedValueLiteral($value)
    {
        $this->SuggestedValueLiteral[] = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getValueID()
    {
        return $this->_dc($this->ValueID, 'ValueID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setValueID($value)
    {
        $this->ValueID = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ValueLiteral' => [],
            'SuggestedValueLiteral' => ['cardinality' => '0..*'],
            'ValueID' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ValType::_register();
