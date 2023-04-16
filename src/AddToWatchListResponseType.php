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
 * This type defines the response of the
 * AddToWatchList
 * call. Along with data indicating the success or failure of adding one or more items to a user's Watch List, this
 * response also includes the number of items currently in the user's Watch List and the maximum number of items
 * allowed in the Watch List.
 **/
class AddToWatchListResponseType extends EbatNs_Response
{
    const TAG = 'AddToWatchListResponseType';
    const NAME = 'AddToWatchListResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $WatchListCount = null;

    /**
     * @var int|null
     */
    protected $WatchListMaximum = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWatchListCount()
    {
        return $this->_dc($this->WatchListCount, 'WatchListCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setWatchListCount($value)
    {
        $this->WatchListCount = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWatchListMaximum()
    {
        return $this->_dc($this->WatchListMaximum, 'WatchListMaximum');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setWatchListMaximum($value)
    {
        $this->WatchListMaximum = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'WatchListCount' => ['type' => 'int'],
            'WatchListMaximum' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

AddToWatchListResponseType::_register();
