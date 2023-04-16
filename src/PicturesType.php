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
 * Defines variation-specific pictures associated with one
 * 
 * VariationSpecificName
 * (e.g., Color) whose values differ across variations.
 **/
class PicturesType extends EbatNs_ComplexType
{
    const TAG = 'PicturesType';
    const NAME = 'PicturesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $VariationSpecificName = null;

    /**
     * @var VariationSpecificPictureSetType[]|null
     */
    protected $VariationSpecificPictureSet = [];


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVariationSpecificName()
    {
        return $this->_dc($this->VariationSpecificName, 'VariationSpecificName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setVariationSpecificName($value)
    {
        $this->VariationSpecificName = self::_string($value);
    }

    /**
     * @return VariationSpecificPictureSetType[]|VariationSpecificPictureSetType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getVariationSpecificPictureSet($index = null)
    {
        return $this->_dc($index === null
            ? $this->VariationSpecificPictureSet
            : (count($this->VariationSpecificPictureSet) > $index
                ? $this->VariationSpecificPictureSet[$index]
                : null), 'VariationSpecificPictureSet');
    }

    /**
     * @param VariationSpecificPictureSetType|null|VariationSpecificPictureSetType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setVariationSpecificPictureSet($value, $index = null)
    {
        if ($index === null) {
            $this->VariationSpecificPictureSet = $value;
        } else {
            $this->VariationSpecificPictureSet[$index] = [];
            
            foreach ($value as $item) {
                $this->addVariationSpecificPictureSet($item);
            }
        }
    }

    /**
     * @param VariationSpecificPictureSetType|null $value
     * @return void
     */
    public function addVariationSpecificPictureSet($value)
    {
        $this->VariationSpecificPictureSet[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'VariationSpecificName' => [],
            'VariationSpecificPictureSet' => ['type' => 'VariationSpecificPictureSetType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PicturesType::_register();
