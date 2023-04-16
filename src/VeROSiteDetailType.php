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
 * Type used by the
 * VeROSiteDetailType
 * container, which is returned in
 * GetVeROReasonCodeDetails
 * . Each
 * VeROSiteDetailType
 * container will contain one or more reasons how an eBay listing could possibly infringe upon the intellectual
 * property rights of a product owner.
 **/
class VeROSiteDetailType extends EbatNs_ComplexType
{
    const TAG = 'VeROSiteDetailType';
    const NAME = 'VeROSiteDetailType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SiteCodeType|null
     */
    protected $Site = null;

    /**
     * @var ReasonCodeDetailType[]|null
     */
    protected $ReasonCodeDetail = [];


    /**
     * @return SiteCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getSite()
    {
        return $this->_dc($this->Site);
    }

    /**
     * @param SiteCodeType|null $value
     * @return void
     */
    public function setSite($value)
    {
        $this->Site = $this->_enum($value, SiteCodeType::class);
    }

    /**
     * @return ReasonCodeDetailType[]|ReasonCodeDetailType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getReasonCodeDetail($index = null)
    {
        return $this->_dc($index === null
            ? $this->ReasonCodeDetail
            : (count($this->ReasonCodeDetail) > $index
                ? $this->ReasonCodeDetail[$index]
                : null), 'ReasonCodeDetail');
    }

    /**
     * @param ReasonCodeDetailType|null|ReasonCodeDetailType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setReasonCodeDetail($value, $index = null)
    {
        if ($index === null) {
            $this->ReasonCodeDetail = $value;
        } else {
            $this->ReasonCodeDetail[$index] = [];
            
            foreach ($value as $item) {
                $this->addReasonCodeDetail($item);
            }
        }
    }

    /**
     * @param ReasonCodeDetailType|null $value
     * @return void
     */
    public function addReasonCodeDetail($value)
    {
        $this->ReasonCodeDetail[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'Site' => ['type' => 'SiteCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'ReasonCodeDetail' => ['type' => 'ReasonCodeDetailType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

VeROSiteDetailType::_register();
