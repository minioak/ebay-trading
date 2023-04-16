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
class ListingTipMessageType extends EbatNs_ComplexType
{
    const TAG = 'ListingTipMessageType';
    const NAME = 'ListingTipMessageType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $ListingTipMessageID = null;

    /**
     * @var string|null
     */
    protected $ShortMessage = null;

    /**
     * @var string|null
     */
    protected $LongMessage = null;

    /**
     * @var string|null
     */
    protected $HelpURLPath = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getListingTipMessageID()
    {
        return $this->_dc($this->ListingTipMessageID, 'ListingTipMessageID');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setListingTipMessageID($value)
    {
        $this->ListingTipMessageID = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getShortMessage()
    {
        return $this->_dc($this->ShortMessage, 'ShortMessage');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setShortMessage($value)
    {
        $this->ShortMessage = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLongMessage()
    {
        return $this->_dc($this->LongMessage, 'LongMessage');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setLongMessage($value)
    {
        $this->LongMessage = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getHelpURLPath()
    {
        return $this->_dc($this->HelpURLPath, 'HelpURLPath');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setHelpURLPath($value)
    {
        $this->HelpURLPath = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'ListingTipMessageID' => [],
            'ShortMessage' => [],
            'LongMessage' => [],
            'HelpURLPath' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

ListingTipMessageType::_register();
