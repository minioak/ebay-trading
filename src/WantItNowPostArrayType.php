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
 * This type is deprecated.
 **/
class WantItNowPostArrayType extends EbatNs_ComplexType
{
    const TAG = 'WantItNowPostArrayType';
    const NAME = 'WantItNowPostArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var WantItNowPostType[]|null
     */
    protected $WantItNowPost = [];


    /**
     * @return WantItNowPostType[]|WantItNowPostType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getWantItNowPost($index = null)
    {
        return $this->_dc($index === null
            ? $this->WantItNowPost
            : (count($this->WantItNowPost) > $index
                ? $this->WantItNowPost[$index]
                : null), 'WantItNowPost');
    }

    /**
     * @param WantItNowPostType|null|WantItNowPostType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setWantItNowPost($value, $index = null)
    {
        if ($index === null) {
            $this->WantItNowPost = $value;
        } else {
            $this->WantItNowPost[$index] = [];
            
            foreach ($value as $item) {
                $this->addWantItNowPost($item);
            }
        }
    }

    /**
     * @param WantItNowPostType|null $value
     * @return void
     */
    public function addWantItNowPost($value)
    {
        $this->WantItNowPost[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['WantItNowPost' => ['type' => 'WantItNowPostType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

WantItNowPostArrayType::_register();
