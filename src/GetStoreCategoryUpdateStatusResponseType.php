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
 * The base response of a
 * GetStoreCategoryUpdateStatus
 * call. The response includes the status of an eBay Store Category hierarchy change that was made with a
 * SetStoreCategories
 * call.
 **/
class GetStoreCategoryUpdateStatusResponseType extends EbatNs_Response
{
    const TAG = 'GetStoreCategoryUpdateStatusResponseType';
    const NAME = 'GetStoreCategoryUpdateStatusResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var TaskStatusCodeType|null
     */
    protected $Status = null;


    /**
     * @return TaskStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param TaskStatusCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, TaskStatusCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Status' => ['type' => 'TaskStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS]], parent::NAME);
        self::assignAttributes([]);
    }

}

GetStoreCategoryUpdateStatusResponseType::_register();
