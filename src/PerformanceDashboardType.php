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
 * Type defining the
 * Performance
 * container returned in the
 * 
 * GetSellerDashboard
 * response. The
 * Performance
 * 
 * container consists of the seller's overall selling performance rating on all eBay sites
 * on which the seller is sellling, as well as any alerts related to performance.
 **/
class PerformanceDashboardType extends EbatNs_ComplexType
{
    const TAG = 'PerformanceDashboardType';
    const NAME = 'PerformanceDashboardType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SiteCodeType[]|null
     */
    protected $Site = [];

    /**
     * @var PerformanceStatusCodeType|null
     */
    protected $Status = null;

    /**
     * @var SellerDashboardAlertType|null
     */
    protected $Alert = null;


    /**
     * @return string[]|SiteCodeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getSite($index = null)
    {
        return $this->_dc($index === null
            ? $this->Site
            : (count($this->Site) > $index
                ? $this->Site[$index]
                : null));
    }

    /**
     * @param SiteCodeType|null|string[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setSite($value, $index = null)
    {
        if ($index === null) {
            $this->Site = $value;
        } else {
            $this->Site[$index] = [];
            
            foreach ($value as $item) {
                $this->addSite($item);
            }
        }
    }

    /**
     * @param SiteCodeType|null $value
     * @return void
     */
    public function addSite($value)
    {
        $this->Site[] = $this->_enum($value, SiteCodeType::class);
    }

    /**
     * @return PerformanceStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param PerformanceStatusCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, PerformanceStatusCodeType::class);
    }

    /**
     * @return SellerDashboardAlertType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getAlert()
    {
        return $this->_dc($this->Alert, 'Alert');
    }

    /**
     * @param SellerDashboardAlertType|null $value
     * @return void
     */
    public function setAlert($value)
    {
        $this->Alert = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Site' => ['type' => 'SiteCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'Status' => ['type' => 'PerformanceStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Alert' => ['type' => 'SellerDashboardAlertType', 'xmlns' => self::XMLNS]
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PerformanceDashboardType::_register();
