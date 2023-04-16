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
 * This enumerated type is deprecated.
 **/
class TicketEventTypeCodeType extends EbatNs_EnumType
{
    const TAG = 'TicketEventTypeCodeType';
    const NAME = 'TicketEventTypeCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * (in) Any event (applicable to US, UK, and DE)
     **/
    const CodeType_Any = 'Any';

    /**
     * (in) Comedy & Kabarett (Comedy and Cabaret)
     **/
    const CodeType_DE_ComedyAndKabarett = 'DE_ComedyAndKabarett';

    /**
     * (in) Freizeit & Events (Leisure and Events)
     **/
    const CodeType_DE_FreizeitAndEvents = 'DE_FreizeitAndEvents';

    /**
     * (in) Konzerte & Festivals (Concerts and Festivals)
     **/
    const CodeType_DE_KonzerteAndFestivals = 'DE_KonzerteAndFestivals';

    /**
     * (in) Kultur & Klassik (Culture and Classical)
     **/
    const CodeType_DE_KulturAndKlassik = 'DE_KulturAndKlassik';

    /**
     * (in) Musicals & Shows
     **/
    const CodeType_DE_MusicalsAndShows = 'DE_MusicalsAndShows';

    /**
     * (in) Sportveranstaltungen (Sporting Events)
     **/
    const CodeType_DE_Sportveranstaltungen = 'DE_Sportveranstaltungen';

    /**
     * (in) Other events that are not the above Germany event types
     * (applicable to listings on the DE site)
     **/
    const CodeType_DE_Sonstige = 'DE_Sonstige';

    /**
     * (in) Amusement Parks (applicable to listings on the UK site)
     **/
    const CodeType_UK_AmusementParks = 'UK_AmusementParks';

    /**
     * (in) Comedy (applicable to listings on the UK site)
     **/
    const CodeType_UK_Comedy = 'UK_Comedy';

    /**
     * (in) Concerts/Gigs (applicable to listings on the UK site)
     **/
    const CodeType_UK_ConcertsAndGigs = 'UK_ConcertsAndGigs';

    /**
     * (in) Conferences/Seminars (applicable to listings on the UK site)
     **/
    const CodeType_UK_ConferencesAndSeminars = 'UK_ConferencesAndSeminars';

    /**
     * (in) Exhibitions/Shows (applicable to listings on the UK site)
     **/
    const CodeType_UK_ExhibitionsAndShows = 'UK_ExhibitionsAndShows';

    /**
     * (in) Experiences (applicable to listings on the UK site)
     **/
    const CodeType_UK_Experiences = 'UK_Experiences';

    /**
     * (in) Sporting events (applicable to listings on the UK site)
     **/
    const CodeType_UK_SportingEvents = 'UK_SportingEvents';

    /**
     * (in) Theatre/Cinema/Circus (applicable to listings on the UK site)
     **/
    const CodeType_UK_TheatreCinemaAndCircus = 'UK_TheatreCinemaAndCircus';

    /**
     * (in) Other. Events that are not the above UK types
     * (applicable to listings on the UK site)
     **/
    const CodeType_UK_Other = 'UK_Other';

    /**
     * (in) Concerts (applicable to listings on the US site)
     **/
    const CodeType_US_Concerts = 'US_Concerts';

    /**
     * (in) Movies (applicable to listings on the US site)
     **/
    const CodeType_US_Movies = 'US_Movies';

    /**
     * (in) Sporting events (applicable to listings on the US site)
     **/
    const CodeType_US_SportingEvents = 'US_SportingEvents';

    /**
     * (in) Theater (applicable to listings on the US site)
     **/
    const CodeType_US_Theater = 'US_Theater';

    /**
     * (in) Events that are not concerts,
     * movies, sporting events, or theater events
     * (applicable to listings on the US site)
     **/
    const CodeType_US_Other = 'US_Other';

    /**
     * Reserved for internal or future use.
     **/
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return TicketEventTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param TicketEventTypeCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $const = 'self::CodeType_' . $value;
        $this->_value = $value !== null && defined($const) ? constant($const) : null;
    }

    /**
     * @return bool
     */
    public function isAny()
    {
        return $this->_value === self::CodeType_Any;
    }

    /**
     * @return bool
     */
    public function isDE_ComedyAndKabarett()
    {
        return $this->_value === self::CodeType_DE_ComedyAndKabarett;
    }

    /**
     * @return bool
     */
    public function isDE_FreizeitAndEvents()
    {
        return $this->_value === self::CodeType_DE_FreizeitAndEvents;
    }

    /**
     * @return bool
     */
    public function isDE_KonzerteAndFestivals()
    {
        return $this->_value === self::CodeType_DE_KonzerteAndFestivals;
    }

    /**
     * @return bool
     */
    public function isDE_KulturAndKlassik()
    {
        return $this->_value === self::CodeType_DE_KulturAndKlassik;
    }

    /**
     * @return bool
     */
    public function isDE_MusicalsAndShows()
    {
        return $this->_value === self::CodeType_DE_MusicalsAndShows;
    }

    /**
     * @return bool
     */
    public function isDE_Sportveranstaltungen()
    {
        return $this->_value === self::CodeType_DE_Sportveranstaltungen;
    }

    /**
     * @return bool
     */
    public function isDE_Sonstige()
    {
        return $this->_value === self::CodeType_DE_Sonstige;
    }

    /**
     * @return bool
     */
    public function isUK_AmusementParks()
    {
        return $this->_value === self::CodeType_UK_AmusementParks;
    }

    /**
     * @return bool
     */
    public function isUK_Comedy()
    {
        return $this->_value === self::CodeType_UK_Comedy;
    }

    /**
     * @return bool
     */
    public function isUK_ConcertsAndGigs()
    {
        return $this->_value === self::CodeType_UK_ConcertsAndGigs;
    }

    /**
     * @return bool
     */
    public function isUK_ConferencesAndSeminars()
    {
        return $this->_value === self::CodeType_UK_ConferencesAndSeminars;
    }

    /**
     * @return bool
     */
    public function isUK_ExhibitionsAndShows()
    {
        return $this->_value === self::CodeType_UK_ExhibitionsAndShows;
    }

    /**
     * @return bool
     */
    public function isUK_Experiences()
    {
        return $this->_value === self::CodeType_UK_Experiences;
    }

    /**
     * @return bool
     */
    public function isUK_SportingEvents()
    {
        return $this->_value === self::CodeType_UK_SportingEvents;
    }

    /**
     * @return bool
     */
    public function isUK_TheatreCinemaAndCircus()
    {
        return $this->_value === self::CodeType_UK_TheatreCinemaAndCircus;
    }

    /**
     * @return bool
     */
    public function isUK_Other()
    {
        return $this->_value === self::CodeType_UK_Other;
    }

    /**
     * @return bool
     */
    public function isUS_Concerts()
    {
        return $this->_value === self::CodeType_US_Concerts;
    }

    /**
     * @return bool
     */
    public function isUS_Movies()
    {
        return $this->_value === self::CodeType_US_Movies;
    }

    /**
     * @return bool
     */
    public function isUS_SportingEvents()
    {
        return $this->_value === self::CodeType_US_SportingEvents;
    }

    /**
     * @return bool
     */
    public function isUS_Theater()
    {
        return $this->_value === self::CodeType_US_Theater;
    }

    /**
     * @return bool
     */
    public function isUS_Other()
    {
        return $this->_value === self::CodeType_US_Other;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

TicketEventTypeCodeType::_register();
