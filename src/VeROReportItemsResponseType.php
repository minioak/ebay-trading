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
 * Contains a packet ID and status for the items reported by the VeRO Program member.
 **/
class VeROReportItemsResponseType extends EbatNs_Response
{
    const TAG = 'VeROReportItemsResponseType';
    const NAME = 'VeROReportItemsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $VeROReportPacketID = null;

    /**
     * @var VeROReportPacketStatusCodeType|null
     */
    protected $VeROReportPacketStatus = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVeROReportPacketID()
    {
        return $this->_dc($this->VeROReportPacketID, 'VeROReportPacketID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setVeROReportPacketID($value)
    {
        $this->VeROReportPacketID = self::_int($value);
    }

    /**
     * @return VeROReportPacketStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVeROReportPacketStatus()
    {
        return $this->_dc($this->VeROReportPacketStatus);
    }

    /**
     * @param VeROReportPacketStatusCodeType|null $value
     * @return void
     */
    public function setVeROReportPacketStatus($value)
    {
        $this->VeROReportPacketStatus = $this->_enum($value, VeROReportPacketStatusCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'VeROReportPacketID' => ['type' => 'int'],
            'VeROReportPacketStatus' => ['type' => 'VeROReportPacketStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

VeROReportItemsResponseType::_register();
