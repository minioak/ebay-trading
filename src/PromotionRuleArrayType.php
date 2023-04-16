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
class PromotionRuleArrayType extends EbatNs_ComplexType
{
    const TAG = 'PromotionRuleArrayType';
    const NAME = 'PromotionRuleArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PromotionRuleType[]|null
     */
    protected $PromotionRule = [];


    /**
     * @return PromotionRuleType[]|PromotionRuleType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPromotionRule($index = null)
    {
        return $this->_dc($index === null
            ? $this->PromotionRule
            : (count($this->PromotionRule) > $index
                ? $this->PromotionRule[$index]
                : null), 'PromotionRule');
    }

    /**
     * @param PromotionRuleType|null|PromotionRuleType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPromotionRule($value, $index = null)
    {
        if ($index === null) {
            $this->PromotionRule = $value;
        } else {
            $this->PromotionRule[$index] = [];
            
            foreach ($value as $item) {
                $this->addPromotionRule($item);
            }
        }
    }

    /**
     * @param PromotionRuleType|null $value
     * @return void
     */
    public function addPromotionRule($value)
    {
        $this->PromotionRule[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['PromotionRule' => ['type' => 'PromotionRuleType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

PromotionRuleArrayType::_register();
