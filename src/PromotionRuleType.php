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
class PromotionRuleType extends EbatNs_ComplexType
{
    const TAG = 'PromotionRuleType';
    const NAME = 'PromotionRuleType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $PromotedStoreCategoryID = null;

    /**
     * @var string|null
     */
    protected $PromotedeBayCategoryID = null;

    /**
     * @var string|null
     */
    protected $PromotedKeywords = null;

    /**
     * @var ItemIDType|null
     */
    protected $ReferringItemID = null;

    /**
     * @var int|null
     */
    protected $ReferringStoreCategoryID = null;

    /**
     * @var string|null
     */
    protected $ReferringeBayCategoryID = null;

    /**
     * @var string|null
     */
    protected $ReferringKeywords = null;

    /**
     * @var PromotionSchemeCodeType|null
     */
    protected $PromotionScheme = null;

    /**
     * @var PromotionMethodCodeType|null
     */
    protected $PromotionMethod = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotedStoreCategoryID()
    {
        return $this->_dc($this->PromotedStoreCategoryID, 'PromotedStoreCategoryID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPromotedStoreCategoryID($value)
    {
        $this->PromotedStoreCategoryID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotedeBayCategoryID()
    {
        return $this->_dc($this->PromotedeBayCategoryID, 'PromotedeBayCategoryID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPromotedeBayCategoryID($value)
    {
        $this->PromotedeBayCategoryID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotedKeywords()
    {
        return $this->_dc($this->PromotedKeywords, 'PromotedKeywords');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPromotedKeywords($value)
    {
        $this->PromotedKeywords = self::_string($value);
    }

    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReferringItemID()
    {
        return $this->_dc($this->ReferringItemID, 'ReferringItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setReferringItemID($value)
    {
        $this->ReferringItemID = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReferringStoreCategoryID()
    {
        return $this->_dc($this->ReferringStoreCategoryID, 'ReferringStoreCategoryID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setReferringStoreCategoryID($value)
    {
        $this->ReferringStoreCategoryID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReferringeBayCategoryID()
    {
        return $this->_dc($this->ReferringeBayCategoryID, 'ReferringeBayCategoryID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setReferringeBayCategoryID($value)
    {
        $this->ReferringeBayCategoryID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReferringKeywords()
    {
        return $this->_dc($this->ReferringKeywords, 'ReferringKeywords');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setReferringKeywords($value)
    {
        $this->ReferringKeywords = self::_string($value);
    }

    /**
     * @return PromotionSchemeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionScheme()
    {
        return $this->_dc($this->PromotionScheme);
    }

    /**
     * @param PromotionSchemeCodeType|null $value
     * @return void
     */
    public function setPromotionScheme($value)
    {
        $this->PromotionScheme = $this->_enum($value, PromotionSchemeCodeType::class);
    }

    /**
     * @return PromotionMethodCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPromotionMethod()
    {
        return $this->_dc($this->PromotionMethod);
    }

    /**
     * @param PromotionMethodCodeType|null $value
     * @return void
     */
    public function setPromotionMethod($value)
    {
        $this->PromotionMethod = $this->_enum($value, PromotionMethodCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PromotedStoreCategoryID' => ['type' => 'int'],
            'PromotedeBayCategoryID' => [],
            'PromotedKeywords' => [],
            'ReferringItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'ReferringStoreCategoryID' => ['type' => 'int'],
            'ReferringeBayCategoryID' => [],
            'ReferringKeywords' => [],
            'PromotionScheme' => ['type' => 'PromotionSchemeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'PromotionMethod' => ['type' => 'PromotionMethodCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PromotionRuleType::_register();
