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
 * Specifies a predefined subset of fields to return. The predefined set of fields
 * can vary for different calls. Only applicable to certain calls (see request types
 * that include a GranularityLevel property). For calls that support this filter, see
 * the <a
 * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/eBay-SelectingFields.html">eBay
 * Features Guide</a> for a list of the output fields that are returned for
 * each level. Only one level can be specified at a time. For GetSellerList, use
 * DetailLevel or GranularityLevel in a given request, but not both. For
 * GetSellerList, if GranularityLevel is specified, DetailLevel is ignored.
 **/
class GranularityLevelCodeType extends EbatNs_EnumType
{
    const TAG = 'GranularityLevelCodeType';
    const NAME = 'GranularityLevelCodeType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * (in) For each record in the response, retrieves less data than Medium.
     * See the <a
     * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/eBay-SelectingFields.html">eBay
     * Features Guide</a> for a list of the output fields
     * that are returned when this level is specified.
     **/
    const CodeType_Coarse = 'Coarse';

    /**
     * For each record in the response, retrieves more data than Medium.
     * See the <a
     * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/eBay-SelectingFields.html">eBay
     * Features Guide</a> for a list of the output fields
     * that are returned when this level is specified.
     **/
    const CodeType_Fine = 'Fine';

    /**
     * For each record in the response, retrieves more data than Coarse and less data
     * than Fine. See the <a
     * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#basics/eBay-SelectingFields.html">eBay
     * Features Guide</a> for a list of the output fields
     * that are returned when this level is specified.
     **/
    const CodeType_Medium = 'Medium';

    
    const CodeType_CustomCode = 'CustomCode';
    
    /**
     * @var string|null
     */
    protected $_value = null;


    /**
     * @param string|null $value
     */
    public function __construct($value = null)
    {
        $this->setTypeValue($value);
    }

    /**
     * @return GranularityLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTypeValue()
    {
        return $this->_dc($this->_value);
    }

    /**
     * @param GranularityLevelCodeType|null $value
     * @return void
     */
    public function setTypeValue($value)
    {
        $const = 'self::CodeType_' . $value;
        $this->_value = $value !== null && defined($const) ? constant($const) : null;
    }

    /**
     * @return bool
     */
    public function isCoarse()
    {
        return $this->_value === self::CodeType_Coarse;
    }

    /**
     * @return bool
     */
    public function isFine()
    {
        return $this->_value === self::CodeType_Fine;
    }

    /**
     * @return bool
     */
    public function isMedium()
    {
        return $this->_value === self::CodeType_Medium;
    }

    /**
     * @return bool
     */
    public function isCustomCode()
    {
        return $this->_value === self::CodeType_CustomCode;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([], parent::NAME);
        self::assignAttributes([]);
    }

}

GranularityLevelCodeType::_register();
