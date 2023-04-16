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
 * This type is deprecated.
 **/
class ListingTipType extends EbatNs_ComplexType
{
    const TAG = 'ListingTipType';
    const NAME = 'ListingTipType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ListingTipID = null;

    /**
     * @var int|null
     */
    protected $Priority = null;

    /**
     * @var ListingTipMessageType|null
     */
    protected $Message = null;

    /**
     * @var ListingTipFieldType|null
     */
    protected $Field = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingTipID()
    {
        return $this->_dc($this->ListingTipID, 'ListingTipID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setListingTipID($value)
    {
        $this->ListingTipID = self::_string($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPriority()
    {
        return $this->_dc($this->Priority, 'Priority');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setPriority($value)
    {
        $this->Priority = self::_int($value);
    }

    /**
     * @return ListingTipMessageType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMessage()
    {
        return $this->_dc($this->Message, 'Message');
    }

    /**
     * @param ListingTipMessageType|null $value
     * @return void
     */
    public function setMessage($value)
    {
        $this->Message = $value;
    }

    /**
     * @return ListingTipFieldType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getField()
    {
        return $this->_dc($this->Field, 'Field');
    }

    /**
     * @param ListingTipFieldType|null $value
     * @return void
     */
    public function setField($value)
    {
        $this->Field = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ListingTipID' => [],
            'Priority' => ['type' => 'int'],
            'Message' => ['type' => 'ListingTipMessageType', 'xmlns' => self::XMLNS],
            'Field' => ['type' => 'ListingTipFieldType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ListingTipType::_register();
