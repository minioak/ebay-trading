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
 * BuyerSatisfaction
 * container returned in the
 * 
 * GetSellerDashboard
 * response. The
 * BuyerSatisfaction
 * 
 * container consists of the seller's buyer satisfaction rating, as well as any alerts
 * related to customer service.
 **/
class BuyerSatisfactionDashboardType extends EbatNs_ComplexType
{
    const TAG = 'BuyerSatisfactionDashboardType';
    const NAME = 'BuyerSatisfactionDashboardType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var BuyerSatisfactionStatusCodeType|null
     */
    protected $Status = null;

    /**
     * @var SellerDashboardAlertType[]|null
     */
    protected $Alert = [];


    /**
     * @return BuyerSatisfactionStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getStatus()
    {
        return $this->_dc($this->Status);
    }

    /**
     * @param BuyerSatisfactionStatusCodeType|null $value
     * @return void
     */
    public function setStatus($value)
    {
        $this->Status = $this->_enum($value, BuyerSatisfactionStatusCodeType::class);
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
            'Status' => ['type' => 'BuyerSatisfactionStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'Alert' => ['type' => 'SellerDashboardAlertType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

BuyerSatisfactionDashboardType::_register();
