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
 * The base response type for the
 * RemoveFromWatchList
 * call. The response includes the current count of items on the user's Watch List, as well as the maximum amount
 * of items that can be on the user's Watch List at one time.
 **/
class RemoveFromWatchListResponseType extends EbatNs_Response
{
    const TAG = 'RemoveFromWatchListResponseType';
    const NAME = 'RemoveFromWatchListResponseType';
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

RemoveFromWatchListResponseType::_register();
