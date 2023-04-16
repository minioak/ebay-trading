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
 * Hazmat
 * and
 * RepairScore
 * regulatory containers that are used at the listing level to provide hazardous material related information and
 * the repair score.
 **/
class RegulatoryType extends EbatNs_ComplexType
{
    const TAG = 'RegulatoryType';
    const NAME = 'RegulatoryType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var HazmatType|null
     */
    protected $Hazmat = null;

    /**
     * @var float|null
     */
    protected $RepairScore = null;


    /**
     * @return HazmatType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHazmat()
    {
        return $this->_dc($this->Hazmat, 'Hazmat');
    }

    /**
     * @param HazmatType|null $value
     * @return void
     */
    public function setHazmat($value)
    {
        $this->Hazmat = $value;
    }

    /**
     * @return float|null|mixed Depending on the assigned data converter: mixed
     */
    public function getRepairScore()
    {
        return $this->_dc($this->RepairScore, 'RepairScore');
    }

    /**
     * @param float|null $value
     * @return void
     */
    public function setRepairScore($value)
    {
        $this->RepairScore = self::_float($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Hazmat' => ['type' => 'HazmatType', 'xmlns' => self::XMLNS],
            'RepairScore' => ['type' => 'float']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RegulatoryType::_register();
