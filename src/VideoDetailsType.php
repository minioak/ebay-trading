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
 * This type is used by the Add/Revise/Relist calls to add a video to a listing. Videos can be added to listings
 * using the <a href="/api-docs/commerce/media/overview.html" target="_blank">Media API</a>. See the <a
 * href="/api-docs/commerce/media/overview.html" target="_blank">Media API</a> reference documentation for all of
 * the necessary details to upload videos to eBay.
 * 
 * The
 * GetItem
 * call will return the
 * VideoDetails
 * container if the listing contains a video, and the seller of the item is the one making the
 * GetItem
 * call.
 **/
class VideoDetailsType extends EbatNs_ComplexType
{
    const TAG = 'VideoDetailsType';
    const NAME = 'VideoDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string[]|null
     */
    protected $VideoID = [];


    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getVideoID($index = null)
    {
        return $this->_dc($index === null
            ? $this->VideoID
            : (count($this->VideoID) > $index
                ? $this->VideoID[$index]
                : null), 'VideoID');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setVideoID($value, $index = null)
    {
        if ($index === null) {
            $this->VideoID = $value;
        } else {
            $this->VideoID[$index] = [];
            
            foreach ($value as $item) {
                $this->addVideoID($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addVideoID($value)
    {
        $this->VideoID[] = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['VideoID' => ['cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

VideoDetailsType::_register();
