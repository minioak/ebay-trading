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
 * By default, unpublished pictures uploaded to eBay Picture Services (EPS) via the
 * UploadSiteHostedPictures
 * call will be kept on the server for five days before being purged. The
 * ExtendSiteHostedPictures
 * call is used to extend this expiration date by the number of days specified in the call. This restricted call
 * gives approved sellers the ability to extend the default expiration date of pictures uploaded to EPS but not
 * immediately published in an eBay listing.
 **/
class ExtendSiteHostedPicturesRequestType extends AbstractRequestType
{
    const TAG = 'ExtendSiteHostedPicturesRequest';
    const NAME = 'ExtendSiteHostedPicturesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'ExtendSiteHostedPictures';

    /**
     * @var string[]|null
     */
    protected $PictureURL = [];

    /**
     * @var int|null
     */
    protected $ExtensionInDays = null;


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
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getExtensionInDays()
    {
        return $this->_dc($this->ExtensionInDays, 'ExtensionInDays');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setExtensionInDays($value)
    {
        $this->ExtensionInDays = self::_int($value);
    }

    /**
     * @return ExtendSiteHostedPicturesResponseType|EbatNs_ResponseError
     * @param EbatNs_Client
     **/
    function call($client)
    {
        return $client->call(self::REQUEST, $this);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PictureURL' => ['cardinality' => '0..*'],
            'ExtensionInDays' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ExtendSiteHostedPicturesRequestType::_register();
