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
 * Type defining the
 * ContextSearchAsset
 * container that is returned in the
 * GetContextualKeywords
 * response for each keyword that is found.
 **/
class ContextSearchAssetType extends EbatNs_ComplexType
{
    const TAG = 'ContextSearchAssetType';
    const NAME = 'ContextSearchAssetType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Keyword = null;

    /**
     * @var CategoryType|null
     */
    protected $Category = null;

    /**
     * @var int|null
     */
    protected $Ranking = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getKeyword()
    {
        return $this->_dc($this->Keyword, 'Keyword');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setKeyword($value)
    {
        $this->Keyword = self::_string($value);
    }

    /**
     * @return CategoryType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategory()
    {
        return $this->_dc($this->Category, 'Category');
    }

    /**
     * @param CategoryType|null $value
     * @return void
     */
    public function setCategory($value)
    {
        $this->Category = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRanking()
    {
        return $this->_dc($this->Ranking, 'Ranking');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setRanking($value)
    {
        $this->Ranking = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Keyword' => [],
            'Category' => ['type' => 'CategoryType', 'xmlns' => self::XMLNS],
            'Ranking' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ContextSearchAssetType::_register();
