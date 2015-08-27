<?php
/* Generated on 8/11/15 3:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

require_once 'EbatNs_FacetType.php';

class TicketEventTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Any = 'Any';
	const CodeType_DE_ComedyAndKabarett = 'DE_ComedyAndKabarett';
	const CodeType_DE_FreizeitAndEvents = 'DE_FreizeitAndEvents';
	const CodeType_DE_KonzerteAndFestivals = 'DE_KonzerteAndFestivals';
	const CodeType_DE_KulturAndKlassik = 'DE_KulturAndKlassik';
	const CodeType_DE_MusicalsAndShows = 'DE_MusicalsAndShows';
	const CodeType_DE_Sportveranstaltungen = 'DE_Sportveranstaltungen';
	const CodeType_DE_Sonstige = 'DE_Sonstige';
	const CodeType_UK_AmusementParks = 'UK_AmusementParks';
	const CodeType_UK_Comedy = 'UK_Comedy';
	const CodeType_UK_ConcertsAndGigs = 'UK_ConcertsAndGigs';
	const CodeType_UK_ConferencesAndSeminars = 'UK_ConferencesAndSeminars';
	const CodeType_UK_ExhibitionsAndShows = 'UK_ExhibitionsAndShows';
	const CodeType_UK_Experiences = 'UK_Experiences';
	const CodeType_UK_SportingEvents = 'UK_SportingEvents';
	const CodeType_UK_TheatreCinemaAndCircus = 'UK_TheatreCinemaAndCircus';
	const CodeType_UK_Other = 'UK_Other';
	const CodeType_US_Concerts = 'US_Concerts';
	const CodeType_US_Movies = 'US_Movies';
	const CodeType_US_SportingEvents = 'US_SportingEvents';
	const CodeType_US_Theater = 'US_Theater';
	const CodeType_US_Other = 'US_Other';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('TicketEventTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_TicketEventTypeCodeType = new TicketEventTypeCodeType();
?>