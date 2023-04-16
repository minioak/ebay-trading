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
class ProductSearchResultType extends EbatNs_ComplexType
{
    const TAG = 'ProductSearchResultType';
    const NAME = 'ProductSearchResultType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ID = null;

    /**
     * @var string|null
     */
    protected $NumProducts = null;

    /**
     * @var ResponseAttributeSetType[]|null
     */
    protected $AttributeSet = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $DisplayStockPhotos = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getID()
    {
        return $this->_dc($this->ID, 'ID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setID($value)
    {
        $this->ID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getNumProducts()
    {
        return $this->_dc($this->NumProducts, 'NumProducts');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setNumProducts($value)
    {
        $this->NumProducts = self::_string($value);
    }

    /**
     * @return ResponseAttributeSetType[]|ResponseAttributeSetType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAttributeSet($index = null)
    {
        return $this->_dc($index === null
            ? $this->AttributeSet
            : (count($this->AttributeSet) > $index
                ? $this->AttributeSet[$index]
                : null), 'AttributeSet');
    }

    /**
     * @param ResponseAttributeSetType|null|ResponseAttributeSetType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAttributeSet($value, $index = null)
    {
        if ($index === null) {
            $this->AttributeSet = $value;
        } else {
            $this->AttributeSet[$index] = [];
            
            foreach ($value as $item) {
                $this->addAttributeSet($item);
            }
        }
    }

    /**
     * @param ResponseAttributeSetType|null $value
     * @return void
     */
    public function addAttributeSet($value)
    {
        $this->AttributeSet[] = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDisplayStockPhotos()
    {
        return $this->_dc($this->DisplayStockPhotos === 'true', 'DisplayStockPhotos');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDisplayStockPhotos($value)
    {
        $this->DisplayStockPhotos = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ID' => [],
            'NumProducts' => [],
            'AttributeSet' => ['type' => 'ResponseAttributeSetType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'DisplayStockPhotos' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ProductSearchResultType::_register();
