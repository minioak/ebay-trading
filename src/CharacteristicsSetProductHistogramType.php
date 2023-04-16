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
class CharacteristicsSetProductHistogramType extends EbatNs_ComplexType
{
    const TAG = 'CharacteristicsSetProductHistogramType';
    const NAME = 'CharacteristicsSetProductHistogramType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var HistogramEntryType[]|null
     */
    protected $HistogramEntry = [];


    /**
     * @return HistogramEntryType[]|HistogramEntryType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getHistogramEntry($index = null)
    {
        return $this->_dc($index === null
            ? $this->HistogramEntry
            : (count($this->HistogramEntry) > $index
                ? $this->HistogramEntry[$index]
                : null), 'HistogramEntry');
    }

    /**
     * @param HistogramEntryType|null|HistogramEntryType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setHistogramEntry($value, $index = null)
    {
        if ($index === null) {
            $this->HistogramEntry = $value;
        } else {
            $this->HistogramEntry[$index] = [];
            
            foreach ($value as $item) {
                $this->addHistogramEntry($item);
            }
        }
    }

    /**
     * @param HistogramEntryType|null $value
     * @return void
     */
    public function addHistogramEntry($value)
    {
        $this->HistogramEntry[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['HistogramEntry' => ['type' => 'HistogramEntryType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

CharacteristicsSetProductHistogramType::_register();
