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
 * All information corresponding to an individual parts compatibility by application.
 **/
class ItemCompatibilityType extends EbatNs_ComplexType
{
    const TAG = 'ItemCompatibilityType';
    const NAME = 'ItemCompatibilityType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var bool|null "true" or "false"
     */
    protected $Delete = null;

    /**
     * @var NameValueListType[]|null
     */
    protected $NameValueList = [];

    /**
     * @var string|null
     */
    protected $CompatibilityNotes = null;


    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDelete()
    {
        return $this->_dc($this->Delete === 'true', 'Delete');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setDelete($value)
    {
        $this->Delete = self::_bool($value);
    }

    /**
     * @return NameValueListType[]|NameValueListType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getNameValueList($index = null)
    {
        return $this->_dc($index === null
            ? $this->NameValueList
            : (count($this->NameValueList) > $index
                ? $this->NameValueList[$index]
                : null), 'NameValueList');
    }

    /**
     * @param NameValueListType|null|NameValueListType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setNameValueList($value, $index = null)
    {
        if ($index === null) {
            $this->NameValueList = $value;
        } else {
            $this->NameValueList[$index] = [];
            
            foreach ($value as $item) {
                $this->addNameValueList($item);
            }
        }
    }

    /**
     * @param NameValueListType|null $value
     * @return void
     */
    public function addNameValueList($value)
    {
        $this->NameValueList[] = $value;
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCompatibilityNotes()
    {
        return $this->_dc($this->CompatibilityNotes, 'CompatibilityNotes');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setCompatibilityNotes($value)
    {
        $this->CompatibilityNotes = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Delete' => ['type' => 'bool'],
            'NameValueList' => ['type' => 'NameValueListType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'CompatibilityNotes' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ItemCompatibilityType::_register();
