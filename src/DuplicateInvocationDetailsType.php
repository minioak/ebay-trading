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
 * This type is used by the
 * DuplicateInvocationDetails
 * container that is returned in some calls if a duplicate
 * InvocationID
 * or
 * InvocationTrackingID
 * is used in the call request.
 **/
class DuplicateInvocationDetailsType extends EbatNs_ComplexType
{
    const TAG = 'DuplicateInvocationDetailsType';
    const NAME = 'DuplicateInvocationDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var UUIDType|null
     */
    protected $DuplicateInvocationID = null;

    /**
     * @var InvocationStatusType|null
     */
    protected $Status = null;

    /**
     * @var string|null
     */
    protected $InvocationTrackingID = null;


    /**
     * @return UUIDType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDuplicateInvocationID()
    {
        return $this->_dc($this->DuplicateInvocationID, 'DuplicateInvocationID');
    }

    /**
     * @param UUIDType|null $value
     * @return void
     */
    public function setDuplicateInvocationID($value)
    {
        $this->DuplicateInvocationID = $value;
    }

    /**
     * @return InvocationStatusType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param InvocationStatusType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, InvocationStatusType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInvocationTrackingID()
    {
        return $this->_dc($this->InvocationTrackingID, 'InvocationTrackingID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInvocationTrackingID($value)
    {
        $this->InvocationTrackingID = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DuplicateInvocationID' => ['type' => 'UUIDType', 'xmlns' => self::XMLNS],
            'Status' => ['type' => 'InvocationStatusType', 'enum' => true, 'xmlns' => self::XMLNS],
            'InvocationTrackingID' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DuplicateInvocationDetailsType::_register();
