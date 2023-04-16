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
class XSLFileType extends EbatNs_ComplexType
{
    const TAG = 'XSLFileType';
    const NAME = 'XSLFileType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $FileName = null;

    /**
     * @var string|null
     */
    protected $FileVersion = null;

    /**
     * @var string|null
     */
    protected $FileContent = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFileName()
    {
        return $this->_dc($this->FileName, 'FileName');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFileName($value)
    {
        $this->FileName = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFileVersion()
    {
        return $this->_dc($this->FileVersion, 'FileVersion');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFileVersion($value)
    {
        $this->FileVersion = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getFileContent()
    {
        return $this->_dc($this->FileContent, 'FileContent');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setFileContent($value)
    {
        $this->FileContent = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'FileName' => [],
            'FileVersion' => [],
            'FileContent' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

XSLFileType::_register();
