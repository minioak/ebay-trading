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
 * Responds to a call to GetApiAccessRules.
 **/
class GetApiAccessRulesResponseType extends EbatNs_Response
{
    const TAG = 'GetApiAccessRulesResponseType';
    const NAME = 'GetApiAccessRulesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ApiAccessRuleType[]|null
     */
    protected $ApiAccessRule = [];


    /**
     * @return ApiAccessRuleType[]|ApiAccessRuleType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getApiAccessRule($index = null)
    {
        return $this->_dc($index === null
            ? $this->ApiAccessRule
            : (count($this->ApiAccessRule) > $index
                ? $this->ApiAccessRule[$index]
                : null), 'ApiAccessRule');
    }

    /**
     * @param ApiAccessRuleType|null|ApiAccessRuleType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setApiAccessRule($value, $index = null)
    {
        if ($index === null) {
            $this->ApiAccessRule = $value;
        } else {
            $this->ApiAccessRule[$index] = [];
            
            foreach ($value as $item) {
                $this->addApiAccessRule($item);
            }
        }
    }

    /**
     * @param ApiAccessRuleType|null $value
     * @return void
     */
    public function addApiAccessRule($value)
    {
        $this->ApiAccessRule[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['ApiAccessRule' => ['type' => 'ApiAccessRuleType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

GetApiAccessRulesResponseType::_register();
