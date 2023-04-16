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
 * Type used by the <strong>RecoupmentPolicyConsent</strong> container that is returned in the
 * <strong>GetItem</strong> call response to indicate which sites the user (specified in <strong>UserID</strong>
 * field of call request) has signed a cross-border trade Recoupment Policy Agreement.
 **/
class RecoupmentPolicyConsentType extends EbatNs_ComplexType
{
    const TAG = 'RecoupmentPolicyConsentType';
    const NAME = 'RecoupmentPolicyConsentType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var SiteCodeType[]|null
     */
    protected $Site = [];


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
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Site' => ['type' => 'SiteCodeType', 'enum' => true, 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

RecoupmentPolicyConsentType::_register();
