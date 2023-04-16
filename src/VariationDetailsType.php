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
 * Type defining the
 * VariationDetails
 * container that is returned in
 * 
 * GeteBayDetails
 * if
 * VariationDetails
 * is included
 * in the request as a
 * DetailName
 * filter, or if
 * GeteBayDetails
 * is called with no
 * DetailName
 * filters.
 **/
class VariationDetailsType extends EbatNs_ComplexType
{
    const TAG = 'VariationDetailsType';
    const NAME = 'VariationDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $MaxVariationsPerItem = null;

    /**
     * @var int|null
     */
    protected $MaxNamesPerVariationSpecificsSet = null;

    /**
     * @var int|null
     */
    protected $MaxValuesPerVariationSpecificsSetName = null;

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
    public function getMaxVariationsPerItem()
    {
        return $this->_dc($this->MaxVariationsPerItem, 'MaxVariationsPerItem');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxVariationsPerItem($value)
    {
        $this->MaxVariationsPerItem = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxNamesPerVariationSpecificsSet()
    {
        return $this->_dc($this->MaxNamesPerVariationSpecificsSet, 'MaxNamesPerVariationSpecificsSet');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxNamesPerVariationSpecificsSet($value)
    {
        $this->MaxNamesPerVariationSpecificsSet = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getMaxValuesPerVariationSpecificsSetName()
    {
        return $this->_dc($this->MaxValuesPerVariationSpecificsSetName, 'MaxValuesPerVariationSpecificsSetName');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setMaxValuesPerVariationSpecificsSetName($value)
    {
        $this->MaxValuesPerVariationSpecificsSetName = self::_int($value);
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
            'MaxVariationsPerItem' => ['type' => 'int'],
            'MaxNamesPerVariationSpecificsSet' => ['type' => 'int'],
            'MaxValuesPerVariationSpecificsSetName' => ['type' => 'int'],
            'DetailVersion' => [],
            'UpdateTime' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

VariationDetailsType::_register();
