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
 * Returns the URL of an eBay Picture Services image whose expiration date was
 * extended.
 **/
class ExtendSiteHostedPicturesResponseType extends EbatNs_Response
{
    const TAG = 'ExtendSiteHostedPicturesResponseType';
    const NAME = 'ExtendSiteHostedPicturesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string[]|null
     */
    protected $PictureURL = [];


    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPictureURL($index = null)
    {
        return $this->_dc($index === null
            ? $this->PictureURL
            : (count($this->PictureURL) > $index
                ? $this->PictureURL[$index]
                : null), 'PictureURL');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPictureURL($value, $index = null)
    {
        if ($index === null) {
            $this->PictureURL = $value;
        } else {
            $this->PictureURL[$index] = [];
            
            foreach ($value as $item) {
                $this->addPictureURL($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addPictureURL($value)
    {
        $this->PictureURL[] = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['PictureURL' => ['cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

ExtendSiteHostedPicturesResponseType::_register();
