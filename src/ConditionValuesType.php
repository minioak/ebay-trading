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
 * Fields in this type provide condition values and display names.
 **/
class ConditionValuesType extends EbatNs_ComplexType
{
    const TAG = 'ConditionValuesType';
    const NAME = 'ConditionValuesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var ConditionType[]|null
     */
    protected $Condition = [];

    /**
     * @var string|null
     */
    protected $ConditionHelpURL = null;


    /**
     * @return ConditionType[]|ConditionType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCondition($index = null)
    {
        return $this->_dc($index === null
            ? $this->Condition
            : (count($this->Condition) > $index
                ? $this->Condition[$index]
                : null), 'Condition');
    }

    /**
     * @param ConditionType|null|ConditionType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCondition($value, $index = null)
    {
        if ($index === null) {
            $this->Condition = $value;
        } else {
            $this->Condition[$index] = [];
            
            foreach ($value as $item) {
                $this->addCondition($item);
            }
        }
    }

    /**
     * @param ConditionType|null $value
     * @return void
     */
    public function addCondition($value)
    {
        $this->Condition[] = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getConditionHelpURL()
    {
        return $this->_dc($this->ConditionHelpURL, 'ConditionHelpURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setConditionHelpURL($value)
    {
        $this->ConditionHelpURL = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Condition' => ['type' => 'ConditionType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ConditionHelpURL' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ConditionValuesType::_register();
