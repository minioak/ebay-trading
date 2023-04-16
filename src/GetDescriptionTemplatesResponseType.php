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
 * This is the base response type for the
 * GetDescriptionTemplates
 * call. This call retrieves the Listing Designer templates that are available for use by the seller. The user has
 * the option of retrieving all available Listing Designer templates for all categories, for all motor vehicle
 * categories, or for a specific eBay category.
 * 
 * 
 * <span class="tablenote">
 * Note:
 * As of May 31, 2020, sellers are no longer able to use Listing Designer templates when they create or revise
 * listings. Existing listings that are already using a Listing Designer template will remain unchanged. The
 * GetDescriptionTemplates
 * call will eventually get deprecated and decommissioned, and more information will be provided on timing at a
 * later date. The
 * GetDescriptionTemplates
 * call will still retrieve Listing Designer template data, but none of retrieved templates will be usable to
 * create or revise a listing.</span>
 **/
class GetDescriptionTemplatesResponseType extends EbatNs_Response
{
    const TAG = 'GetDescriptionTemplatesResponseType';
    const NAME = 'GetDescriptionTemplatesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var DescriptionTemplateType[]|null
     */
    protected $DescriptionTemplate = [];

    /**
     * @var int|null
     */
    protected $LayoutTotal = null;

    /**
     * @var int[]|null
     */
    protected $ObsoleteLayoutID = [];

    /**
     * @var int[]|null
     */
    protected $ObsoleteThemeID = [];

    /**
     * @var ThemeGroupType[]|null
     */
    protected $ThemeGroup = [];

    /**
     * @var int|null
     */
    protected $ThemeTotal = null;


    /**
     * @return DescriptionTemplateType[]|DescriptionTemplateType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDescriptionTemplate($index = null)
    {
        return $this->_dc($index === null
            ? $this->DescriptionTemplate
            : (count($this->DescriptionTemplate) > $index
                ? $this->DescriptionTemplate[$index]
                : null), 'DescriptionTemplate');
    }

    /**
     * @param DescriptionTemplateType|null|DescriptionTemplateType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDescriptionTemplate($value, $index = null)
    {
        if ($index === null) {
            $this->DescriptionTemplate = $value;
        } else {
            $this->DescriptionTemplate[$index] = [];
            
            foreach ($value as $item) {
                $this->addDescriptionTemplate($item);
            }
        }
    }

    /**
     * @param DescriptionTemplateType|null $value
     * @return void
     */
    public function addDescriptionTemplate($value)
    {
        $this->DescriptionTemplate[] = $value;
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLayoutTotal()
    {
        return $this->_dc($this->LayoutTotal, 'LayoutTotal');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setLayoutTotal($value)
    {
        $this->LayoutTotal = self::_int($value);
    }

    /**
     * @return int[]|int|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getObsoleteLayoutID($index = null)
    {
        return $this->_dc($index === null
            ? $this->ObsoleteLayoutID
            : (count($this->ObsoleteLayoutID) > $index
                ? $this->ObsoleteLayoutID[$index]
                : null), 'ObsoleteLayoutID');
    }

    /**
     * @param int|null|int[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setObsoleteLayoutID($value, $index = null)
    {
        if ($index === null) {
            $this->ObsoleteLayoutID = $value;
        } else {
            $this->ObsoleteLayoutID[$index] = [];
            
            foreach ($value as $item) {
                $this->addObsoleteLayoutID($item);
            }
        }
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function addObsoleteLayoutID($value)
    {
        $this->ObsoleteLayoutID[] = self::_int($value);
    }

    /**
     * @return int[]|int|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getObsoleteThemeID($index = null)
    {
        return $this->_dc($index === null
            ? $this->ObsoleteThemeID
            : (count($this->ObsoleteThemeID) > $index
                ? $this->ObsoleteThemeID[$index]
                : null), 'ObsoleteThemeID');
    }

    /**
     * @param int|null|int[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setObsoleteThemeID($value, $index = null)
    {
        if ($index === null) {
            $this->ObsoleteThemeID = $value;
        } else {
            $this->ObsoleteThemeID[$index] = [];
            
            foreach ($value as $item) {
                $this->addObsoleteThemeID($item);
            }
        }
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function addObsoleteThemeID($value)
    {
        $this->ObsoleteThemeID[] = self::_int($value);
    }

    /**
     * @return ThemeGroupType[]|ThemeGroupType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getThemeGroup($index = null)
    {
        return $this->_dc($index === null
            ? $this->ThemeGroup
            : (count($this->ThemeGroup) > $index
                ? $this->ThemeGroup[$index]
                : null), 'ThemeGroup');
    }

    /**
     * @param ThemeGroupType|null|ThemeGroupType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setThemeGroup($value, $index = null)
    {
        if ($index === null) {
            $this->ThemeGroup = $value;
        } else {
            $this->ThemeGroup[$index] = [];
            
            foreach ($value as $item) {
                $this->addThemeGroup($item);
            }
        }
    }

    /**
     * @param ThemeGroupType|null $value
     * @return void
     */
    public function addThemeGroup($value)
    {
        $this->ThemeGroup[] = $value;
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
            'DescriptionTemplate' => ['type' => 'DescriptionTemplateType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'LayoutTotal' => ['type' => 'int'],
            'ObsoleteLayoutID' => ['type' => 'int', 'cardinality' => '0..*'],
            'ObsoleteThemeID' => ['type' => 'int', 'cardinality' => '0..*'],
            'ThemeGroup' => ['type' => 'ThemeGroupType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'ThemeTotal' => ['type' => 'int']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

GetDescriptionTemplatesResponseType::_register();
