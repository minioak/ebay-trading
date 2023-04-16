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
 * This is the base response type for the
 * GetCharities
 * call. This call is used to search for eBay for Charity nonprofit organizations. A
 * Charity
 * container is returned for each nonprofit organization that matches the criteria in the call request.
 **/
class GetCharitiesResponseType extends EbatNs_Response
{
    const TAG = 'GetCharitiesResponseType';
    const NAME = 'GetCharitiesResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var CharityInfoType[]|null
     */
    protected $Charity = [];


    /**
     * @return CharityInfoType[]|CharityInfoType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getCharity($index = null)
    {
        return $this->_dc($index === null
            ? $this->Charity
            : (count($this->Charity) > $index
                ? $this->Charity[$index]
                : null), 'Charity');
    }

    /**
     * @param CharityInfoType|null|CharityInfoType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setCharity($value, $index = null)
    {
        if ($index === null) {
            $this->Charity = $value;
        } else {
            $this->Charity[$index] = [];
            
            foreach ($value as $item) {
                $this->addCharity($item);
            }
        }
    }

    /**
     * @param CharityInfoType|null $value
     * @return void
     */
    public function addCharity($value)
    {
        $this->Charity[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['Charity' => ['type' => 'CharityInfoType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

GetCharitiesResponseType::_register();
