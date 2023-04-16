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
 * Type defining the
 * TicketListingDetails
 * container, which is used in
 * an
 * Add
 * /
 * Revise
 * /
 * Relist
 * call to provide more details about event tickets.
 **/
class TicketListingDetailsType extends EbatNs_ComplexType
{
    const TAG = 'TicketListingDetailsType';
    const NAME = 'TicketListingDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $EventTitle = null;

    /**
     * @var string|null
     */
    protected $Venue = null;

    /**
     * @var string|null
     */
    protected $PrintedDate = null;

    /**
     * @var string|null
     */
    protected $PrintedTime = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEventTitle()
    {
        return $this->_dc($this->EventTitle, 'EventTitle');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setEventTitle($value)
    {
        $this->EventTitle = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getVenue()
    {
        return $this->_dc($this->Venue, 'Venue');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setVenue($value)
    {
        $this->Venue = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPrintedDate()
    {
        return $this->_dc($this->PrintedDate, 'PrintedDate');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPrintedDate($value)
    {
        $this->PrintedDate = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPrintedTime()
    {
        return $this->_dc($this->PrintedTime, 'PrintedTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPrintedTime($value)
    {
        $this->PrintedTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'EventTitle' => [],
            'Venue' => [],
            'PrintedDate' => [],
            'PrintedTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

TicketListingDetailsType::_register();
