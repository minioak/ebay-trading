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
 * This type is deprecated.
 **/
class PictureManagerFolderType extends EbatNs_ComplexType
{
    const TAG = 'PictureManagerFolderType';
    const NAME = 'PictureManagerFolderType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $FolderID = null;

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var PictureManagerPictureType[]|null
     */
    protected $Picture = [];


    /**
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFolderID()
    {
        return $this->_dc($this->FolderID, 'FolderID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setFolderID($value)
    {
        $this->FolderID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getName()
    {
        return $this->_dc($this->Name, 'Name');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setName($value)
    {
        $this->Name = self::_string($value);
    }

    /**
     * @return PictureManagerPictureType[]|PictureManagerPictureType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getPicture($index = null)
    {
        return $this->_dc($index === null
            ? $this->Picture
            : (count($this->Picture) > $index
                ? $this->Picture[$index]
                : null), 'Picture');
    }

    /**
     * @param PictureManagerPictureType|null|PictureManagerPictureType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setPicture($value, $index = null)
    {
        if ($index === null) {
            $this->Picture = $value;
        } else {
            $this->Picture[$index] = [];
            
            foreach ($value as $item) {
                $this->addPicture($item);
            }
        }
    }

    /**
     * @param PictureManagerPictureType|null $value
     * @return void
     */
    public function addPicture($value)
    {
        $this->Picture[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'FolderID' => ['type' => 'int'],
            'Name' => [],
            'Picture' => ['type' => 'PictureManagerPictureType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PictureManagerFolderType::_register();
