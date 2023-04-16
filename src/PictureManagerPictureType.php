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
class PictureManagerPictureType extends EbatNs_ComplexType
{
    const TAG = 'PictureManagerPictureType';
    const NAME = 'PictureManagerPictureType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $PictureURL = null;

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var string|null
     */
    protected $Date = null;

    /**
     * @var PictureManagerPictureDisplayType[]|null
     */
    protected $DisplayFormat = [];


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getPictureURL()
    {
        return $this->_dc($this->PictureURL, 'PictureURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setPictureURL($value)
    {
        $this->PictureURL = self::_string($value);
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
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDate()
    {
        return $this->_dc($this->Date, 'Date');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDate($value)
    {
        $this->Date = self::_string($value);
    }

    /**
     * @return PictureManagerPictureDisplayType[]|PictureManagerPictureDisplayType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getDisplayFormat($index = null)
    {
        return $this->_dc($index === null
            ? $this->DisplayFormat
            : (count($this->DisplayFormat) > $index
                ? $this->DisplayFormat[$index]
                : null), 'DisplayFormat');
    }

    /**
     * @param PictureManagerPictureDisplayType|null|PictureManagerPictureDisplayType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setDisplayFormat($value, $index = null)
    {
        if ($index === null) {
            $this->DisplayFormat = $value;
        } else {
            $this->DisplayFormat[$index] = [];
            
            foreach ($value as $item) {
                $this->addDisplayFormat($item);
            }
        }
    }

    /**
     * @param PictureManagerPictureDisplayType|null $value
     * @return void
     */
    public function addDisplayFormat($value)
    {
        $this->DisplayFormat[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'PictureURL' => [],
            'Name' => [],
            'Date' => [],
            'DisplayFormat' => ['type' => 'PictureManagerPictureDisplayType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PictureManagerPictureType::_register();
