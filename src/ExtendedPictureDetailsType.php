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
 * This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the
 * corresponding eBay
 * Picture Services (EPS), that was generated when the self-hosted picture was uploaded.
 **/
class ExtendedPictureDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ExtendedPictureDetailsType';
    const NAME = 'ExtendedPictureDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PictureURLsType[]|null
     */
    protected $PictureURLs = [];


    /**
     * @return PictureURLsType[]|PictureURLsType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPictureURLs($index = null)
    {
        return $this->_dc($index === null
            ? $this->PictureURLs
            : (count($this->PictureURLs) > $index
                ? $this->PictureURLs[$index]
                : null), 'PictureURLs');
    }

    /**
     * @param PictureURLsType|null|PictureURLsType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPictureURLs($value, $index = null)
    {
        if ($index === null) {
            $this->PictureURLs = $value;
        } else {
            $this->PictureURLs[$index] = [];
            
            foreach ($value as $item) {
                $this->addPictureURLs($item);
            }
        }
    }

    /**
     * @param PictureURLsType|null $value
     * @return void
     */
    public function addPictureURLs($value)
    {
        $this->PictureURLs[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['PictureURLs' => ['type' => 'PictureURLsType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

ExtendedPictureDetailsType::_register();
