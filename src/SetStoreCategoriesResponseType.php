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
 * Base response of the
 * SetStoreCategories
 * call. Returns the status of the eBay Store category changes.
 **/
class SetStoreCategoriesResponseType extends EbatNs_Response
{
    const TAG = 'SetStoreCategoriesResponseType';
    const NAME = 'SetStoreCategoriesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $TaskID = null;

    /**
     * @var TaskStatusCodeType|null
     */
    protected $Status = null;

    /**
     * @var StoreCustomCategoryArrayType|null
     */
    protected $CustomCategory = null;


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
     * @return StoreCustomCategoryArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCustomCategory()
    {
        return $this->_dc($this->CustomCategory, 'CustomCategory');
    }

    /**
     * @param StoreCustomCategoryArrayType|null $value
     * @return void
     */
    public function setCustomCategory($value)
    {
        $this->CustomCategory = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'TaskID' => ['type' => 'int'],
            'Status' => ['type' => 'TaskStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CustomCategory' => ['type' => 'StoreCustomCategoryArrayType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SetStoreCategoriesResponseType::_register();
