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
class CharityAffiliationsType extends EbatNs_ComplexType
{
    const TAG = 'CharityAffiliationsType';
    const NAME = 'CharityAffiliationsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CharityIDType[]|null
     */
    protected $CharityID = [];


    /**
     * @return CharityIDType[]|CharityIDType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCharityID($index = null)
    {
        return $this->_dc($index === null
            ? $this->CharityID
            : (count($this->CharityID) > $index
                ? $this->CharityID[$index]
                : null), 'CharityID');
    }

    /**
     * @param CharityIDType|null|CharityIDType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCharityID($value, $index = null)
    {
        if ($index === null) {
            $this->CharityID = $value;
        } else {
            $this->CharityID[$index] = [];
            
            foreach ($value as $item) {
                $this->addCharityID($item);
            }
        }
    }

    /**
     * @param CharityIDType|null $value
     * @return void
     */
    public function addCharityID($value)
    {
        $this->CharityID[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['CharityID' => ['type' => 'CharityIDType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

CharityAffiliationsType::_register();
