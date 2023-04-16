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
 * This call returns a list of up to 10 eBay categories that have the highest percentage of listings whose listing
 * titles or descriptions contain the keywords you specify.
 **/
class GetSuggestedCategoriesRequestType extends AbstractRequestType
{
    const TAG = 'GetSuggestedCategoriesRequest';
    const NAME = 'GetSuggestedCategoriesRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetSuggestedCategories';

    /**
     * @var string|null
     */
    protected $Query = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getQuery()
    {
        return $this->_dc($this->Query, 'Query');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setQuery($value)
    {
        $this->Query = self::_string($value);
    }

    /**
     * @return GetSuggestedCategoriesResponseType|EbatNs_ResponseError
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
        self::assignElements(['Query' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

GetSuggestedCategoriesRequestType::_register();
