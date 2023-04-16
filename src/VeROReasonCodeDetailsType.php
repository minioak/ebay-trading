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
 * Container for reason code details for all sites.
 **/
class VeROReasonCodeDetailsType extends EbatNs_ComplexType
{
    const TAG = 'VeROReasonCodeDetailsType';
    const NAME = 'VeROReasonCodeDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var VeROSiteDetailType[]|null
     */
    protected $VeROSiteDetail = [];


    /**
     * @return VeROSiteDetailType[]|VeROSiteDetailType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getVeROSiteDetail($index = null)
    {
        return $this->_dc($index === null
            ? $this->VeROSiteDetail
            : (count($this->VeROSiteDetail) > $index
                ? $this->VeROSiteDetail[$index]
                : null), 'VeROSiteDetail');
    }

    /**
     * @param VeROSiteDetailType|null|VeROSiteDetailType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setVeROSiteDetail($value, $index = null)
    {
        if ($index === null) {
            $this->VeROSiteDetail = $value;
        } else {
            $this->VeROSiteDetail[$index] = [];
            
            foreach ($value as $item) {
                $this->addVeROSiteDetail($item);
            }
        }
    }

    /**
     * @param VeROSiteDetailType|null $value
     * @return void
     */
    public function addVeROSiteDetail($value)
    {
        $this->VeROSiteDetail[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['VeROSiteDetail' => ['type' => 'VeROSiteDetailType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

VeROReasonCodeDetailsType::_register();
