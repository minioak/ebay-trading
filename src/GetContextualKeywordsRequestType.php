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
 * Retrieves top-ranked contextual eBay keywords and categories
 * for a specified web page.
 **/
class GetContextualKeywordsRequestType extends AbstractRequestType
{
    const TAG = 'GetContextualKeywordsRequest';
    const NAME = 'GetContextualKeywordsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetContextualKeywords';

    /**
     * @var string|null
     */
    protected $URL = null;

    /**
     * @var string|null
     */
    protected $Encoding = null;

    /**
     * @var string[]|null
     */
    protected $CategoryID = [];


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getURL()
    {
        return $this->_dc($this->URL, 'URL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setURL($value)
    {
        $this->URL = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEncoding()
    {
        return $this->_dc($this->Encoding, 'Encoding');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEncoding($value)
    {
        $this->Encoding = self::_string($value);
    }

    /**
     * @return string[]|string|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCategoryID($index = null)
    {
        return $this->_dc($index === null
            ? $this->CategoryID
            : (count($this->CategoryID) > $index
                ? $this->CategoryID[$index]
                : null), 'CategoryID');
    }

    /**
     * @param string|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCategoryID($value, $index = null)
    {
        if ($index === null) {
            $this->CategoryID = $value;
        } else {
            $this->CategoryID[$index] = [];
            
            foreach ($value as $item) {
                $this->addCategoryID($item);
            }
        }
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function addCategoryID($value)
    {
        $this->CategoryID[] = self::_string($value);
    }

    /**
     * @return GetContextualKeywordsResponseType|EbatNs_ResponseError
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
            'URL' => [],
            'Encoding' => [],
            'CategoryID' => ['cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetContextualKeywordsRequestType::_register();
