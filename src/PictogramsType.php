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
 * Pictogram
 * container used at the listing level to provide pictograms for the listing.
 **/
class PictogramsType extends EbatNs_ComplexType
{
    const TAG = 'PictogramsType';
    const NAME = 'PictogramsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $Pictogram = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPictogram()
    {
        return $this->_dc($this->Pictogram, 'Pictogram');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPictogram($value)
    {
        $this->Pictogram = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Pictogram' => ['cardinality' => '0..4']], parent::NAME);
        self::assignAttributes([]);
    }

}

PictogramsType::_register();
