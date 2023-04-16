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
 * Contains information about a picture upload (i.e., information about a picture
 * upload containing a binary attachment of an image).
 **/
class UploadSiteHostedPicturesResponseType extends EbatNs_Response
{
    const TAG = 'UploadSiteHostedPicturesResponseType';
    const NAME = 'UploadSiteHostedPicturesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $PictureSystemVersion = null;

    /**
     * @var SiteHostedPictureDetailsType|null
     */
    protected $SiteHostedPictureDetails = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPictureSystemVersion()
    {
        return $this->_dc($this->PictureSystemVersion, 'PictureSystemVersion');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPictureSystemVersion($value)
    {
        $this->PictureSystemVersion = self::_int($value);
    }

    /**
     * @return SiteHostedPictureDetailsType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSiteHostedPictureDetails()
    {
        return $this->_dc($this->SiteHostedPictureDetails, 'SiteHostedPictureDetails');
    }

    /**
     * @param SiteHostedPictureDetailsType|null $value
     * @return void
     */
    public function setSiteHostedPictureDetails($value)
    {
        $this->SiteHostedPictureDetails = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PictureSystemVersion' => ['type' => 'int'],
            'SiteHostedPictureDetails' => ['type' => 'SiteHostedPictureDetailsType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

UploadSiteHostedPicturesResponseType::_register();
