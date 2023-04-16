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
 * Contains a seller's cut off time preferences for same day handling for item shipping.
 **/
class DispatchCutoffTimePreferencesType extends EbatNs_ComplexType
{
    const TAG = 'DispatchCutoffTimePreferencesType';
    const NAME = 'DispatchCutoffTimePreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $CutoffTime = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCutoffTime()
    {
        return $this->_dc($this->CutoffTime, 'CutoffTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCutoffTime($value)
    {
        $this->CutoffTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['CutoffTime' => []], parent::NAME);
        self::assignAttributes([]);
    }

}

DispatchCutoffTimePreferencesType::_register();
