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
 * The type is used to indicate how an eBay seller is affiliated with the nonprofit organization registered with
 * eBay for Charity.
 **/
class CharityIDType extends EbatNs_SimpleType
{
    const TAG = 'CharityIDType';
    const NAME = 'CharityIDType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value, '_value');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $this->_value = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes(['type' => ['type' => 'CharityAffiliationTypeCodeType', 'use' => 'required']]);
    }

}

CharityIDType::_register();
