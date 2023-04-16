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
 * This type is used to hold an array of one or more eBay for Charity organizations that are affiliated with the
 * seller's account.
 **/
class CharityAffiliationDetailsType extends EbatNs_ComplexType
{
    const TAG = 'CharityAffiliationDetailsType';
    const NAME = 'CharityAffiliationDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CharityAffiliationDetailType[]|null
     */
    protected $CharityAffiliationDetail = [];


    /**
     * @return CharityAffiliationDetailType[]|CharityAffiliationDetailType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCharityAffiliationDetail($index = null)
    {
        return $this->_dc($index === null
            ? $this->CharityAffiliationDetail
            : (count($this->CharityAffiliationDetail) > $index
                ? $this->CharityAffiliationDetail[$index]
                : null), 'CharityAffiliationDetail');
    }

    /**
     * @param CharityAffiliationDetailType|null|CharityAffiliationDetailType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCharityAffiliationDetail($value, $index = null)
    {
        if ($index === null) {
            $this->CharityAffiliationDetail = $value;
        } else {
            $this->CharityAffiliationDetail[$index] = [];
            
            foreach ($value as $item) {
                $this->addCharityAffiliationDetail($item);
            }
        }
    }

    /**
     * @param CharityAffiliationDetailType|null $value
     * @return void
     */
    public function addCharityAffiliationDetail($value)
    {
        $this->CharityAffiliationDetail[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['CharityAffiliationDetail' => ['type' => 'CharityAffiliationDetailType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

CharityAffiliationDetailsType::_register();
