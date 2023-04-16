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
 * Identifies an individual product suggestion. The product details include the EPID, Title, Stock photo url and if
 * it is
 * an exact match.
 **/
class ProductSuggestionType extends EbatNs_ComplexType
{
    const TAG = 'ProductSuggestionType';
    const NAME = 'ProductSuggestionType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Title = null;

    /**
     * @var string|null
     */
    protected $EPID = null;

    /**
     * @var string|null
     */
    protected $StockPhoto = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $Recommended = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTitle()
    {
        return $this->_dc($this->Title, 'Title');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTitle($value)
    {
        $this->Title = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEPID()
    {
        return $this->_dc($this->EPID, 'EPID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEPID($value)
    {
        $this->EPID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStockPhoto()
    {
        return $this->_dc($this->StockPhoto, 'StockPhoto');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStockPhoto($value)
    {
        $this->StockPhoto = self::_string($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRecommended()
    {
        return $this->_dc($this->Recommended === 'true', 'Recommended');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setRecommended($value)
    {
        $this->Recommended = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Title' => [],
            'EPID' => [],
            'StockPhoto' => [],
            'Recommended' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ProductSuggestionType::_register();
