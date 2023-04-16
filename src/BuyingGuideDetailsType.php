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
class BuyingGuideDetailsType extends EbatNs_ComplexType
{
    const TAG = 'BuyingGuideDetailsType';
    const NAME = 'BuyingGuideDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var BuyingGuideType[]|null
     */
    protected $BuyingGuide = [];

    /**
     * @var string|null
     */
    protected $BuyingGuideHub = null;


    /**
     * @return BuyingGuideType[]|BuyingGuideType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getBuyingGuide($index = null)
    {
        return $this->_dc($index === null
            ? $this->BuyingGuide
            : (count($this->BuyingGuide) > $index
                ? $this->BuyingGuide[$index]
                : null), 'BuyingGuide');
    }

    /**
     * @param BuyingGuideType|null|BuyingGuideType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setBuyingGuide($value, $index = null)
    {
        if ($index === null) {
            $this->BuyingGuide = $value;
        } else {
            $this->BuyingGuide[$index] = [];
            
            foreach ($value as $item) {
                $this->addBuyingGuide($item);
            }
        }
    }

    /**
     * @param BuyingGuideType|null $value
     * @return void
     */
    public function addBuyingGuide($value)
    {
        $this->BuyingGuide[] = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyingGuideHub()
    {
        return $this->_dc($this->BuyingGuideHub, 'BuyingGuideHub');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setBuyingGuideHub($value)
    {
        $this->BuyingGuideHub = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'BuyingGuide' => ['type' => 'BuyingGuideType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'BuyingGuideHub' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BuyingGuideDetailsType::_register();
