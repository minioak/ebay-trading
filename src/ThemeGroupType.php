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
 * Data for one theme group. Returned for
 * GetDescriptionTemplates
 * if theme groups are requested.
 **/
class ThemeGroupType extends EbatNs_ComplexType
{
    const TAG = 'ThemeGroupType';
    const NAME = 'ThemeGroupType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $GroupID = null;

    /**
     * @var string|null
     */
    protected $GroupName = null;

    /**
     * @var int[]|null
     */
    protected $ThemeID = [];

    /**
     * @var int|null
     */
    protected $ThemeTotal = null;


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGroupID()
    {
        return $this->_dc($this->GroupID, 'GroupID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setGroupID($value)
    {
        $this->GroupID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getGroupName()
    {
        return $this->_dc($this->GroupName, 'GroupName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setGroupName($value)
    {
        $this->GroupName = self::_string($value);
    }

    /**
     * @return int[]|int|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getThemeID($index = null)
    {
        return $this->_dc($index === null
            ? $this->ThemeID
            : (count($this->ThemeID) > $index
                ? $this->ThemeID[$index]
                : null), 'ThemeID');
    }

    /**
     * @param int|null|int[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setThemeID($value, $index = null)
    {
        if ($index === null) {
            $this->ThemeID = $value;
        } else {
            $this->ThemeID[$index] = [];
            
            foreach ($value as $item) {
                $this->addThemeID($item);
            }
        }
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function addThemeID($value)
    {
        $this->ThemeID[] = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getThemeTotal()
    {
        return $this->_dc($this->ThemeTotal, 'ThemeTotal');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setThemeTotal($value)
    {
        $this->ThemeTotal = self::_int($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'GroupID' => ['type' => 'int'],
            'GroupName' => [],
            'ThemeID' => ['type' => 'int', 'cardinality' => '0..*'],
            'ThemeTotal' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ThemeGroupType::_register();
