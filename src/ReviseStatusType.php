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
 * Contains data indicating whether an item has been revised since the
 * listing became active and, if so, which among a subset of properties
 * have been changed by the revision.
 **/
class ReviseStatusType extends EbatNs_ComplexType
{
    const TAG = 'ReviseStatusType';
    const NAME = 'ReviseStatusType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $ItemRevised = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BuyItNowAdded = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $BuyItNowLowered = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ReserveLowered = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $ReserveRemoved = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getItemRevised()
    {
        return $this->_dc($this->ItemRevised === 'true', 'ItemRevised');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setItemRevised($value)
    {
        $this->ItemRevised = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyItNowAdded()
    {
        return $this->_dc($this->BuyItNowAdded === 'true', 'BuyItNowAdded');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBuyItNowAdded($value)
    {
        $this->BuyItNowAdded = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getBuyItNowLowered()
    {
        return $this->_dc($this->BuyItNowLowered === 'true', 'BuyItNowLowered');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setBuyItNowLowered($value)
    {
        $this->BuyItNowLowered = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReserveLowered()
    {
        return $this->_dc($this->ReserveLowered === 'true', 'ReserveLowered');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setReserveLowered($value)
    {
        $this->ReserveLowered = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getReserveRemoved()
    {
        return $this->_dc($this->ReserveRemoved === 'true', 'ReserveRemoved');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setReserveRemoved($value)
    {
        $this->ReserveRemoved = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ItemRevised' => ['type' => 'bool'],
            'BuyItNowAdded' => ['type' => 'bool'],
            'BuyItNowLowered' => ['type' => 'bool'],
            'ReserveLowered' => ['type' => 'bool'],
            'ReserveRemoved' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ReviseStatusType::_register();
