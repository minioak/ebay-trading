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
 * This is the base request type of the
 * GetItemsAwaitingFeedback
 * call. This call retrieves all completed order line items for which the user (buyer or seller) still needs to
 * leave Feedback for their order partner.
 **/
class GetItemsAwaitingFeedbackRequestType extends AbstractRequestType
{
    const TAG = 'GetItemsAwaitingFeedbackRequest';
    const NAME = 'GetItemsAwaitingFeedbackRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetItemsAwaitingFeedback';

    /**
     * @var ItemSortTypeCodeType|null
     */
    protected $Sort = null;

    /**
     * @var PaginationType|null
     */
    protected $Pagination = null;


    /**
     * @return ItemSortTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSort()
    {
        return $this->_dc($this->Sort);
    }

    /**
     * @param ItemSortTypeCodeType|null $value
     * @return void
     */
    public function setSort($value)
    {
        $this->Sort = $this->_enum($value, ItemSortTypeCodeType::class);
    }

    /**
     * @return PaginationType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPagination()
    {
        return $this->_dc($this->Pagination, 'Pagination');
    }

    /**
     * @param PaginationType|null $value
     * @return void
     */
    public function setPagination($value)
    {
        $this->Pagination = $value;
    }

    /**
     * @return GetItemsAwaitingFeedbackResponseType|EbatNs_ResponseError
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
            'Sort' => ['type' => 'ItemSortTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Pagination' => ['type' => 'PaginationType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetItemsAwaitingFeedbackRequestType::_register();
