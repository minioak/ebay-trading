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
 * This call is used to retrieve the status of an eBay Store Category hierarchy change that was made with a
 * SetStoreCategories
 * call.
 **/
class GetStoreCategoryUpdateStatusRequestType extends AbstractRequestType
{
    const TAG = 'GetStoreCategoryUpdateStatusRequest';
    const NAME = 'GetStoreCategoryUpdateStatusRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetStoreCategoryUpdateStatus';

    /**
     * @var int|null
     */
    protected $TaskID = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTaskID()
    {
        return $this->_dc($this->TaskID, 'TaskID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTaskID($value)
    {
        $this->TaskID = self::_int($value);
    }

    /**
     * @return GetStoreCategoryUpdateStatusResponseType|EbatNs_ResponseError
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
        self::assignElements(['TaskID' => ['type' => 'int']], parent::NAME);
        self::assignAttributes([]);
    }

}

GetStoreCategoryUpdateStatusRequestType::_register();
