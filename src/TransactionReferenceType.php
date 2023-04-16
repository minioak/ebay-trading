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
 * Type defining the <strong>ReferenceID</strong> element, which is used to display the unique identifier of a
 * payment (and payment type through the <strong>type</strong> attribute.
 **/
class TransactionReferenceType extends EbatNs_SimpleType
{
    const TAG = 'TransactionReferenceType';
    const NAME = 'TransactionReferenceType';
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
        self::assignAttributes(['type' => ['type' => 'TransactionReferenceCodeType']]);
    }

}

TransactionReferenceType::_register();
