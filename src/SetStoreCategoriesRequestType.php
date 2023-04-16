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
 * This call allows you to set or modify the category structure of an eBay Store. Sellers must have an eBay Store
 * subscription in order to use this call.
 **/
class SetStoreCategoriesRequestType extends AbstractRequestType
{
    const TAG = 'SetStoreCategoriesRequest';
    const NAME = 'SetStoreCategoriesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'SetStoreCategories';

    /**
     * @var StoreCategoryUpdateActionCodeType|null
     */
    protected $Action = null;

    /**
     * @var int|null
     */
    protected $ItemDestinationCategoryID = null;

    /**
     * @var int|null
     */
    protected $DestinationParentCategoryID = null;

    /**
     * @var StoreCustomCategoryArrayType|null
     */
    protected $StoreCategories = null;


    /**
     * @return StoreCategoryUpdateActionCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAction()
    {
        return $this->_dc($this->Action);
    }

    /**
     * @param StoreCategoryUpdateActionCodeType|null $value
     * @return void
     */
    public function setAction($value)
    {
        $this->Action = $this->_enum($value, StoreCategoryUpdateActionCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemDestinationCategoryID()
    {
        return $this->_dc($this->ItemDestinationCategoryID, 'ItemDestinationCategoryID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setItemDestinationCategoryID($value)
    {
        $this->ItemDestinationCategoryID = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDestinationParentCategoryID()
    {
        return $this->_dc($this->DestinationParentCategoryID, 'DestinationParentCategoryID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setDestinationParentCategoryID($value)
    {
        $this->DestinationParentCategoryID = self::_int($value);
    }

    /**
     * @return StoreCustomCategoryArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStoreCategories()
    {
        return $this->_dc($this->StoreCategories, 'StoreCategories');
    }

    /**
     * @param StoreCustomCategoryArrayType|null $value
     * @return void
     */
    public function setStoreCategories($value)
    {
        $this->StoreCategories = $value;
    }

    /**
     * @return SetStoreCategoriesResponseType|EbatNs_ResponseError
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
            'Action' => ['type' => 'StoreCategoryUpdateActionCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ItemDestinationCategoryID' => ['type' => 'int'],
            'DestinationParentCategoryID' => ['type' => 'int'],
            'StoreCategories' => ['type' => 'StoreCustomCategoryArrayType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SetStoreCategoriesRequestType::_register();
