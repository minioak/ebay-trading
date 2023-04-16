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
 * This type is used to reference a seller's specific domestic and/or international shipping rate tables. Shipping
 * rate tables allow sellers to configure specific shipping costs based on the shipping destinations and level of
 * service (e.g. economy, standard, expedite, and one-day). Generally speaking, sellers want to use these shipping
 * rate tables so they can charge a higher shipping cost to the buyer whenever shipping costs are higher for them as
 * well. For example, shipping to Alaska or Hawaii is generally more expensive than shipping to any other of the 48
 * US states, or in regards to international shipping, shipping to some regions and countries are more expensive
 * than others.
 * 
 * Sellers configure domestic, international, and regional shipping rate tables in My eBay Shipping
 * Preferences. To apply shipping rate tables, the shipping cost type must be flat-rate.
 * 
 * For domestic shipping rate tables, the three supported domestic regions are Alaska & Hawaii, US
 * Protectorates (e.g. Puerto Rico and Guam), and APO/FPO destinations, which are US military bases/locations
 * outside of the continental US. In addition to setting one flat rate based on the destination and service level,
 * the seller also has the option of adding an extra charge based on the weight of the shipping package, or they can
 * add a surcharge instead.
 * 
 * For international shipping rate tables, specific rates may be set up for any and all geographical regions
 * and individual countries within those regions. Similar to domestic shipping rate tables, the seller has the
 * option of adding an extra charge based on the weight of the shipping package. Sellers cannot add a surcharge for
 * international shipping.
 * 
 * <span class="tablenote">
 * Note:
 * The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller
 * account) has rolled out to the US, Australia, Canada (English and French), Italy, UK, and Germany sites. For
 * other sites, only one domestic and one international shipping rate table may be set up per seller. Until the
 * seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the
 * DomesticRateTable
 * and
 * InternationalRateTable
 * tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping
 * rate tables in My eBay, the seller will be required to use the new
 * DomesticRateTableId
 * and
 * InternationalRateTableId
 * tags, and the
 * DomesticRateTable
 * and
 * InternationalRateTable
 * tags will not work.  Note that shipping rate tables can also be applied to Shipping business policies that are
 * applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate
 * tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska &
 * Hawaii, US Protectorates, and APO/FPO locations in US).</span>
 **/
class RateTableDetailsType extends EbatNs_ComplexType
{
    const TAG = 'RateTableDetailsType';
    const NAME = 'RateTableDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var string|null
     */
    protected $DomesticRateTable = null;

    /**
     * @var string|null
     */
    protected $InternationalRateTable = null;

    /**
     * @var string|null
     */
    protected $DomesticRateTableId = null;

    /**
     * @var string|null
     */
    protected $InternationalRateTableId = null;


    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDomesticRateTable()
    {
        return $this->_dc($this->DomesticRateTable, 'DomesticRateTable');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDomesticRateTable($value)
    {
        $this->DomesticRateTable = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalRateTable()
    {
        return $this->_dc($this->InternationalRateTable, 'InternationalRateTable');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInternationalRateTable($value)
    {
        $this->InternationalRateTable = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getDomesticRateTableId()
    {
        return $this->_dc($this->DomesticRateTableId, 'DomesticRateTableId');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setDomesticRateTableId($value)
    {
        $this->DomesticRateTableId = self::_string($value);
    }

    /**
     * @return string|null|mixed Depending on the assigned data converter: mixed
     */
    public function getInternationalRateTableId()
    {
        return $this->_dc($this->InternationalRateTableId, 'InternationalRateTableId');
    }

    /**
     * @param string|null $value
     * @return void
     */
    public function setInternationalRateTableId($value)
    {
        $this->InternationalRateTableId = self::_string($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'DomesticRateTable' => [],
            'InternationalRateTable' => [],
            'DomesticRateTableId' => [],
            'InternationalRateTableId' => []
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

RateTableDetailsType::_register();
