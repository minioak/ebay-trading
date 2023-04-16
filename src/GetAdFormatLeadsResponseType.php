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
 * Returns number of leads and contact and other information for each lead. One
 * AdFormatLead node is returned for each lead.
 **/
class GetAdFormatLeadsResponseType extends EbatNs_Response
{
    const TAG = 'GetAdFormatLeadsResponseType';
    const NAME = 'GetAdFormatLeadsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var AdFormatLeadType[]|null
     */
    protected $AdFormatLead = [];

    /**
     * @var int|null
     */
    protected $AdFormatLeadCount = null;


    /**
     * @return AdFormatLeadType[]|AdFormatLeadType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAdFormatLead($index = null)
    {
        return $this->_dc($index === null
            ? $this->AdFormatLead
            : (count($this->AdFormatLead) > $index
                ? $this->AdFormatLead[$index]
                : null), 'AdFormatLead');
    }

    /**
     * @param AdFormatLeadType|null|AdFormatLeadType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAdFormatLead($value, $index = null)
    {
        if ($index === null) {
            $this->AdFormatLead = $value;
        } else {
            $this->AdFormatLead[$index] = [];
            
            foreach ($value as $item) {
                $this->addAdFormatLead($item);
            }
        }
    }

    /**
     * @param AdFormatLeadType|null $value
     * @return void
     */
    public function addAdFormatLead($value)
    {
        $this->AdFormatLead[] = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAdFormatLeadCount()
    {
        return $this->_dc($this->AdFormatLeadCount, 'AdFormatLeadCount');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setAdFormatLeadCount($value)
    {
        $this->AdFormatLeadCount = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'AdFormatLead' => ['type' => 'AdFormatLeadType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'AdFormatLeadCount' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetAdFormatLeadsResponseType::_register();
