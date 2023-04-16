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
 * corresponding eBay Picture Services (EPS), that was generated when the picture was uploaded.
 **/
class PictureURLsType extends EbatNs_ComplexType
{
    const TAG = 'PictureURLsType';
    const NAME = 'PictureURLsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $eBayPictureURL = null;

    /**
     * @var string|null
     */
    protected $ExternalPictureURL = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEBayPictureURL()
    {
        return $this->_dc($this->eBayPictureURL, 'eBayPictureURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEBayPictureURL($value)
    {
        $this->eBayPictureURL = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExternalPictureURL()
    {
        return $this->_dc($this->ExternalPictureURL, 'ExternalPictureURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setExternalPictureURL($value)
    {
        $this->ExternalPictureURL = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'eBayPictureURL' => [],
            'ExternalPictureURL' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PictureURLsType::_register();
