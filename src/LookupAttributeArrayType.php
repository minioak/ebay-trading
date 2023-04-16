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
class LookupAttributeArrayType extends EbatNs_ComplexType
{
    const TAG = 'LookupAttributeArrayType';
    const NAME = 'LookupAttributeArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var LookupAttributeType[]|null
     */
    protected $LookupAttribute = [];


    /**
     * @return LookupAttributeType[]|LookupAttributeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getLookupAttribute($index = null)
    {
        return $this->_dc($index === null
            ? $this->LookupAttribute
            : (count($this->LookupAttribute) > $index
                ? $this->LookupAttribute[$index]
                : null), 'LookupAttribute');
    }

    /**
     * @param LookupAttributeType|null|LookupAttributeType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setLookupAttribute($value, $index = null)
    {
        if ($index === null) {
            $this->LookupAttribute = $value;
        } else {
            $this->LookupAttribute[$index] = [];
            
            foreach ($value as $item) {
                $this->addLookupAttribute($item);
            }
        }
    }

    /**
     * @param LookupAttributeType|null $value
     * @return void
     */
    public function addLookupAttribute($value)
    {
        $this->LookupAttribute[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['LookupAttribute' => ['type' => 'LookupAttributeType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

LookupAttributeArrayType::_register();
