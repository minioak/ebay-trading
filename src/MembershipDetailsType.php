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
 * Membership
 * container that is returned in the response of the
 * GetUser
 * call if the seller is enrolled in one or more eBay membership programs such as eBay Plus.
 * 
 * <span class="tablenote">
 * Note:
 * Currently, eBay Plus is available only to buyers on Germany and Australia marketplaces.
 * </span>
 **/
class MembershipDetailsType extends EbatNs_ComplexType
{
    const TAG = 'MembershipDetailsType';
    const NAME = 'MembershipDetailsType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var MembershipDetailType[]|null
     */
    protected $Program = [];


    /**
     * @return MembershipDetailType[]|MembershipDetailType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getProgram($index = null)
    {
        return $this->_dc($index === null
            ? $this->Program
            : (count($this->Program) > $index
                ? $this->Program[$index]
                : null), 'Program');
    }

    /**
     * @param MembershipDetailType|null|MembershipDetailType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setProgram($value, $index = null)
    {
        if ($index === null) {
            $this->Program = $value;
        } else {
            $this->Program[$index] = [];
            
            foreach ($value as $item) {
                $this->addProgram($item);
            }
        }
    }

    /**
     * @param MembershipDetailType|null $value
     * @return void
     */
    public function addProgram($value)
    {
        $this->Program[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Program' => ['type' => 'MembershipDetailType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

MembershipDetailsType::_register();
