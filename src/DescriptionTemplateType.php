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
 * Type that provides detailed information on a Listing Designer Theme or Layout.
 **/
class DescriptionTemplateType extends EbatNs_ComplexType
{
    const TAG = 'DescriptionTemplateType';
    const NAME = 'DescriptionTemplateType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var int|null
     */
    protected $GroupID = null;

    /**
     * @var int|null
     */
    protected $ID = null;

    /**
     * @var string|null
     */
    protected $ImageURL = null;

    /**
     * @var string|null
     */
    protected $Name = null;

    /**
     * @var string|null
     */
    protected $TemplateXML = null;

    /**
     * @var DescriptionTemplateCodeType|null
     */
    protected $Type = null;


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
     * @return int|null|mixed Depending on the assigned data converter: mixed
     */
    public function getID()
    {
        return $this->_dc($this->ID, 'ID');
    }

    /**
     * @param int|null $value
     * @return void
     */
    public function setID($value)
    {
        $this->ID = self::_int($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getImageURL()
    {
        return $this->_dc($this->ImageURL, 'ImageURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setImageURL($value)
    {
        $this->ImageURL = self::_string($value);
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
    public function getTemplateXML()
    {
        return $this->_dc($this->TemplateXML, 'TemplateXML');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTemplateXML($value)
    {
        $this->TemplateXML = self::_string($value);
    }

    /**
     * @return DescriptionTemplateCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getType()
    {
        return $this->_dc($this->Type);
    }

    /**
     * @param DescriptionTemplateCodeType|null $value
     * @return void
     */
    public function setType($value)
    {
        $this->Type = $this->_enum($value, DescriptionTemplateCodeType::class);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'GroupID' => ['type' => 'int'],
            'ID' => ['type' => 'int'],
            'ImageURL' => [],
            'Name' => [],
            'TemplateXML' => [],
            'Type' => ['type' => 'DescriptionTemplateCodeType', 'enum' => true, 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

DescriptionTemplateType::_register();
