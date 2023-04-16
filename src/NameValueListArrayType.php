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
 * A list of one or more valid names and corresponding values. Currently
 * used to identify Item Specifics and individual variations within a multiple-variation listing.
 **/
class NameValueListArrayType extends EbatNs_ComplexType
{
    const TAG = 'NameValueListArrayType';
    const NAME = 'NameValueListArrayType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var NameValueListType[]|null
     */
    protected $NameValueList = [];


    /**
     * @return NameValueListType[]|NameValueListType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getNameValueList($index = null)
    {
        return $this->_dc($index === null
            ? $this->NameValueList
            : (count($this->NameValueList) > $index
                ? $this->NameValueList[$index]
                : null), 'NameValueList');
    }

    /**
     * @param NameValueListType|null|NameValueListType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setNameValueList($value, $index = null)
    {
        if ($index === null) {
            $this->NameValueList = $value;
        } else {
            $this->NameValueList[$index] = [];
            
            foreach ($value as $item) {
                $this->addNameValueList($item);
            }
        }
    }

    /**
     * @param NameValueListType|null $value
     * @return void
     */
    public function addNameValueList($value)
    {
        $this->NameValueList[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['NameValueList' => ['type' => 'NameValueListType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

NameValueListArrayType::_register();
