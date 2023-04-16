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
 * This type is used by the
 * ItemSpecificDetails
 * container that is returned in the
 * GeteBayDetails
 * call. The
 * ItemSpecificDetails
 * container consists of maximum threshold values that must be adhered to when creating, revising, or relisting
 * items with Item Specifics. Item Specifics are used to provide descriptive details of an item in a structured
 * manner.
 **/
class ItemSpecificDetailsType extends EbatNs_ComplexType
{
    const TAG = 'ItemSpecificDetailsType';
    const NAME = 'ItemSpecificDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $MaxItemSpecificsPerItem = null;

    /**
     * @var int|null
     */
    protected $MaxValuesPerName = null;

    /**
     * @var int|null
     */
    protected $MaxCharactersPerValue = null;

    /**
     * @var int|null
     */
    protected $MaxCharactersPerName = null;

    /**
     * @var string|null
     */
    protected $DetailVersion = null;

    /**
     * @var string|null
     */
    protected $UpdateTime = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxItemSpecificsPerItem()
    {
        return $this->_dc($this->MaxItemSpecificsPerItem, 'MaxItemSpecificsPerItem');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxItemSpecificsPerItem($value)
    {
        $this->MaxItemSpecificsPerItem = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxValuesPerName()
    {
        return $this->_dc($this->MaxValuesPerName, 'MaxValuesPerName');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxValuesPerName($value)
    {
        $this->MaxValuesPerName = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxCharactersPerValue()
    {
        return $this->_dc($this->MaxCharactersPerValue, 'MaxCharactersPerValue');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxCharactersPerValue($value)
    {
        $this->MaxCharactersPerValue = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxCharactersPerName()
    {
        return $this->_dc($this->MaxCharactersPerName, 'MaxCharactersPerName');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxCharactersPerName($value)
    {
        $this->MaxCharactersPerName = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDetailVersion()
    {
        return $this->_dc($this->DetailVersion, 'DetailVersion');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDetailVersion($value)
    {
        $this->DetailVersion = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getUpdateTime()
    {
        return $this->_dc($this->UpdateTime, 'UpdateTime');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setUpdateTime($value)
    {
        $this->UpdateTime = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'MaxItemSpecificsPerItem' => ['type' => 'int'],
            'MaxValuesPerName' => ['type' => 'int'],
            'MaxCharactersPerValue' => ['type' => 'int'],
            'MaxCharactersPerName' => ['type' => 'int'],
            'DetailVersion' => [],
            'UpdateTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ItemSpecificDetailsType::_register();
