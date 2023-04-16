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
 * Type is used by the
 * MemberMessage
 * container that is returned in the
 * GetMemberMessages
 * and
 * GetAdFormatLeads
 * calls. The
 * MemberMessage
 * container will consists of one or more member messages that meet the input criteria in the call request.
 **/
class MemberMessageExchangeArrayType extends EbatNs_ComplexType
{
    const TAG = 'MemberMessageExchangeArrayType';
    const NAME = 'MemberMessageExchangeArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var MemberMessageExchangeType[]|null
     */
    protected $MemberMessageExchange = [];


    /**
     * @return MemberMessageExchangeType[]|MemberMessageExchangeType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getMemberMessageExchange($index = null)
    {
        return $this->_dc($index === null
            ? $this->MemberMessageExchange
            : (count($this->MemberMessageExchange) > $index
                ? $this->MemberMessageExchange[$index]
                : null), 'MemberMessageExchange');
    }

    /**
     * @param MemberMessageExchangeType|null|MemberMessageExchangeType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setMemberMessageExchange($value, $index = null)
    {
        if ($index === null) {
            $this->MemberMessageExchange = $value;
        } else {
            $this->MemberMessageExchange[$index] = [];
            
            foreach ($value as $item) {
                $this->addMemberMessageExchange($item);
            }
        }
    }

    /**
     * @param MemberMessageExchangeType|null $value
     * @return void
     */
    public function addMemberMessageExchange($value)
    {
        $this->MemberMessageExchange[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['MemberMessageExchange' => ['type' => 'MemberMessageExchangeType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

MemberMessageExchangeArrayType::_register();
