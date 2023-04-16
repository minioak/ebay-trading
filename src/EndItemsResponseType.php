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
 * Contains a response of the resulting status of ending each item.
 **/
class EndItemsResponseType extends EbatNs_Response
{
    const TAG = 'EndItemsResponseType';
    const NAME = 'EndItemsResponseType';
    const XMLNS = 'urn:ebay:apis:eBLBaseComponents';

    /**
     * @var EndItemResponseContainerType[]|null
     */
    protected $EndItemResponseContainer = [];


    /**
     * @return EndItemResponseContainerType[]|EndItemResponseContainerType|null|mixed Depending on the assigned data converter: mixed
     * @param int|null $index (optional)
     */
    public function getEndItemResponseContainer($index = null)
    {
        return $this->_dc($index === null
            ? $this->EndItemResponseContainer
            : (count($this->EndItemResponseContainer) > $index
                ? $this->EndItemResponseContainer[$index]
                : null), 'EndItemResponseContainer');
    }

    /**
     * @param EndItemResponseContainerType|null|EndItemResponseContainerType[] $value
     * @param int|null $index (optional)
     * @return void
     */
    public function setEndItemResponseContainer($value, $index = null)
    {
        if ($index === null) {
            $this->EndItemResponseContainer = $value;
        } else {
            $this->EndItemResponseContainer[$index] = [];
            
            foreach ($value as $item) {
                $this->addEndItemResponseContainer($item);
            }
        }
    }

    /**
     * @param EndItemResponseContainerType|null $value
     * @return void
     */
    public function addEndItemResponseContainer($value)
    {
        $this->EndItemResponseContainer[] = $value;
    }
    
    /**
     * Register child elements and attributes
     */
    public static function _register()
    {
        self::assignElements(['EndItemResponseContainer' => ['type' => 'EndItemResponseContainerType', 'xmlns' => self::XMLNS, 'cardinality' => '0..*']], parent::NAME);
        self::assignAttributes([]);
    }

}

EndItemsResponseType::_register();
