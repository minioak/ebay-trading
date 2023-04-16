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
 * Provides a list of products recommended by eBay, which match the item information
 * provided by the seller.
 **/
class ProductSuggestionsType extends EbatNs_ComplexType
{
    const TAG = 'ProductSuggestionsType';
    const NAME = 'ProductSuggestionsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ProductSuggestionType[]|null
     */
    protected $ProductSuggestion = [];


    /**
     * @return ProductSuggestionType[]|ProductSuggestionType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getProductSuggestion($index = null)
    {
        return $this->_dc($index === null
            ? $this->ProductSuggestion
            : (count($this->ProductSuggestion) > $index
                ? $this->ProductSuggestion[$index]
                : null), 'ProductSuggestion');
    }

    /**
     * @param ProductSuggestionType|null|ProductSuggestionType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setProductSuggestion($value, $index = null)
    {
        if ($index === null) {
            $this->ProductSuggestion = $value;
        } else {
            $this->ProductSuggestion[$index] = [];
            
            foreach ($value as $item) {
                $this->addProductSuggestion($item);
            }
        }
    }

    /**
     * @param ProductSuggestionType|null $value
     * @return void
     */
    public function addProductSuggestion($value)
    {
        $this->ProductSuggestion[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ProductSuggestion' => ['type' => 'ProductSuggestionType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

ProductSuggestionsType::_register();
