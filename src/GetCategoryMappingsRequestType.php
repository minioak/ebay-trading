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
 * Retrieves a map of old category IDs and corresponding active
 * category IDs defined for the site to which the request is sent.
 **/
class GetCategoryMappingsRequestType extends AbstractRequestType
{
    const TAG = 'GetCategoryMappingsRequest';
    const NAME = 'GetCategoryMappingsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetCategoryMappings';

    /**
     * @var string|null
     */
    protected $CategoryVersion = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCategoryVersion()
    {
        return $this->_dc($this->CategoryVersion, 'CategoryVersion');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCategoryVersion($value)
    {
        $this->CategoryVersion = self::_string($value);
    }

    /**
     * @return GetCategoryMappingsResponseType|EbatNs_ResponseError
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
        self::assignElements(['CategoryVersion' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

GetCategoryMappingsRequestType::_register();
