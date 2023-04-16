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
 * This type defines the available options the seller has for accepting domestic returns.
 **/
class DomesticReturnsAcceptedCodeType extends EbatNs_ComplexType
{
    const TAG = 'DomesticReturnsAcceptedCodeType';
    const NAME = 'DomesticReturnsAcceptedCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ReturnsAcceptedCodeType[]|null
     */
    protected $DomesticReturnsAccepted = [];


    /**
     * @return string[]|ReturnsAcceptedCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDomesticReturnsAccepted($index = null)
    {
        return $this->_dc($index === null
            ? $this->DomesticReturnsAccepted
            : (count($this->DomesticReturnsAccepted) > $index
                ? $this->DomesticReturnsAccepted[$index]
                : null));
    }

    /**
     * @param ReturnsAcceptedCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDomesticReturnsAccepted($value, $index = null)
    {
        if ($index === null) {
            $this->DomesticReturnsAccepted = $value;
        } else {
            $this->DomesticReturnsAccepted[$index] = [];
            
            foreach ($value as $item) {
                $this->addDomesticReturnsAccepted($item);
            }
        }
    }

    /**
     * @param ReturnsAcceptedCodeType|null $value
     * @return void
     */
    public function addDomesticReturnsAccepted($value)
    {
        $this->DomesticReturnsAccepted[] = $this->_enum($value, ReturnsAcceptedCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['DomesticReturnsAccepted' => ['type' => 'ReturnsAcceptedCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

DomesticReturnsAcceptedCodeType::_register();
