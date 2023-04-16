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
 * PowerSellerStatus
 * container returned in the
 * 
 * GetSellerDashboard
 * response. The
 * PowerSellerStatus
 * 
 * container is only returned if the seller making the call is a Power Seller.
 **/
class PowerSellerDashboardType extends EbatNs_ComplexType
{
    const TAG = 'PowerSellerDashboardType';
    const NAME = 'PowerSellerDashboardType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SellerLevelCodeType|null
     */
    protected $Level = null;

    /**
     * @var SellerDashboardAlertType[]|null
     */
    protected $Alert = [];


    /**
     * @return SellerLevelCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getLevel()
    {
        return $this->_dc($this->Level);
    }

    /**
     * @param SellerLevelCodeType|null $value
     * @return void
     */
    public function setLevel($value)
    {
        $this->Level = $this->_enum($value, SellerLevelCodeType::class);
    }

    /**
     * @return SellerDashboardAlertType[]|SellerDashboardAlertType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getAlert($index = null)
    {
        return $this->_dc($index === null
            ? $this->Alert
            : (count($this->Alert) > $index
                ? $this->Alert[$index]
                : null), 'Alert');
    }

    /**
     * @param SellerDashboardAlertType|null|SellerDashboardAlertType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setAlert($value, $index = null)
    {
        if ($index === null) {
            $this->Alert = $value;
        } else {
            $this->Alert[$index] = [];
            
            foreach ($value as $item) {
                $this->addAlert($item);
            }
        }
    }

    /**
     * @param SellerDashboardAlertType|null $value
     * @return void
     */
    public function addAlert($value)
    {
        $this->Alert[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Level' => ['type' => 'SellerLevelCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Alert' => ['type' => 'SellerDashboardAlertType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

PowerSellerDashboardType::_register();
