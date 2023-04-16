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
 * This type defines the
 * Storefront
 * container, which can be used by eBay Stores sellers to list an item under two primary custom categories either
 * by category ID or category name. A custom category is a category that was created by a seller in their eBay
 * store. This container is used by Add/Revise/Relist calls.
 * 
 * The
 * Storefront
 * container is also returned in
 * GetItem
 * and other Trading calls that retrieve Item data.
 * 
 * <span class="tablenote">
 * Note:
 * This type is applicable only for eBay Store sellers.
 * </span>
 **/
class StorefrontType extends EbatNs_ComplexType
{
    const TAG = 'StorefrontType';
    const NAME = 'StorefrontType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $StoreCategoryID = null;

    /**
     * @var int|null
     */
    protected $StoreCategory2ID = null;

    /**
     * @var string|null
     */
    protected $StoreCategoryName = null;

    /**
     * @var string|null
     */
    protected $StoreCategory2Name = null;

    /**
     * @var string|null
     */
    protected $StoreURL = null;

    /**
     * @var string|null
     */
    protected $StoreName = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreCategoryID()
    {
        return $this->_dc($this->StoreCategoryID, 'StoreCategoryID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setStoreCategoryID($value)
    {
        $this->StoreCategoryID = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreCategory2ID()
    {
        return $this->_dc($this->StoreCategory2ID, 'StoreCategory2ID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setStoreCategory2ID($value)
    {
        $this->StoreCategory2ID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreCategoryName()
    {
        return $this->_dc($this->StoreCategoryName, 'StoreCategoryName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStoreCategoryName($value)
    {
        $this->StoreCategoryName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreCategory2Name()
    {
        return $this->_dc($this->StoreCategory2Name, 'StoreCategory2Name');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStoreCategory2Name($value)
    {
        $this->StoreCategory2Name = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreURL()
    {
        return $this->_dc($this->StoreURL, 'StoreURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStoreURL($value)
    {
        $this->StoreURL = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreName()
    {
        return $this->_dc($this->StoreName, 'StoreName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStoreName($value)
    {
        $this->StoreName = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'StoreCategoryID' => ['type' => 'int'],
            'StoreCategory2ID' => ['type' => 'int'],
            'StoreCategoryName' => [],
            'StoreCategory2Name' => [],
            'StoreURL' => [],
            'StoreName' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

StorefrontType::_register();
