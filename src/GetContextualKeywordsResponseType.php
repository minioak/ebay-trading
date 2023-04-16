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
 * Response to a
 * GetContextualKeywords
 * request.
 **/
class GetContextualKeywordsResponseType extends EbatNs_Response
{
    const TAG = 'GetContextualKeywordsResponseType';
    const NAME = 'GetContextualKeywordsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ContextSearchAssetType[]|null
     */
    protected $ContextSearchAsset = [];


    /**
     * @return ContextSearchAssetType[]|ContextSearchAssetType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getContextSearchAsset($index = null)
    {
        return $this->_dc($index === null
            ? $this->ContextSearchAsset
            : (count($this->ContextSearchAsset) > $index
                ? $this->ContextSearchAsset[$index]
                : null), 'ContextSearchAsset');
    }

    /**
     * @param ContextSearchAssetType|null|ContextSearchAssetType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setContextSearchAsset($value, $index = null)
    {
        if ($index === null) {
            $this->ContextSearchAsset = $value;
        } else {
            $this->ContextSearchAsset[$index] = [];
            
            foreach ($value as $item) {
                $this->addContextSearchAsset($item);
            }
        }
    }

    /**
     * @param ContextSearchAssetType|null $value
     * @return void
     */
    public function addContextSearchAsset($value)
    {
        $this->ContextSearchAsset[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ContextSearchAsset' => ['type' => 'ContextSearchAssetType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

GetContextualKeywordsResponseType::_register();
