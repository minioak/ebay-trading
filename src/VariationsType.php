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
 * Variations are multiple similar (but not identical) items in a
 * fixed-price listing.
 * For example, a single listing could contain multiple items of the
 * same brand and model that vary by color and size (like "Blue, Large" and "Black, Medium"). Each variation can
 * have its own quantity and
 * price. For example, a listing could include 10 "Blue, Large"
 * variations and 20 "Black, Medium" variations.
 **/
class VariationsType extends EbatNs_ComplexType
{
    const TAG = 'VariationsType';
    const NAME = 'VariationsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var VariationType[]|null
     */
    protected $Variation = [];

    /**
     * @var PicturesType[]|null
     */
    protected $Pictures = [];

    /**
     * @var NameValueListArrayType|null
     */
    protected $VariationSpecificsSet = null;

    /**
     * @var ModifyNameArrayType|null
     */
    protected $ModifyNameList = null;


    /**
     * @return VariationType[]|VariationType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getVariation($index = null)
    {
        return $this->_dc($index === null
            ? $this->Variation
            : (count($this->Variation) > $index
                ? $this->Variation[$index]
                : null), 'Variation');
    }

    /**
     * @param VariationType|null|VariationType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setVariation($value, $index = null)
    {
        if ($index === null) {
            $this->Variation = $value;
        } else {
            $this->Variation[$index] = [];
            
            foreach ($value as $item) {
                $this->addVariation($item);
            }
        }
    }

    /**
     * @param VariationType|null $value
     * @return void
     */
    public function addVariation($value)
    {
        $this->Variation[] = $value;
    }

    /**
     * @return PicturesType[]|PicturesType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPictures($index = null)
    {
        return $this->_dc($index === null
            ? $this->Pictures
            : (count($this->Pictures) > $index
                ? $this->Pictures[$index]
                : null), 'Pictures');
    }

    /**
     * @param PicturesType|null|PicturesType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPictures($value, $index = null)
    {
        if ($index === null) {
            $this->Pictures = $value;
        } else {
            $this->Pictures[$index] = [];
            
            foreach ($value as $item) {
                $this->addPictures($item);
            }
        }
    }

    /**
     * @param PicturesType|null $value
     * @return void
     */
    public function addPictures($value)
    {
        $this->Pictures[] = $value;
    }

    /**
     * @return NameValueListArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariationSpecificsSet()
    {
        return $this->_dc($this->VariationSpecificsSet, 'VariationSpecificsSet');
    }

    /**
     * @param NameValueListArrayType|null $value
     * @return void
     */
    public function setVariationSpecificsSet($value)
    {
        $this->VariationSpecificsSet = $value;
    }

    /**
     * @return ModifyNameArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getModifyNameList()
    {
        return $this->_dc($this->ModifyNameList, 'ModifyNameList');
    }

    /**
     * @param ModifyNameArrayType|null $value
     * @return void
     */
    public function setModifyNameList($value)
    {
        $this->ModifyNameList = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Variation' => ['type' => 'VariationType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'Pictures' => ['type' => 'PicturesType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'VariationSpecificsSet' => ['type' => 'NameValueListArrayType', 'xmlns' => self::XMLNS],
            'ModifyNameList' => ['type' => 'ModifyNameArrayType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

VariationsType::_register();
