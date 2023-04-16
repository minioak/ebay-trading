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
 * Contains information about one seller associated with a registered eBay for Charity nonprofit organization.
 **/
class CharitySellerType extends EbatNs_ComplexType
{
    const TAG = 'CharitySellerType';
    const NAME = 'CharitySellerType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CharitySellerStatusCodeType|null
     */
    protected $CharitySellerStatus = null;

    /**
     * @var CharityAffiliationType[]|null
     */
    protected $CharityAffiliation = [];

    /**
     * @var bool|null "true" or "false"
     */
    protected $TermsAndConditionsAccepted = null;


    /**
     * @return CharitySellerStatusCodeType|null|mixed Depending on the assigned data converter: mixed
     */
    public function getCharitySellerStatus()
    {
        return $this->_dc($this->CharitySellerStatus);
    }

    /**
     * @param CharitySellerStatusCodeType|null $value
     * @return void
     */
    public function setCharitySellerStatus($value)
    {
        $this->CharitySellerStatus = $this->_enum($value, CharitySellerStatusCodeType::class);
    }

    /**
     * @return CharityAffiliationType[]|CharityAffiliationType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCharityAffiliation($index = null)
    {
        return $this->_dc($index === null
            ? $this->CharityAffiliation
            : (count($this->CharityAffiliation) > $index
                ? $this->CharityAffiliation[$index]
                : null), 'CharityAffiliation');
    }

    /**
     * @param CharityAffiliationType|null|CharityAffiliationType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCharityAffiliation($value, $index = null)
    {
        if ($index === null) {
            $this->CharityAffiliation = $value;
        } else {
            $this->CharityAffiliation[$index] = [];
            
            foreach ($value as $item) {
                $this->addCharityAffiliation($item);
            }
        }
    }

    /**
     * @param CharityAffiliationType|null $value
     * @return void
     */
    public function addCharityAffiliation($value)
    {
        $this->CharityAffiliation[] = $value;
    }

    /**
     * @return bool|null|mixed Depending on the assigned data converter: mixed
     */
    public function getTermsAndConditionsAccepted()
    {
        return $this->_dc($this->TermsAndConditionsAccepted === 'true', 'TermsAndConditionsAccepted');
    }

    /**
     * @param bool|null $value
     * @return void
     */
    public function setTermsAndConditionsAccepted($value)
    {
        $this->TermsAndConditionsAccepted = self::_bool($value);
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements([
            'CharitySellerStatus' => ['type' => 'CharitySellerStatusCodeType', 'enum' => true, 'xmlns' => self::XMLNS],
            'CharityAffiliation' => ['type' => 'CharityAffiliationType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*'],
            'TermsAndConditionsAccepted' => ['type' => 'bool']
        ], parent::NAME);

        self::assignAttributes([]);
    }

}

CharitySellerType::_register();
