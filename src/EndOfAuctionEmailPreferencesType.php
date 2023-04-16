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
 * Contains the seller's preferences for the email that can be sent to the winner of an auction listing.
 **/
class EndOfAuctionEmailPreferencesType extends EbatNs_ComplexType
{
    const TAG = 'EndOfAuctionEmailPreferencesType';
    const NAME = 'EndOfAuctionEmailPreferencesType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $TemplateText = null;

    /**
     * @var string|null
     */
    protected $LogoURL = null;

    /**
     * @var EndOfAuctionLogoTypeCodeType|null
     */
    protected $LogoType = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $EmailCustomized = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $TextCustomized = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $LogoCustomized = null;

    /**
     * @var bool|null "true" or "false"
     */
    protected $CopyEmail = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTemplateText()
    {
        return $this->_dc($this->TemplateText, 'TemplateText');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setTemplateText($value)
    {
        $this->TemplateText = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLogoURL()
    {
        return $this->_dc($this->LogoURL, 'LogoURL');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLogoURL($value)
    {
        $this->LogoURL = self::_string($value);
    }

    /**
     * @return EndOfAuctionLogoTypeCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLogoType()
    {
        return $this->_dc($this->LogoType);
    }

    /**
     * @param EndOfAuctionLogoTypeCodeType|null $value
     * @return void
     */
    public function setLogoType($value)
    {
        $this->LogoType = $this->_enum($value, EndOfAuctionLogoTypeCodeType::class);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getEmailCustomized()
    {
        return $this->_dc($this->EmailCustomized === 'true', 'EmailCustomized');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setEmailCustomized($value)
    {
        $this->EmailCustomized = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTextCustomized()
    {
        return $this->_dc($this->TextCustomized === 'true', 'TextCustomized');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setTextCustomized($value)
    {
        $this->TextCustomized = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLogoCustomized()
    {
        return $this->_dc($this->LogoCustomized === 'true', 'LogoCustomized');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setLogoCustomized($value)
    {
        $this->LogoCustomized = self::_bool($value);
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCopyEmail()
    {
        return $this->_dc($this->CopyEmail === 'true', 'CopyEmail');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setCopyEmail($value)
    {
        $this->CopyEmail = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'TemplateText' => [],
            'LogoURL' => [],
            'LogoType' => ['type' => 'EndOfAuctionLogoTypeCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'EmailCustomized' => ['type' => 'bool'],
            'TextCustomized' => ['type' => 'bool'],
            'LogoCustomized' => ['type' => 'bool'],
            'CopyEmail' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

EndOfAuctionEmailPreferencesType::_register();
