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
 * Type used by the
 * CalculatedShippingDiscount
 * container, which is used in the
 * SetShippingDiscountProfiles
 * call to create one or more discounted calculated shipping rules. The
 * CalculatedShippingDiscount
 * container is returned in the response of all other calls that use this type.
 **/
class CalculatedShippingDiscountType extends EbatNs_ComplexType
{
    const TAG = 'CalculatedShippingDiscountType';
    const NAME = 'CalculatedShippingDiscountType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var DiscountNameCodeType|null
     */
    protected $DiscountName = null;

    /**
     * @var DiscountProfileType[]|null
     */
    protected $DiscountProfile = [];


    /**
     * @return DiscountNameCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDiscountName()
    {
        return $this->_dc($this->DiscountName);
    }

    /**
     * @param DiscountNameCodeType|null $value
     * @return void
     */
    public function setDiscountName($value)
    {
        $this->DiscountName = $this->_enum($value, DiscountNameCodeType::class);
    }

    /**
     * @return DiscountProfileType[]|DiscountProfileType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDiscountProfile($index = null)
    {
        return $this->_dc($index === null
            ? $this->DiscountProfile
            : (count($this->DiscountProfile) > $index
                ? $this->DiscountProfile[$index]
                : null), 'DiscountProfile');
    }

    /**
     * @param DiscountProfileType|null|DiscountProfileType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDiscountProfile($value, $index = null)
    {
        if ($index === null) {
            $this->DiscountProfile = $value;
        } else {
            $this->DiscountProfile[$index] = [];
            
            foreach ($value as $item) {
                $this->addDiscountProfile($item);
            }
        }
    }

    /**
     * @param DiscountProfileType|null $value
     * @return void
     */
    public function addDiscountProfile($value)
    {
        $this->DiscountProfile[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DiscountName' => ['type' => 'DiscountNameCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'DiscountProfile' => ['type' => 'DiscountProfileType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CalculatedShippingDiscountType::_register();
