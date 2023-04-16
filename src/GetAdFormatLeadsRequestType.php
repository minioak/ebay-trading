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
 * Retrieves sales lead information for a lead generation listing.
 **/
class GetAdFormatLeadsRequestType extends AbstractRequestType
{
    const TAG = 'GetAdFormatLeadsRequest';
    const NAME = 'GetAdFormatLeadsRequestType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';
    const REQUEST = 'GetAdFormatLeads';

    /**
     * @var ItemIDType|null
     */
    protected $ItemID = null;

    /**
     * @var MessageStatusTypeCodeType|null
     */
    protected $Status = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $IncludeMemberMessages = null;

    /**
     * @var string|null
     */
    protected $StartCreationTime = null;

    /**
     * @var string|null
     */
    protected $EndCreationTime = null;


    /**
     * @return ItemIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemID()
    {
        return $this->_dc($this->ItemID, 'ItemID');
    }

    /**
     * @param ItemIDType|null $value
     * @return void
     */
    public function setItemID($value)
    {
        $this->ItemID = $value;
    }

    /**
     * @return MessageStatusTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param MessageStatusTypeCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, MessageStatusTypeCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getIncludeMemberMessages()
    {
        return $this->_dc($this->IncludeMemberMessages === 'true', 'IncludeMemberMessages');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setIncludeMemberMessages($value)
    {
        $this->IncludeMemberMessages = self::_bool($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStartCreationTime()
    {
        return $this->_dc($this->StartCreationTime, 'StartCreationTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setStartCreationTime($value)
    {
        $this->StartCreationTime = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEndCreationTime()
    {
        return $this->_dc($this->EndCreationTime, 'EndCreationTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEndCreationTime($value)
    {
        $this->EndCreationTime = self::_string($value);
    }

    /**
     * @return GetAdFormatLeadsResponseType|EbatNs_ResponseError
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
            'ItemID' => ['type' => 'ItemIDType', 'xmlns' => self::XMLNS],
            'Status' => ['type' => 'MessageStatusTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'IncludeMemberMessages' => ['type' => 'bool'],
            'StartCreationTime' => [],
            'EndCreationTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetAdFormatLeadsRequestType::_register();
