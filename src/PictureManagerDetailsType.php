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


class PictureManagerDetailsType extends EbatNs_ComplexType
{
    const TAG = 'PictureManagerDetailsType';
    const NAME = 'PictureManagerDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var PictureManagerSubscriptionLevelCodeType|null
     */
    protected $SubscriptionLevel = null;

    /**
     * @var int|null
     */
    protected $StorageUsed = null;

    /**
     * @var int|null
     */
    protected $TotalStorageAvailable = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $KeepOriginal = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $WatermarkEPS = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $WatermarkUserID = null;

    /**
     * @var PictureManagerFolderType[]|null
     */
    protected $Folder = [];


    /**
     * @return PictureManagerSubscriptionLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSubscriptionLevel()
    {
        return $this->_dc($this->SubscriptionLevel);
    }

    /**
     * @param PictureManagerSubscriptionLevelCodeType|null $value
     * @return void
     */
    public function setSubscriptionLevel($value)
    {
        $this->SubscriptionLevel = $this->_enum($value, PictureManagerSubscriptionLevelCodeType::class);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStorageUsed()
    {
        return $this->_dc($this->StorageUsed, 'StorageUsed');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setStorageUsed($value)
    {
        $this->StorageUsed = self::_int($value);
    }

    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTotalStorageAvailable()
    {
        return $this->_dc($this->TotalStorageAvailable, 'TotalStorageAvailable');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setTotalStorageAvailable($value)
    {
        $this->TotalStorageAvailable = self::_int($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getKeepOriginal()
    {
        return $this->_dc($this->KeepOriginal === 'true', 'KeepOriginal');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setKeepOriginal($value)
    {
        $this->KeepOriginal = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWatermarkEPS()
    {
        return $this->_dc($this->WatermarkEPS === 'true', 'WatermarkEPS');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setWatermarkEPS($value)
    {
        $this->WatermarkEPS = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getWatermarkUserID()
    {
        return $this->_dc($this->WatermarkUserID === 'true', 'WatermarkUserID');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setWatermarkUserID($value)
    {
        $this->WatermarkUserID = self::_bool($value);
    }

    /**
     * @return PictureManagerFolderType[]|PictureManagerFolderType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getFolder($index = null)
    {
        return $this->_dc($index === null
            ? $this->Folder
            : (count($this->Folder) > $index
                ? $this->Folder[$index]
                : null), 'Folder');
    }

    /**
     * @param PictureManagerFolderType|null|PictureManagerFolderType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setFolder($value, $index = null)
    {
        if ($index === null) {
            $this->Folder = $value;
        } else {
            $this->Folder[$index] = [];
            
            foreach ($value as $item) {
                $this->addFolder($item);
            }
        }
    }

    /**
     * @param PictureManagerFolderType|null $value
     * @return void
     */
    public function addFolder($value)
    {
        $this->Folder[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'SubscriptionLevel' => ['type' => 'PictureManagerSubscriptionLevelCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'StorageUsed' => ['type' => 'int'],
            'TotalStorageAvailable' => ['type' => 'int'],
            'KeepOriginal' => ['type' => 'bool'],
            'WatermarkEPS' => ['type' => 'bool'],
            'WatermarkUserID' => ['type' => 'bool'],
            'Folder' => ['type' => 'PictureManagerFolderType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PictureManagerDetailsType::_register();
