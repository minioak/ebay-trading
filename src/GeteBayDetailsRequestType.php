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
 * This is the base request type for the
 * GeteBayDetails
 * call. This call retrieves the latest eBay feature-related metadata values that are supported when listing items.
 * This metadata includes country codes, currency codes, Item Specifics thresholds, supported Return Policy values,
 * available shipping carriers and shipping service options, and more. This call may be used to keep metadata
 * up-to-date in your applications.
 * 
 * In some cases, the data returned in the response will vary according to the eBay site that you use for the
 * request.
 **/
class GeteBayDetailsRequestType extends AbstractRequestType
{
    const TAG = 'GeteBayDetailsRequest';
    const NAME = 'GeteBayDetailsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GeteBayDetails';

    /**
     * @var DetailNameCodeType[]|null
     */
    protected $DetailName = [];


    /**
     * @return string[]|DetailNameCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDetailName($index = null)
    {
        return $this->_dc($index === null
            ? $this->DetailName
            : (count($this->DetailName) > $index
                ? $this->DetailName[$index]
                : null));
    }

    /**
     * @param DetailNameCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDetailName($value, $index = null)
    {
        if ($index === null) {
            $this->DetailName = $value;
        } else {
            $this->DetailName[$index] = [];
            
            foreach ($value as $item) {
                $this->addDetailName($item);
            }
        }
    }

    /**
     * @param DetailNameCodeType|null $value
     * @return void
     */
    public function addDetailName($value)
    {
        $this->DetailName[] = $this->_enum($value, DetailNameCodeType::class);
    }

    /**
     * @return GeteBayDetailsResponseType|EbatNs_ResponseError
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
        self::assignElements(['DetailName' => ['type' => 'DetailNameCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

GeteBayDetailsRequestType::_register();
