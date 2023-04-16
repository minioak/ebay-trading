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
 * This type is deprecated, as the maximum number of policy violations for a buyer is no longer a valid Buyer
 * Requirement at the account or listing level.
 **/
class NumberOfPolicyViolationsDetailsType extends EbatNs_ComplexType
{
    const TAG = 'NumberOfPolicyViolationsDetailsType';
    const NAME = 'NumberOfPolicyViolationsDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int[]|null
     */
    protected $Count = [];


    /**
     * @return int[]|int|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCount($index = null)
    {
        return $this->_dc($index === null
            ? $this->Count
            : (count($this->Count) > $index
                ? $this->Count[$index]
                : null), 'Count');
    }

    /**
     * @param int|null|int[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCount($value, $index = null)
    {
        if ($index === null) {
            $this->Count = $value;
        } else {
            $this->Count[$index] = [];
            
            foreach ($value as $item) {
                $this->addCount($item);
            }
        }
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function addCount($value)
    {
        $this->Count[] = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Count' => ['type' => 'int', 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

NumberOfPolicyViolationsDetailsType::_register();
