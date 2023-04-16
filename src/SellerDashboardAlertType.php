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
 * A message to help the you understand your status as a seller (PowerSeller status,
 * policy compliance status, etc.).
 **/
class SellerDashboardAlertType extends EbatNs_ComplexType
{
    const TAG = 'SellerDashboardAlertType';
    const NAME = 'SellerDashboardAlertType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellerDashboardAlertSeverityCodeType|null
     */
    protected $Severity = null;

    /**
     * @var string|null
     */
    protected $Text = null;


    /**
     * @return SellerDashboardAlertSeverityCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSeverity()
    {
        return $this->_dc($this->Severity);
    }

    /**
     * @param SellerDashboardAlertSeverityCodeType|null $value
     * @return void
     */
    public function setSeverity($value)
    {
        $this->Severity = $this->_enum($value, SellerDashboardAlertSeverityCodeType::class);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getText()
    {
        return $this->_dc($this->Text, 'Text');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setText($value)
    {
        $this->Text = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Severity' => ['type' => 'SellerDashboardAlertSeverityCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Text' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

SellerDashboardAlertType::_register();
