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
class RefundFundingSourceArrayType extends EbatNs_ComplexType
{
    const TAG = 'RefundFundingSourceArrayType';
    const NAME = 'RefundFundingSourceArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var RefundFundingSourceType[]|null
     */
    protected $RefundFundingSource = [];


    /**
     * @return RefundFundingSourceType[]|RefundFundingSourceType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getRefundFundingSource($index = null)
    {
        return $this->_dc($index === null
            ? $this->RefundFundingSource
            : (count($this->RefundFundingSource) > $index
                ? $this->RefundFundingSource[$index]
                : null), 'RefundFundingSource');
    }

    /**
     * @param RefundFundingSourceType|null|RefundFundingSourceType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setRefundFundingSource($value, $index = null)
    {
        if ($index === null) {
            $this->RefundFundingSource = $value;
        } else {
            $this->RefundFundingSource[$index] = [];
            
            foreach ($value as $item) {
                $this->addRefundFundingSource($item);
            }
        }
    }

    /**
     * @param RefundFundingSourceType|null $value
     * @return void
     */
    public function addRefundFundingSource($value)
    {
        $this->RefundFundingSource[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['RefundFundingSource' => ['type' => 'RefundFundingSourceType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

RefundFundingSourceArrayType::_register();
