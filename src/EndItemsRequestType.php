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
 * The
 * EndItems
 * call is used to end up to 10 specified eBay listings before the date and time at which those listings would
 * normally end per the listing duration.
 **/
class EndItemsRequestType extends AbstractRequestType
{
    const TAG = 'EndItemsRequest';
    const NAME = 'EndItemsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'EndItems';

    /**
     * @var EndItemRequestContainerType[]|null
     */
    protected $EndItemRequestContainer = [];


    /**
     * @return EndItemRequestContainerType[]|EndItemRequestContainerType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getEndItemRequestContainer($index = null)
    {
        return $this->_dc($index === null
            ? $this->EndItemRequestContainer
            : (count($this->EndItemRequestContainer) > $index
                ? $this->EndItemRequestContainer[$index]
                : null), 'EndItemRequestContainer');
    }

    /**
     * @param EndItemRequestContainerType|null|EndItemRequestContainerType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setEndItemRequestContainer($value, $index = null)
    {
        if ($index === null) {
            $this->EndItemRequestContainer = $value;
        } else {
            $this->EndItemRequestContainer[$index] = [];
            
            foreach ($value as $item) {
                $this->addEndItemRequestContainer($item);
            }
        }
    }

    /**
     * @param EndItemRequestContainerType|null $value
     * @return void
     */
    public function addEndItemRequestContainer($value)
    {
        $this->EndItemRequestContainer[] = $value;
    }

    /**
     * @return EndItemsResponseType|EbatNs_ResponseError
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
        self::assignElements(['EndItemRequestContainer' => ['type' => 'EndItemRequestContainerType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

EndItemsRequestType::_register();
