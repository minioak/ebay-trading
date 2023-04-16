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
 * This type defines the available options the seller has for accepting international returns.
 **/
class InternationalReturnsAcceptedCodeType extends EbatNs_ComplexType
{
    const TAG = 'InternationalReturnsAcceptedCodeType';
    const NAME = 'InternationalReturnsAcceptedCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ReturnsAcceptedCodeType[]|null
     */
    protected $InternationalReturnsAccepted = [];


    /**
     * @return string[]|ReturnsAcceptedCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getInternationalReturnsAccepted($index = null)
    {
        return $this->_dc($index === null
            ? $this->InternationalReturnsAccepted
            : (count($this->InternationalReturnsAccepted) > $index
                ? $this->InternationalReturnsAccepted[$index]
                : null));
    }

    /**
     * @param ReturnsAcceptedCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setInternationalReturnsAccepted($value, $index = null)
    {
        if ($index === null) {
            $this->InternationalReturnsAccepted = $value;
        } else {
            $this->InternationalReturnsAccepted[$index] = [];
            
            foreach ($value as $item) {
                $this->addInternationalReturnsAccepted($item);
            }
        }
    }

    /**
     * @param ReturnsAcceptedCodeType|null $value
     * @return void
     */
    public function addInternationalReturnsAccepted($value)
    {
        $this->InternationalReturnsAccepted[] = $this->_enum($value, ReturnsAcceptedCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['InternationalReturnsAccepted' => ['type' => 'ReturnsAcceptedCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

InternationalReturnsAcceptedCodeType::_register();
