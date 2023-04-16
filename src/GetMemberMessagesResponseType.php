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
 * Retrieves a list of the messages buyers have posted about your active item listings.
 **/
class GetMemberMessagesResponseType extends EbatNs_Response
{
    const TAG = 'GetMemberMessagesResponseType';
    const NAME = 'GetMemberMessagesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var MemberMessageExchangeArrayType|null
     */
    protected $MemberMessage = null;

    /**
     * @var PaginationResultType|null
     */
    protected $PaginationResult = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $HasMoreItems = null;


    /**
     * @return MemberMessageExchangeArrayType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMemberMessage()
    {
        return $this->_dc($this->MemberMessage, 'MemberMessage');
    }

    /**
     * @param MemberMessageExchangeArrayType|null $value
     * @return void
     */
    public function setMemberMessage($value)
    {
        $this->MemberMessage = $value;
    }

    /**
     * @return PaginationResultType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPaginationResult()
    {
        return $this->_dc($this->PaginationResult, 'PaginationResult');
    }

    /**
     * @param PaginationResultType|null $value
     * @return void
     */
    public function setPaginationResult($value)
    {
        $this->PaginationResult = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHasMoreItems()
    {
        return $this->_dc($this->HasMoreItems === 'true', 'HasMoreItems');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setHasMoreItems($value)
    {
        $this->HasMoreItems = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'MemberMessage' => ['type' => 'MemberMessageExchangeArrayType', 'xmlns' => self::XMLNS],
            'PaginationResult' => ['type' => 'PaginationResultType', 'xmlns' => self::XMLNS],
            'HasMoreItems' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetMemberMessagesResponseType::_register();
